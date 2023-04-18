<?php
include_once("includes/templates/header.php")
?>
<?php include_once("includes/templates/backBtn.html"); ?>
    <div class="container">
        <?php include_once("includes/templates/backBtn.html")?>
        <h1 id="main-title">Criar Conta</h1>
        <form action="<?= $BASE_URL ?>includes/config/process.php" method="POST" id="create-form">
        
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="loja_compra">Loja de Compra</label>
            <input type="text" class="form-control" name="loja_compra" id="loja_compra" placeholder="Digite um valor para loja de compra" required>
        </div>

        <div class="form-group">
            <label for="cartao">Cartão</label>
            <input type="text" class="form-control" name="cartao" id="cartao" placeholder="Digite um valor para cartão" required>
        </div>

        <div class="form-group">
            <label for="valor_parcela">Valor da Parcela</label>
            <input type="text" class="form-control" name="valor_parcela" id="valor_parcela" placeholder="Digite umcvalor para a parcela" required>
        </div>

        <div class="form-group">
            <label for="parcelas_pagas">Parcelas Pagas</label>
            <input type="text" class="form-control" name="parcelas_pagas" id="parcelas_pagas" placeholder="Digite um valor para parcelas pagas" required>
        </div>

        <div class="form-group">
            <label for="total_a_pagar">Total a se Pagar</label>
            <input type="text" class="form-control" name="total_a_pagar" id="total_a_pagar" placeholder="Digite um valor para o total de parcelas" required>
        </div>

        
        

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
<?php
include_once("includes/templates/footer.php")
?>