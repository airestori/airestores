<!----INICIO RODAPE  ---->
<footer class="rodape">

<!----INICIO CONTAINER  ---->
  <div class="container">

    <!----INICIO LINHA  ---->
      <div class="linha">


        <!----INICIO COL-1  ---->
        <div class="rodape-col-1">
            <h3>Baixe nosso app</h3>
            <p>Baixe nosso aplicativo nas melhores plataformas.</p>

            <div class="app-logo">
                 <img src="<?=CAMINHO_TEMAS?>/assets/img/google.png" alt="">
                 <img src="<?=CAMINHO_TEMAS?>/assets/img/apple.png" alt="">
                 
            </div>
        </div>
        <!----FIM COL-1  ---->

        <!----INICIO COL-2  ---->
        <div class="rodape-col-2">
            <a href="<?=HOME?>" title="<?= SITENAME ?>">
            <img src="<?=HOME?>/img-logo/<?= LOGO_HOME ?>" alt="<?= SITENAME ?>">
            </a>
            <p> <?= SITENAME ?></p>
        </div>
        <!----FIM COL-2  ---->

        <!----INICIO COL-3  ---->
        <div class="rodape-col-3">
            <h3>Mais Informações</h3>
            <ul>
            <li><a href="<?= HOME ?>">Inicio</a></li>
                <li><a href="<?= HOME ?>/produtos">Produtos</a></li>
                <li><a href="<?= HOME ?>/empresa">Empresa</a></li>
                <li><a href="<?= HOME ?>/contato">Contatos</a></li>
                <li><a href="<?= HOME ?>/minha-conta">Minha Conta</a></li>
                <li><a href="">Política de Privacidade</a></li>
            </ul>
        </div>
        <!----FIM COL-3  ---->

        <!----INICIO COL-4  ---->
        <div class="rodape-col-4">
            <h3>Redes Socias</h3>
            <ul>
              <?php
               $sheep->Leitura('redes_sociais', "WHERE tipo = 'redesSociais' ORDER BY data DESC");
               $redesSociaisRodape = Formata::Resultado($sheep);
               if($redesSociaisRodape):
                foreach($sheep->getResultado() as $rede):
                  $rede = (object) $rede;
              ?>
                <li> <a href="<?=$rede->link?>" title="<?=$rede->nome?>"> <i class="<?=$rede->icone?>"></i> <?=$rede->nome?></a> </li>
              <?php
                endforeach;
                endif;
              ?>
            </ul>
        </div>
        <!----FIM COL-4  ---->

      </div>
      <!----FIM LINHA  ---->

    <!----INICIO DIREITOS  ---->
     <hr>
     <p class="direitos"> &#169; Todos os direitos reservados a  </p>
    <!----FIM DIREITOS  ---->

  </div>
   <!----FIM CONTAINER  ---->
 
  

</footer>
<!----FIM RODAPE  ---->

