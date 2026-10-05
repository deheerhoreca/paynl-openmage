<?php

declare(strict_types=1);

require dirname(__DIR__).'/vendor/autoload.php';

if (!class_exists('Paynl\\Config')) {
    fwrite(STDERR, "PAY. SDK is not available from the package-root autoloader.\n");
    exit(1);
}

class Mage_Core_Model_Observer
{
}

$testRoot = sys_get_temp_dir().'/paynl-parent-autoload-'.bin2hex(random_bytes(8));
$modelDir = $testRoot.'/Payment/Model';

try {
    if (!mkdir($modelDir, 0777, true) && !is_dir($modelDir)) {
        throw new RuntimeException('Unable to create test fixture.');
    }

    $observerFile = dirname(__DIR__).'/app/code/community/Pay/Payment/Model/Observer.php';
    if (!copy($observerFile, $modelDir.'/Observer.php')) {
        throw new RuntimeException('Unable to copy observer fixture.');
    }

    require $modelDir.'/Observer.php';

    $observer = new Pay_Payment_Model_Observer();
    $observer->addAutoloader();
    $observer->addAutoloader();
} finally {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($testRoot, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($files as $file) {
        $file->isDir() ? rmdir($file->getPathname()) : unlink($file->getPathname());
    }
    rmdir($testRoot);
}

echo "PASS: parent Composer autoloader\n";
