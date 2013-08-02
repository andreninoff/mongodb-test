<?php

try{

	// connect
	$m = new Mongo("localhost:27017");

	// select a database
	$db = $m->db_test;

	// select a collection (analogous to a relational database's table)
	$collection = $db->aluno;

	// add a record
	//$discplinas = array("Biologia", "Física");
	//$document = array( "nome" => "André", "email" => "andre@gmail.com", "disciplinas" => $discplinas);
	//$collection->insert($document);

	// del a recor
	//$document = array("nome" => "andre");
	//$collection->remove($document);

	// find everything in the collection
	$cursor = $collection->find();

	// iterate through the results
	foreach ($cursor as $document) {
	    echo $document["nome"] . "\n";
	}

}catch(MongoException $me){
    die($me->getMessage());
}catch(Exception $e){
	die($e->getMessage());
}

?>