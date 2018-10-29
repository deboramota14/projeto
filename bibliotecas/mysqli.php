<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "basaar");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}