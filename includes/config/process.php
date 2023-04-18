<?php
session_start();
include_once("connection.php");
include_once("url.php");



//EDITANDO, EXCUINDO OU ADICIONANDO DADOS NO SISTEMA
$data = $_POST;

if (!empty($data)) {
    //CRIANDO CONTA 
    if ($data["type"] === "create") {

        $loja_compra = $data["loja_compra"];
        $cartao = $data["cartao"];	
        $valor_parcela = $data["valor_parcela"];
        $parcelas_pagas = $data["parcelas_pagas"];
        $total_a_pagar = $data["total_a_pagar"];

        $query = "INSERT INTO bills 
        (loja_compra, 
        cartao, 
        valor_parcela, 
        parcelas_pagas, 
        total_a_pagar) 
        VALUES 
        (:loja_compra, 
        :cartao,	
        :valor_parcela,	
        :parcelas_pagas, 
        :total_a_pagar)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":loja_compra", $loja_compra);
        $stmt->bindParam(":cartao", $cartao);
        $stmt->bindParam(":valor_parcela", $valor_parcela);
        $stmt->bindParam(":parcelas_pagas", $parcelas_pagas);
        $stmt->bindParam(":total_a_pagar", $total_a_pagar);

        //executando query
        try {

            $stmt->execute();
            $_SESSION["msg"] = "conta criado com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }elseif ($data["type"] === "edit") {
        
        $loja_compra = $data["loja_compra"];
        $cartao = $data["cartao"];	
        $valor_parcela = $data["valor_parcela"];
        $parcelas_pagas = $data["parcelas_pagas"];
        $total_a_pagar = $data["total_a_pagar"];
        $id = $data['id'];

        $query = "UPDATE bills SET 
        loja_compra = :loja_compra, 
        cartao = :cartao, 
        valor_parcela = :valor_parcela, 
        parcelas_pagas = :parcelas_pagas,         
        total_a_pagar = :total_a_pagar 
        WHERE id = :id";

        $stmt = $conn->prepare($query);        
        $stmt->bindParam(":loja_compra", $loja_compra);
        $stmt->bindParam(":cartao", $cartao);
        $stmt->bindParam(":valor_parcela", $valor_parcela);
        $stmt->bindParam(":parcelas_pagas", $parcelas_pagas);        
        $stmt->bindParam(":total_a_pagar", $total_a_pagar);
        $stmt->bindParam(":id",$id);

        //executando query
        try {

            $stmt->execute();
            $_SESSION["msg"] = "conta atualizada com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }elseif ($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM bills WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        
        //executando query
        try {

            $stmt->execute();
            $_SESSION["msg"] = "conta criado com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }
    
    // Redirect HOME
    header("Location:" . $BASE_URL . "../../index.php");

} else {
    
    //LENDO DADOS DO SISTEMA

    //RETORNANDO UMA CONTA ESPECIFICA
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    if (!empty($id)) {
        $query = "SELECT * FROM bills WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $bill = $stmt->fetch(); 
    } else {
    // RETORNANDO TODAS AS CONTAS
    $bills = [];
    $query = "SELECT * FROM bills";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $bills = $stmt->fetchAll();
    }
}




?>