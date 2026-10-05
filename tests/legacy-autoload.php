<?php

declare(strict_types=1);

class Mage_Core_Model_Observer
{
}

require dirname(__DIR__).'/app/code/community/Pay/Payment/Model/Observer.php';

$observer = new Pay_Payment_Model_Observer();
$observer->addAutoloader();
$observer->addAutoloader();

if (!class_exists('Paynl\\Config')) {
    fwrite(STDERR, "PAY. SDK is not available from the legacy nested autoloader.\n");
    exit(1);
}

echo "PASS: legacy nested autoloader\n";
