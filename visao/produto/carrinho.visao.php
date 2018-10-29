
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
       
    <?php foreach ($carrinho as $produtos): ?>
    <tr>    
        <td><?=$produtos['idproduto']?></td>
        <td><?=$produtos['nomeproduto']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$produtos['quantidade']?></td>
    </tr>
      
    <?php endforeach; ?>   
</table>

