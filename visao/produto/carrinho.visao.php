
    <meta charset="utf-8">
<h2>Listar Produtos no Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <TH>IDPRODUTO</TH>
            <th>NOME</th> 
            <th>PREÇO</th>
            <th>DELETE</th>
        </tr>
    </thead>
       
    <?php for ($i = 0;$i < count($_SESSION["carrinho"]);$i++) {
    ?>
    <tr>
        <td><?=$_SESSION["carrinho"][$i]['idProduto']?></td>        
        <td><?=$_SESSION["carrinho"][$i]['nomeproduto']?></td>
        <td><?=$_SESSION["carrinho"][$i]['preco']?></td>
        <td><?=$_SESSION["carrinho"][$i]['quantidade']?></td>
        <td><a href="./carrinho/deletar/<?=$i?>">excluir</a></td>
    </tr>
      
    <?php } ?>   
</table>

