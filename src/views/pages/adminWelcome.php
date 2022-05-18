<?php ob_start(); ?>

<h1>Bienvenue à la COGIP</h1>
<p>Bonjour Jean Christian !</p>
<p>Que souhaitez-vous faire aujourd'hui ?</p>

<button>Nouvelle facture</button>
<button>Nouveau contact</button>
<button>Nouvelle société</button>

<table>
    <caption>Dérnieres factures :</caption>
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
    <caption>Dérnieres contact :</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>e-mail</th>
            <th>Société</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';