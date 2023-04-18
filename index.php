<?php
include_once("includes/templates/header.php")
?><div class="container">
<?php if(isset($printMsg) && $printMsg != ''): ?>
  <p id="msg"><?= $printMsg ?></p>
<?php endif; ?>
<h1 id="main-title">Minhas contas</h1>
<?php if(count($bills) > 0): ?>
  <table class="table" id="bills-table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Loja de Compra</th>
        <th scope="col">Cartão</th>
        <th scope="col">Valor da Parcela</th>
        <th scope="col">Parcelas Pagas</th>
        <th scope="col">Total a Pagar</th>        
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($bills as $bill): ?>
        <tr>
          <td scope="row" class="col-id"><?= $bill["id"] ?></td>
          <td scope="row"><?= $bill["loja_compra"] ?></td>
          <td scope="row"><?= $bill["cartao"] ?></td>
          <td scope="row"><?= $bill["valor_parcela"] ?></td>
          <td scope="row"><?= $bill["parcelas_pagas"] ?></td>
          <td scope="row"><?= $bill["total_a_pagar"] ?></td>          
          <td class="actions">
            <a href="<?= $BASE_URL ?>show.php?id=<?= $bill["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
            <a href="<?= $BASE_URL ?>edit.php?id=<?= $bill["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
            <form class="delete-form" action="<?= $BASE_URL ?>includes/config/process.php" method="POST">
              <input type="hidden" name="type" value="delete">
              <input type="hidden" name="id" value="<?= $bill["id"] ?>">
              <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>  
  <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
<?php endif; ?>
</div>


<?php
include_once("includes/templates/footer.php")
?>