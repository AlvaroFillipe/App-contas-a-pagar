<?php
include_once("includes/templates/header.php")
?>
<?php include_once("includes/templates/backBtn.html"); ?>
<h1 id="main-title">Editar Conta</h1>
    <form action="<?= $BASE_URL ?>includes/config/process.php" method="POST" id="create-form">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $bill['id']; ?>">
        <div class="form-group">
            <label for="loja_compra">Loja de Compra</label>
            <input type="text" class="form-control" name="loja_compra" id="loja_compra" placeholder="<?= $bill['loja_compra']; ?>" value="<?= $bill['loja_compra']; ?>">
        </div>

        <div class="form-group">
            <label for="cartao">Cartão</label>
            <input type="text" class="form-control" name="cartao" id="cartao" placeholder="<?= $bill['cartao']; ?>" value="<?= $bill['cartao']; ?>">
        </div>      

        <div class="form-group">
            <label for="valor_parcela">Valor da Parcela</label>
            <input type="text" class="form-control" name="valor_parcela" id="valor_parcela" placeholder="<?= $bill['valor_parcela']; ?>" value="<?= $bill['valor_parcela']; ?>">
        </div>

        <div class="form-group">
            <label for="parcelas_pagas">Parcelas Pagas</label>
            <input type="text" class="form-control" name="parcelas_pagas" id="parcelas_pagas" placeholder="<?= $bill['parcelas_pagas']; ?>" value="<?= $bill['parcelas_pagas']; ?>">
        </div>
        
        <div class="form-group">
            <label for="total_a_pagar">Total a Pagar</label>
            <input type="text" class="form-control" name="total_a_pagar" id="total_a_pagar" placeholder="<?= $bill['total_a_pagar']; ?>" value="<?= $bill['total_a_pagar']; ?>">
        </div>        

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
<?php
include_once("includes/templates/footer.php")
?>