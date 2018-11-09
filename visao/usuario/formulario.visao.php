<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
     senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
      telefone: <input type="text" name="telefone" value="<?=@$usuario['telefone']?>">
       cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>">
    <?php if (authGetUserRole() == 'admin'){ ?>
       <select name="tipouser">
         <option value="1" <?=@assinalarCampo($usuario['tipouser'], '1')?>>admin</option>
         <option value="0" <?=@assinalarCampo($usuario['tipouser'], '0')?>>user</option>
        </select>
    <?php } else { ?>
       <input type="hidden" name="tipouser" value="0">
       <?php } ?>
    <select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select>
    <button type="submit">Enviar</button>
</form>