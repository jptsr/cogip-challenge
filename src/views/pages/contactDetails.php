<?php ob_start(); ?>
<div class="container">
    <h1 class="text-center mb-5 mt-5"  >Contact : <span></span> </h1>
        <p class="fw-bold">Contact : <span></span> </p>
        <p class="fw-bold">Société : <span></span> </p>
        <p class="fw-bold">Email : <span></span> </p>
        <p class="fw-bold">Phone : <span></span> </p>
        
    <table class= "table table-bordered caption-top">

        <caption class= "mb-3 "> Contact pour les factures :</caption>
        <thead>
            <tr>
                <th class=" fw-bold" >N°facture</th>
                <th class=" fw-bold" >Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>    
</div>    



<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';