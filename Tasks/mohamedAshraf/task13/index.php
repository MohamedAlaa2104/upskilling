<?php

require_once 'db.php';
require_once 'generate_products.php';

$start = microtime(true); // 🕒 Start timing

$query = bulkInsertFunction();
echo "Query generated. Running now...\n";

$conn->prepare($query)->execute();

$end = microtime(true); // 🕒 End timing
$duration = $end - $start;

echo "✅ Query executed in " . round($duration, 2) . " seconds.\n";