<?php


$conexao = new mysqli("localhost:3306", "root", "",  "trabalho_01_02" );

if($conexao->connect_errno){
    echo "Tem algum erro de conexão";
} else {
    echo " CONEXÃO ATIVA ";
}



?>