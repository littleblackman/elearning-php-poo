<?php

class BddManager
{
    protected $bdd;
    private $host      = "localhost";
    private $login     = "root";
    private $password  = "root";

    public function __construct()
    {
        $bdd = new PDO('mysql:host='.$this->host.';dbname=my_library;charset=utf8', $this->login, $this->password);
        $this->bdd = $bdd;
    }

    public function deleteById($table, $entity_id)
    {
        $bdd = $this->bdd;
        $req = $bdd->prepare("DELETE FROM ".$table." WHERE id = ".$entity_id);
        $req->execute();

    }

}

