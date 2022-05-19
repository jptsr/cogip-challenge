<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="./assets/style/style.css">
    </head>
    <body>
        <header>
            <nav class="mon_header navbar  navbar-expand-lg navbar-light  ">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/logo.svg" alt="Logo" width="30" height="24">
                        <span >COGIP</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav mb-2 gap-3 ">
                        <li class="nav-item  " >
                            <a class="nav-link active"  aria-current="page" href="/menu">Accueil</a>
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
                        <li class="nav-item" >
                            <a class="nav-link"  href="/connexion">Connexion</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/menu-admin" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
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


       
        <p>Je suis le header</p>