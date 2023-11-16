<?php
   
   include_once __DIR__ . "/../vendor/autoload.php";
   use App\model\Pessoa;


  $p = new Pessoa("Thiago");
  $p1 = new Pessoa("Hugo");
  echo $p->nome;
  echo $p1->nome;




?>

