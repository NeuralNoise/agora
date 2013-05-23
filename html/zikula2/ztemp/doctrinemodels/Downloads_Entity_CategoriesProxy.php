<?php

namespace DoctrineProxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Downloads_Entity_CategoriesProxy extends \Downloads_Entity_Categories implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getCid()
    {
        $this->__load();
        return parent::getCid();
    }

    public function setCid($cid)
    {
        $this->__load();
        return parent::setCid($cid);
    }

    public function getPid()
    {
        $this->__load();
        return parent::getPid();
    }

    public function setPid($pid)
    {
        $this->__load();
        return parent::setPid($pid);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getReflection()
    {
        $this->__load();
        return parent::getReflection();
    }

    public function offsetExists($key)
    {
        $this->__load();
        return parent::offsetExists($key);
    }

    public function offsetGet($key)
    {
        $this->__load();
        return parent::offsetGet($key);
    }

    public function offsetSet($key, $value)
    {
        $this->__load();
        return parent::offsetSet($key, $value);
    }

    public function offsetUnset($key)
    {
        $this->__load();
        return parent::offsetUnset($key);
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function merge(array $array)
    {
        $this->__load();
        return parent::merge($array);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'cid', 'pid', 'title', 'description');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}