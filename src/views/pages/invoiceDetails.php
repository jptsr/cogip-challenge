<?php ob_start(); ?>
    <div class="container">

    <h1>Facture : <span></span> </h1>

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 fs-2" >Société liée à la facture</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom</th>
                <th class="text-center fw-bold" >TVA</th>
                <th class="text-center fw-bold" >Type société</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>


    <table class= "table table-bordered caption-top" >
        <caption>Personne de contact</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom</th>
                <th class="text-center fw-bold" >Email</th>
                <th class="text-center fw-bold" >Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';