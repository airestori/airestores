<?php
              $sheep->Leitura('banners', "WHERE local = 'BannersDestaques550x604' LIMIT 1");
              $bannersDestaques = Formata::Resultado($sheep);
              if($bannersDestaques):
               foreach($sheep->getResultado() as $banner):
                 $banner = (object) $banner;
            ?>
            <div class="linha">
                <div class="col-2">
                    <h1><?= $banner->titulo_um ?> <br><?= $banner->titulo_dois ?></h1>
                    <p><?= $banner->titulo_tres ?></p>
                    <br> <a href="<?= $banner->link ?>" class="btn"><?= $banner->titulo_quatro ?> &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="<?=HOME?>/img-banners/<?= $banner->capa ?>" alt="<?= $banner->titulo_um ?>">
                </div>
            </div>
            <?php
                endforeach;
                endif;
            ?>
</div>
<!-- fim container-->
</div>
 <!--fim banner-->