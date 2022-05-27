<?php ob_start(); ?>
    <div class="container">

    <h1 class="my-5 text-center" >Facture : <span></span> </h1>

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 " >Société liée à la facture</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom</th>
                <th class="text-center fw-bold" >TVA</th>
                <th class="text-center fw-bold" >Type société</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                   <form action="" method="post">
                        <input type="submit" class="btn_modifier" name="" value="">
                    </form>
                </td>
            </tr>

        </tbody>
    </table>


    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3" >Personne de contact</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom</th>
                <th class="text-center fw-bold" >Email</th>
                <th class="text-center fw-bold" >Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                   <form action="" method="post">
                        <input type="submit" class="btn_modifier" name="" value="">
                    </form>
                </td>
            </tr>
            
        </tbody>
    </table>

    <!-- modifier société -->
    <a href="/modification-facture">Modifier facture</a>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';