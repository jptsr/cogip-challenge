<?php ob_start(); ?>
<div class="container">
    <h1 class="text-center" >Bienvenue à la COGIP</h1>
    <p>Bonjour Jean Christian !</p>
    <p>Que souhaitez-vous faire aujourd'hui ?</p>

    <button><img src="./assets/img/plus.png" alt="plus" width="25" height="25"> Nouvelle facture  </button>
    <button class=" mx-3" ><img src="./assets/img/plus.png" alt="plus" width="25" height="25">Nouveau contact </button>
    <button><img src="./assets/img/plus.png" alt="plus" width="25" height="25">Nouvelle société</button>

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 fs-2" >Dérnieres factures :</caption>
        <thead>
            <tr>
                <th class="text-center" >Numéro facture</th>
                <th class="text-center" >Dates</th>
                <th class="text-center" >Société</th>
                <th class="text-center" ></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"><button class="btn btn-light"><img src="./assets/img/poubelle.png" alt="poubell" width="20" height="20" ></button></td>
            </tr>

        </tbody>
    </table>


    <table class= "table table-bordered caption-top mt-5" >
        <caption class= "mb-3 fs-2" >Dérnieres contact :</caption>
        <thead>
            <tr>
                <th class="text-center">Nom</th>
                <th class="text-center">Téléphone</th>
                <th class="text-center">e-mail</th>
                <th class="text-center">Société</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"><button class="btn btn-light"><img src="./assets/img/poubelle.png" alt="poubell" width="20" height="20" ></button></td>
            </tr>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 fs-2" >Dérnieres société :</caption>
        <thead>
            <tr>
                <th class="text-center" >Nom</th>
                <th class="text-center" >TVA</th>
                <th class="text-center" >Pays</th>
                <th class="text-center" >Type</th>
                <th class="text-center" ></th>          
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"><button class="btn btn-light"><img src="./assets/img/poubelle.png" alt="poubell" width="20" height="20" ></button></td>
            </tr>

        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';