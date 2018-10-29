
<?php 
	require "./servicos/carrinhoServico.php";
	require "./modelo/produtoModelo.php";

	/** anon */

	// function index(){
	// 	$carrinhoProdutos = $_SESSION["carrinho"];
	// 	$dados["produtos"] = pegarProdutosPorId($carrinhoProdutos);
	// 	exibir("produto/carrinho",$dados);
	// }

	function index(){
		if (!empty($_SESSION["carrinho"])) {
		$carrinho = $_SESSION["carrinho"];

		for ($i=0; $i < count($carrinho); $i++) { 
			$dados["carrinho"] = pegarProdutoPorId($carrinho[$i]);	
		}

		exibir("produto/carrinho",$dados);
		}else{
			exibir("produto/carrinho");
		}
	}

	/** anon */
	function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;

        $produto["quantidade"]=1;

        $_SESSION["carrinho"][] = $produto;
    }

 
   
    redirecionar("carrinho");
}	

	/** anon */
	function deletar($id){
		unset($_SESSION["carrinho"][$id]);
		redirecionar("carrinho/index");
	}

?>