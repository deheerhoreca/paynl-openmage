<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 9-3-17
 * Time: 16:09
 */
class Pay_Payment_Model_Observer extends Mage_Core_Model_Observer
{
    static $shouldAdd = true;

    public function addAutoloader()
    {
        if (!self::$shouldAdd) {
            return;
        }

        if (!class_exists('Paynl\\Config')) {
            $autoloadFile = dirname(dirname(__FILE__)).'/vendor/autoload.php';
            if (!is_file($autoloadFile)) {
                throw new RuntimeException('PAY. SDK autoloader is missing: '.$autoloadFile);
            }
            require_once $autoloadFile;
        }

        self::$shouldAdd = false;
    }

}
