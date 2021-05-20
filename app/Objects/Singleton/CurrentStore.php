<?php


namespace App\Objects\Singleton;



class CurrentStore
{
    protected static ?CurrentStore $instance = null;
    protected ?Store $store = null;

    public static function getInstance(): CurrentStore
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function setup(Store $store)
    {
        $instance = $this->getInstance();
        $instance->store = $store;
    }

    public function getStore(): ?Store
    {
        return $this->store;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
