<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM tblusuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM tblusuario WHERE idUsuario= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $cpf, $email, $telefone, $sexo, $senha, $tipouser) {
    $sql = "INSERT INTO tblusuario (nomeusuario, cpf, email, telefone, sexo, senha, tipouser) 
			VALUES ('$nome', '$cpf', '$email', '$telefone', '$sexo', '$senha', '$tipouser')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $cpf, $email, $telefone, $sexo, $senha) {
    $sql = "UPDATE tblusuario SET nomeusuario = '$nome', cpf= '$cpf', email = '$email', telefone = '$telefone', sexo = '$sexo', senha = '$senha' WHERE idUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM tblusuario WHERE idUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
function pegardoBanco($login){
    $sql = "SELECT * FROM tblusuario WHERE email= '$login'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}
