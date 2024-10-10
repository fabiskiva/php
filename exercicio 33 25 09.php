<?php
  // usuario insere sua idade
// se menor de idade -> imprima 3 programas infantis
 // se maior de idade -> imprima 3 carros com os seus preços

 function listacarros(){
 echo"opala, R$ 60.000\nvectra, r$ 15.000\ngol, R$ 75.000\n";
}
  
$idade = readline("digite sua idade");
 
 if($idade >=18){
    listacarros();