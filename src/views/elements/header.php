<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- font VT323 -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- font FiraMono -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&family=VT323&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- fontRoboto -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/style/style.css">

    </head>
    <body>
        <header>
            <nav class="mon_header navbar  navbar-expand-lg   ">
                <div class="container ">
                    <a class="navbar-brand " href="#">
                        <img src="./assets/img/logo.svg" alt="Logo" width="35" height="35">
                        <span class="header_logo_text mt-5 ">COGIP</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav  gap-3 align-items-center ">
                            <li class="nav-item  " >
                                <a class="nav-link"  aria-current="page" href="/menu">Accueil</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link" href="/liste-factures">Factures</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link"  href="/liste-entreprises">Sociétés</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link"  href="/liste-contacts">Contacts</a>
                            </li>
                        <!-- connexion -->
                            <li class="nav-item" >
                                <a class="nav-link"  href="/logout">Déconnexion</a>
                            </li>
                        <!-- admin -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/menu-admin" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/menu-admin">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="/nouveau-contact">Nouveau contact</a></li>
                                    <li><a class="dropdown-item" href="/nouvelle-facture">Nouvelle facture</a></li>
                                    <li><a class="dropdown-item" href="/nouvelle-entreprise">Nouvelle société</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </header>


       
        