<?php

namespace Container9txNgIT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc127 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf2a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2fcf3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getConnection', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getMetadataFactory', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getExpressionBuilder', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'beginTransaction', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getCache', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'transactional', array('func' => $func), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'commit', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->commit();
    }

    public function rollback()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'rollback', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'createQuery', array('dql' => $dql), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'createQueryBuilder', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'flush', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'clear', array('entityName' => $entityName), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'close', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->close();
    }

    public function persist($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'persist', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'remove', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'refresh', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'detach', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'merge', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'contains', array('entity' => $entity), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getEventManager', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getConfiguration', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'isOpen', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getUnitOfWork', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getProxyFactory', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'getFilters', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'isFiltersStateClean', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'hasFilters', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return $this->valueHoldercc127->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbf2a9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercc127) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc127 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc127->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__get', ['name' => $name], $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        if (isset(self::$publicProperties2fcf3[$name])) {
            return $this->valueHoldercc127->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc127;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc127;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc127;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc127;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__isset', array('name' => $name), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc127;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc127;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__unset', array('name' => $name), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc127;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc127;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__clone', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        $this->valueHoldercc127 = clone $this->valueHoldercc127;
    }

    public function __sleep()
    {
        $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, '__sleep', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;

        return array('valueHoldercc127');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf2a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf2a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf2a9 && ($this->initializerbf2a9->__invoke($valueHoldercc127, $this, 'initializeProxy', array(), $this->initializerbf2a9) || 1) && $this->valueHoldercc127 = $valueHoldercc127;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc127;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc127;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
