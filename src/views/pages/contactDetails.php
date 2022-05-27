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
                <th class="text-center fw-bold" >N°facture</th>
                <th class="text-center fw-bold" >Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
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

    <!-- modifier contact -->
    <a href="/modification-contact">Modifier contact</a>
</div>    



<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';