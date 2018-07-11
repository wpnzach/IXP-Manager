<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Infrastructure extends \Entities\Infrastructure implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'shortname', 'id', 'Switchers', '' . "\0" . 'Entities\\Infrastructure' . "\0" . 'Vlans', 'peeringdb_ix_id', 'ixf_ix_id', '' . "\0" . 'Entities\\Infrastructure' . "\0" . 'isPrimary'];
        }

        return ['__isInitialized__', 'name', 'shortname', 'id', 'Switchers', '' . "\0" . 'Entities\\Infrastructure' . "\0" . 'Vlans', 'peeringdb_ix_id', 'ixf_ix_id', '' . "\0" . 'Entities\\Infrastructure' . "\0" . 'isPrimary'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Infrastructure $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortname($shortname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortname', [$shortname]);

        return parent::setShortname($shortname);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortname', []);

        return parent::getShortname();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addSwitcher(\Entities\Switcher $switchers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSwitcher', [$switchers]);

        return parent::addSwitcher($switchers);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSwitcher(\Entities\Switcher $switchers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSwitcher', [$switchers]);

        return parent::removeSwitcher($switchers);
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchers($type = NULL, $active = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchers', [$type, $active]);

        return parent::getSwitchers($type, $active);
    }

    /**
     * {@inheritDoc}
     */
    public function addVlan(\Entities\Vlan $vlans)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVlan', [$vlans]);

        return parent::addVlan($vlans);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVlan(\Entities\Vlan $vlans)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVlan', [$vlans]);

        return parent::removeVlan($vlans);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlans()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlans', []);

        return parent::getVlans();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPrimary($isPrimary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPrimary', [$isPrimary]);

        return parent::setIsPrimary($isPrimary);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPrimary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPrimary', []);

        return parent::getIsPrimary();
    }

    /**
     * {@inheritDoc}
     */
    public function getPeeringdbIxId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeeringdbIxId', []);

        return parent::getPeeringdbIxId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeeringdbIxId($id): \Entities\Infrastructure
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeeringdbIxId', [$id]);

        return parent::setPeeringdbIxId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getIxfIxId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIxfIxId', []);

        return parent::getIxfIxId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIxfIxId($id): \Entities\Infrastructure
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIxfIxId', [$id]);

        return parent::setIxfIxId($id);
    }

}
