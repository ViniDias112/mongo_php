<?php
$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$db=new \MongoDB\Driver\BulkWrite;

$db->insert(['nome'=>'Vinicius Dias','idade'=>19]);

$manager->executeBulkWrite('raiz.familia',$db);