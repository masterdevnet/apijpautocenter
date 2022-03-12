<?php 

// Include
include_once 'conexao.php';

$query_produtos = "SELECT id, nomeProd, descricaoProd, precoProd, dataCompraProd, estoqueProd FROM produtos ORDER BY id DESC";
$result_produtos = $conn->prepare($query_produtos);
$result_produtos->execute();

if (($result_produtos) AND ($result_produtos->rowCount() != 0)) {
	while ($result_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
		extract($result_produto);

		$lista_produtos["records"][$id] = [
			'id' => $id,
			'nomeProd' => $nomeProd,
			'descricaoProd' => $descricaoProd,
			'precoProd' => $precoProd,
			'dataCompraProd' => $dataCompraProd,
			'estoqueProd' => $estoqueProd
		];
	}

	// Resposta com status 200
	http_response_code(200);

	// Retornar os produtos em formato Json
	echo json_encode($lista_produtos);
}