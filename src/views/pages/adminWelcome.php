<?php ob_start(); ?>
<div class="container mt-5">
    <h1 class="text-center mb-5" >Bienvenue à la COGIP</h1>
    <p>Bonjour Jean Christian !</p>
    <p>Que souhaitez-vous faire aujourd'hui ?</p>

    <a href="/nouvelle-facture" class="admin_btn_link">
        <button class="admin_add_btn"><img src="./assets/img/plus.png" alt="plus" width="25" height="25"> Nouvelle facture  </button>
    </a>
    <a href="/nouveau-contact" class="admin_btn_link">
        <button class="admin_add_btn mx-3" ><img src="./assets/img/plus.png" alt="plus" width="25" height="25"> Nouveau contact </button>
    </a>
    <a href="/nouvelle-entreprise" class="admin_btn_link">
        <button class="admin_add_btn"><img src="./assets/img/plus.png" alt="plus" width="25" height="25"> Nouvelle société</button>
    </a>
    

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 " >Dernières factures :</caption>
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
                <td class="text-center">
                    <form action="" method="post">
                        <input type="submit" class="btn_poubelle" name="" value="">
                    </form>
                </td>
            </tr>

        </tbody>
    </table>


    <table class= "table table-bordered caption-top mt-5" >
        <caption class= "mb-3" >Dernières contact :</caption>
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
                <td class="text-center ">
                    <form action="" method="post">
                        <input type="submit" class="btn_poubelle" name="" value="">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 " >Dèrnieres société :</caption>
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
                <td class="text-center">
                   <form action="" method="post">
                        <input type="submit" class="btn_poubelle" name="" value="">
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';