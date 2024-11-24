

    <!--INICIO BANNER  -->
    <div class="banner">

    <!--INICIO CORPO  -->
    <div class="container">

        <!--INICIO NAVEGAÇÃO TOPO  -->
        <div class="navbar">

            <!--INICIO LOGO NAVEGAÇÃO TOPO  -->
            <div class="logo">
                <a href="<?= HOME ?>" title="<?= SITENAME ?>">
                <img src="<?=HOME?>/img-logo/<?= LOGO_HOME ?>" alt="<?= SITENAME ?>" width="125px">
                </a>
            </div>
            <!--FIM LOGO NAVEGAÇÃO TOPO  -->
       
            <!--INICIO MENU NAVEGAÇÃO TOPO  -->
            <nav>
               <ul id="MenuItens">
                <li><a href="<?= HOME ?>">Inicio</a></li>
                <li><a href="<?= HOME ?>/produtos">Produtos</a></li>
                <li><a href="<?= HOME ?>/contato">Contatos</a></li>
                <li><a href="<?= HOME ?>/minha-conta">Minha Conta</a></li>
               </ul>
            </nav>
            <!--FIM MENU NAVEGAÇÃO TOPO  -->
            <a href="<?= HOME ?>/carrinho" title="">
            <img src="<?=CAMINHO_TEMAS?>/assets/img/carrinho.png" width="30px" height="30px">
            </a>
            <!--INICIO MENU CELULAR TOPO  -->
            <img src="<?=CAMINHO_TEMAS?>/assets/img/menu.png" class="menu-celular" onclick="menucelular()">
            <!--FIM MENU CELULAR TOPO  -->

           </div>
         <!--FIM NAVEGAÇÃO TOPO  -->
