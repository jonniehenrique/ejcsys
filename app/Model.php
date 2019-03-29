<?php

function conectar() {
	try {
		$conexao = new PDO('mysql:host=localhost;dbname=lojaselfie', 'root', '');
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $E) {
		echo 'ERROR! ' . $E->getMessage();
	}

	return $conexao;
}

function getAll($table) {
	$conexao = conectar();

	$table = filter_var($table, FILTER_SANITIZE_STRING);

	$sql = "SELECT * FROM $table";

	$res = $conexao->prepare($sql);
	$res->execute();

	if ($res->rowCount() > 0):
		$result = $res->fetchAll(PDO::FETCH_OBJ);
	else:
		$result = '';
	endif;

	return $result;
}

function countAll($table) {
	$conexao = conectar();

	$table = filter_var($table, FILTER_SANITIZE_STRING);

	$sql = "SELECT * FROM $table";

	$res = $conexao->prepare($sql);
	$res->execute();

	if ($res->rowCount() > 0):
		$result = $res->fetchAll();
	else:
		$result = '';
	endif;

	return count($result);
}

function getByID($table, $id) {
	$conexao = conectar();

	$table = filter_var($table, FILTER_SANITIZE_STRING);
	$id    = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

	$sql = "SELECT * FROM $table WHERE id = '$id' LIMIT 1";

	$res = $conexao->prepare($sql);
	$res->execute();

	if ($res->rowCount() > 0):
		$result = $res->fetch(PDO::FETCH_OBJ);
	else:
		header('Location: ' . urlBase() . 'admin/painel?view=404');
	endif;

	return $result;
}

function getUserByLogin($login) {
	$conexao = conectar();

	$login = filter_var($login, FILTER_SANITIZE_STRING);

	$sql = "SELECT * FROM login WHERE usuario = '$login' LIMIT 1";

	$res = $conexao->prepare($sql);
	$res->execute();

	if ($res->rowCount() > 0):
		$result = $res->fetch(PDO::FETCH_OBJ);
	endif;

	return ucfirst($result->nome);
}