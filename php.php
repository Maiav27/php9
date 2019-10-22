<?php
 $nome = $_GET["n"];
 $idade = $_GET["v"];
 if( $idade >= 18 ){
     echo "$nome é maior de 18, tem $idade anos";
 }else {
     echo"$nome não é maior de 18, tem $idade anos ";
 }
?>