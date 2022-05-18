<?php ob_start(); ?>

<h1>Bienvenue à la COGIP</h1>
<p>Bonjour !</p> 

<table>
    <caption>Dernières factures :</caption>
    <thead>
        <tr>
            <th>Numéro facture</th>
            <th>Dates</th>
            <th>Société</th>
        </tr>
    </thead>
    <tbody>
      
    </tbody>
</table>


<table>
    <caption>Dernières contact :</caption>
    <thead>
        <tr>
            <th>Nom </th>
            <th>Téléphone</th>
            <th>e-mail</th>
            <th>Société</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<table>
    <caption>Dernières sociétés :</caption>
    <thead>
        <tr>
            <th>Nom </th>
            <th>TVA</th>
            <th>Pays</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>




<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';