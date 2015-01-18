<?php

namespace Proxies\__CG__\PM\CharacterBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClassSkill extends \PM\CharacterBundle\Entity\ClassSkill implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'PM\\CharacterBundle\\Entity\\ClassSkill' . "\0" . 'classDnD', '' . "\0" . 'PM\\CharacterBundle\\Entity\\ClassSkill' . "\0" . 'skill', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
        }

        return array('__isInitialized__', '' . "\0" . 'PM\\CharacterBundle\\Entity\\ClassSkill' . "\0" . 'classDnD', '' . "\0" . 'PM\\CharacterBundle\\Entity\\ClassSkill' . "\0" . 'skill', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClassSkill $proxy) {
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
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($createDate));

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', array());

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', array($updateDate));

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', array());

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateComment($updateComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateComment', array($updateComment));

        return parent::setUpdateComment($updateComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateComment', array());

        return parent::getUpdateComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassDnD(\PM\CharacterBundle\Entity\classDnD $classDnD)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassDnD', array($classDnD));

        return parent::setClassDnD($classDnD);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassDnD()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassDnD', array());

        return parent::getClassDnD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkill(\PM\CharacterBundle\Entity\Skill $skill)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkill', array($skill));

        return parent::setSkill($skill);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkill()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkill', array());

        return parent::getSkill();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateUser(\PM\UserBundle\Entity\User $createUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateUser', array($createUser));

        return parent::setCreateUser($createUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateUser', array());

        return parent::getCreateUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateUser(\PM\UserBundle\Entity\User $updateUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateUser', array($updateUser));

        return parent::setUpdateUser($updateUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateUser', array());

        return parent::getUpdateUser();
    }

}
