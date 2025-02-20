<div class="row">

    <div class="col-lg-6 mb-4">


        <h3>
            NOC Details
        </h3>
        <hr>
        <?= Former::open()
            ->populate( $t->dataNocDetail )
            ->method( 'post' )
            ->id( "noc" )
            ->action( route ( "dashboard@store-noc-details" ) )
            ->customInputWidthClass( 'col-sm-6' )
            ->customLabelWidthClass( 'col-sm-3' )
            ->actionButtonsCustomClass( "grey-box")
        ?>

        <?= Former::phone( 'nocphone' )
            ->label( 'Phone' )
            ->placeholder( config( 'ixp_fe.customer.form.placeholders.phone' ) )
            ->blockHelp( 'Working hours phone number for contacting the ' . config( 'ixp_fe.lang.customer.one' ) . ' NOC.<br><br>'
                . 'This is available to all other ' . config( 'ixp_fe.lang.customer.many' ) . '.' );
        ?>

        <?= Former::phone( 'noc24hphone' )
            ->label( '24h Phone' )
            ->placeholder( config( 'ixp_fe.customer.form.placeholders.phone' ) )
            ->blockHelp( '24/7 emergency phone number for contacting the ' . config( 'ixp_fe.lang.customer.one' ) . ' NOC.<br><br>'
                . 'This is available to all other ' . config( 'ixp_fe.lang.customer.many' ) . '.' );
        ?>

        <?= Former::email( 'nocemail' )
            ->label( 'Email' )
            ->placeholder( 'noc@example.com' )
            ->blockHelp( 'The NOC email is used in ' . config( 'ixp_fe.lang.customer.one' ) . ' lists. We try to encourage '
                . 'the use of a role alias such as noc@example.com but this does not '
                . 'always work out.<br><br>'
                . 'This is available to all other ' . config( 'ixp_fe.lang.customer.many' ) . '.' );
        ?>

        <?= Former::select( 'nochours' )
            ->label( 'Hours' )
            ->fromQuery( \Entities\Customer::$NOC_HOURS )
            ->placeholder( 'Choose NOC Hours' )
            ->addClass( 'chzn-select' )
            ->blockHelp( 'The hours during which the NOC is available.' );
        ?>

        <?= Former::url( 'nocwww' )
            ->label( 'Website' )
            ->placeholder( 'http://www.noc.example.com/' )
            ->blockHelp( 'An optional NOC information email page / status page.' );
        ?>

        <?php if( !Auth::getUser()->isCustUser() ): ?>
            <?= Former::actions(
                Former::primary_submit( 'Update NOC Details' )->class( "mb-sm-0 mb-2" ),
                Former::success_button( 'Help' )->id( 'help-btn' )->class( "mb-sm-0 mb-2" )
            );
            ?>
        <?php endif; ?>

        <?= Former::close() ?>


    </div>
    <div class="col-lg-6">
        <?php if( !config('ixp.reseller.no_billing') || !$t->resellerMode() || !$t->c->isResoldCustomer() ): ?>

            <h3>
                Billing Details
            </h3>
            <hr>
            <?= Former::open()
                ->populate( $t->dataBillingDetail )
                ->method( 'post' )
                ->id( "billing" )
                ->action( route ( "dashboard@store-billing-details" ) )
                ->customInputWidthClass( 'col-sm-6' )
                ->customLabelWidthClass( 'col-sm-3' )
                ->actionButtonsCustomClass( "grey-box")
            ?>

            <?= Former::text( 'billingContactName' )
                ->label( 'Contact' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingAddress1' )
                ->id( 'billingAddress1' )
                ->label( 'Address' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingAddress2' )
                ->id( 'billingAddress2' )
                ->label( ' ' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingAddress3' )
                ->id( 'billingAddress3' )
                ->label( ' ' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingTownCity' )
                ->id( 'billingTownCity' )
                ->label( 'City' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingPostcode' )
                ->id( 'billingPostcode' )
                ->label( 'Postcode' )
                ->blockHelp( '' );
            ?>

            <?= Former::select( 'billingCountry' )
                ->label( 'Country' )
                ->fromQuery( $t->countries, 'name', 'iso_3166_2' )
                ->placeholder( 'Choose a country' )
                ->addClass( 'chzn-select' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingEmail' )
                ->id( 'billingEmail' )
                ->label( 'Email' )
                ->placeholder( 'billing@example.com' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'billingTelephone' )
                ->id( 'billingTelephone' )
                ->label( 'Telephone' )
                ->placeholder( '+353 1 234 5678' )
                ->blockHelp( '' );
            ?>

            <?= Former::text( 'invoiceEmail' )
                ->id( 'invoiceEmail' )
                ->label( 'Invoice E-Mail' )
                ->placeholder( 'invoicing@example.com8' )
                ->blockHelp( '' );
            ?>

            <?php if( !Auth::getUser()->isCustUser() ): ?>
                <?= Former::actions(
                    Former::primary_submit( 'Update Billing Details' ),
                    Former::success_button( 'Help' )->class( "help-btn mb-sm-0 mb-2" )
                );
                ?>
            <?php endif; ?>


            <?= Former::close() ?>

        <?php endif; ?>
    </div>

</div>
