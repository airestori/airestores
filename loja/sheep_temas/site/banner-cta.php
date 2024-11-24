<div class="ofertas">

            <div class="corpo-categorias">

                <?php
                $sheep->Leitura('banners', "WHERE local = 'BannersCTA550x604' LIMIT 1");
                $bannersDestaques = Formata::Resultado($sheep);
                if($bannersDestaques):
                    foreach($sheep->getResultado() as $banner):
                    $banner = (object) $banner;
                ?>

                <div class="linha">

                    <div class="col-2">
                        <a href="<?= $banner->link ?>" title="<?= $banner->titulo_um ?>">
                        <img src="<?=HOME?>/img-banners/<?= $banner->capa ?>" alt="<?= $banner->titulo_um ?>" class="oferta-img">
                        </a>
                    </div>
                    
                    <div class="col-2">
                        <p><?= $banner->titulo_um ?></p>
                        <h1> <?= $banner->titulo_dois ?> </h1>
                        <small> <?= $banner->titulo_tres ?></small>
                        <br> <br>
                        <a href="<?= $banner->link ?>" class="btn" title="<?= $banner->titulo_um ?>"> <?= $banner->titulo_quatro ?> &#8594;</a>

                       
                    </div>
                </div>
                <?php
                    endforeach;
                    endif;
                ?>
            </div>
        </div>