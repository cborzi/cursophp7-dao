<?php 

require_once("config.php");

//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// unico usuario
//$root = new usuario();
//$root->loadbyId(3);
//echo $root;

// lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

// retorna uma lista de usuarios buscados pelo login
//$search = Usuario::search("ca");
//echo json_encode($search);

// carrega usuario usando o ligin e senha
$usuario = new Usuario();
$usuario->login("carlos","!@#$");
echo $usuario;

?>