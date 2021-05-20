<?php


namespace App\Objects\Singleton;


class StoreManager
{
    public function setupSelectedStore(Store $store)
    {
        $instance = CurrentStore::getInstance();
        $instance->setup($store);
    }

    public function getSelectedStore(): ?Store
    {
        $instance = CurrentStore::getInstance();
        return $instance->getStore();
    }
}
