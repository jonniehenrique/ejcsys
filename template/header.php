<?php require_once 'app/App.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1">
    <meta name="theme-color" content="#3e8fea">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3e8fea">
    
    <meta name="author" content="Jonnie Henrique | https://jonniehenrique.com.br">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <title>SysEJC | Sistema de Gerenciamento de Encontro de Jovens</title>
    
    <meta property="og:url" content="www.sysejc.com.br">
    <meta property="og:title" content="SysEJC - Sistema de Gerenciamento de Encontro de Jovens">
    <meta property="og:site_name" content="SysEJC">
    <meta property="og:type" content="website">
    <meta property="og:description" content="SysEJC - Sistema de Gerenciamento de Encontro de Jovens">
    <meta property="og:image" content="">

    <link rel="icon" type="image/png" href="/favicon.png">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/css/bulma.css' ?>">
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/css/style.css' ?>">
</head>
<body>

    <header id="header">
        <div class="container">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        EJCSys
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                  </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="<?php echo APP_URL . 'login'; ?>" class="button is-primary">
                                    Log in
                                </a>
                                <a href="<?php echo APP_URL . 'cadastro'; ?> "class="button is-light">
                                    <strong>Cadastro</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
</header>

<main id="main">


