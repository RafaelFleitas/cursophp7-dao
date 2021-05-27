<?php 

require_once("config.php");

//Carrega apenas um usuário 
//root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search=Usuario::search("ca");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Caio","1234567890");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor", "!@#$%¨&*");



 ?>