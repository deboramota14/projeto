<nav>
  <ul>
    <?php if (!authIsLoggedIn()) {?>
    <li><a href="./login">Login</a></li>
    <?php }else{ ?>
    <li><a href="./login/logout">Sair da conta</a></li>
    <?php } ?>
    <?php if (authGetUserRole() == 'admin'){?>
    <li><a href="./usuario">Usuario</a></li>
    <li><a href="./">Produto</a></li>
    <?php }else{ ?>
    <li><a href="./">Produto</a></li>
    <?php } ?>
    
    <li><a href="./carrinho">Carrinho</a></li>
    
  </ul>
</nav>