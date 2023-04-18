<?php
include_once("includes/templates/header.php")
?>
<div class="container" id="view-bills-container">
    <?php include_once("includes/templates/backBtn.html"); ?>
    <h1 id="main-title"><?= $bill["loja_compra"] ?></h1>
    
    <p class="bold">Loja de Compra</p>
    <p><?= $bill["loja_compra"] ?></p>

    <p class="bold">Cartão</p>
    <p><?= $bill["cartao"] ?></p>
    
    <p class="bold">Valor da Parcela</p>
    <p><?= $bill["valor_parcela"] ?></p>

    <p class="bold">Parcelas  Pagas</p>
    <p><?= $bill["parcelas_pagas"] ?></p>

    <p class="bold">Total a Pagar</p>
    <p><?= $bill["total_a_pagar"] ?></p>
    
</div>
<?php
include_once("includes/templates/footer.php")
?>