<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \AppBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'key', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'eventDate', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'place', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactName', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactEmail', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactPhone', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'idEvent', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'logotipo');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'key', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'eventDate', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'place', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactName', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactEmail', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'contactPhone', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'idEvent', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'logotipo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function setKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', array($key));

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', array());

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDate($eventDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDate', array($eventDate));

        return parent::setEventDate($eventDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDate', array());

        return parent::getEventDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlace($place)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlace', array($place));

        return parent::setPlace($place);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlace', array());

        return parent::getPlace();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactName($contactName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactName', array($contactName));

        return parent::setContactName($contactName);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactName', array());

        return parent::getContactName();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactEmail($contactEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactEmail', array($contactEmail));

        return parent::setContactEmail($contactEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactEmail', array());

        return parent::getContactEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactPhone($contactPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactPhone', array($contactPhone));

        return parent::setContactPhone($contactPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactPhone', array());

        return parent::getContactPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEvent()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdEvent();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEvent', array());

        return parent::getIdEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogotipo($logotipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogotipo', array($logotipo));

        return parent::setLogotipo($logotipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogotipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogotipo', array());

        return parent::getLogotipo();
    }

}
