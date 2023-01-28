<?php


namespace App;


trait SingletonTrait
{
    protected static $instance = null;

    protected function __construct()
    {
    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}