<?php

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$query=new \MongoDB\Driver\Query([]);

$cursor=$manager->executeQuery('raiz.familia',$query);

foreach ($cursor as $c) {

	echo $c->nome ;
	echo $c->idade;
} 