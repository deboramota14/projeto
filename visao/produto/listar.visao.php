<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>COMPRAR</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idProduto']?></td>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./produto/visualizar/<?=$produto['idProduto']?>" class="btn btn-secondary">View</a></td>
        <td><a href="./produto/editar/<?=$produto['idProduto']?>" class="btn btn-info">Editar</a></td>
        <td><a href="./produto/deletar/<?=$produto['idProduto']?>" class="btn btn-danger">Deletar</a></td>
         <td><a href="./carrinho/adicionar/<?=$produto['idProduto']?>" class="btn btn-danger">Carrinho</a></td>
       
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

