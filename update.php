<?php

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;

// $up->update(['nome'=>'vini'],['nome'=>'vini','idade'=>20]);

$up->update(['nome'=>'vini'],['$set'=>['nome'=>'Vini Dias']]);

$manager->executeBulkWrite('raiz.familia',$up); 