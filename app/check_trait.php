<?php
// app/check_trait.php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Eccube\Kernel;
use Eccube\Entity\Customer;

$kernel = new Kernel('dev', true); // 'prod', false でもOK
$kernel->boot();

$em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
$meta = $em->getClassMetadata(Customer::class);

echo isset($meta->associationMappings['customerExt'])
  ? "✅ customerExt association exists\n"
  : "❌ customerExt association NOT found\n";
