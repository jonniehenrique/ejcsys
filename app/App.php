<?php

/* ALTERAR APP_URL A PARTIR DO AMBIENTE */

const APP_URL = 'http://localhost/selfiestorejp/selfie-site/';

require_once 'Model.php';

function limitarTexto($texto, $limite, $final) {
    $contador = strlen($texto);

    if ($contador >= $limite):
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . $final;
        return $texto;
    else:
        return $texto;
    endif;
}

function urlBase() {
    return APP_URL;
}

function urlPagina($viewName) {
    return APP_URL . 'admin/painel?view=' . $viewName;
}

function mostrarMensagem($tipo, $mensagem) {
    echo '<div class="alert alert-' . $tipo . '">' . $mensagem . '</div>';
}

function mascarar($string, $format) {
    $key = 0;
    $mask = '';

    for ($i = 0; $i <= strlen($format) - 1; $i++) {
        if ($format[$i] == '#'):
            if (isset($string[$key])):
                $mask .= $string[$key++];
            endif;
        else:
            if (isset($format[$i])):
                $mask .= $format[$i];
            endif;
        endif;
    }

    return $mask;
}

function apenasNumero($string) {
    return preg_replace('/[^0-9]/', '', $string);
}

function valorNumerico($string) {
    return number_format($string, 2, ',', '.');
}

function dataFormatoBr($data) {
    return date('d/m/Y', strtotime($data));
}

function validate(array $fields) {
    $request = request();

    $validate = [];

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 'str':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;

            case 'int':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'ema':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}

function request()
{
    $request = $_SERVER['REQUEST_METHOD'];

    if ($request == 'POST') {
        return $_POST;
    }

    return $_GET;
}

function isEmpty()
{
    $request = request();

    $empty = false;

    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            $empty = true;
        }
    }

    return $empty;
}

function redirect($view) {
    header('Location: ' . APP_URL . $view);
}