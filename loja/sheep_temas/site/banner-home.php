<div class="categorias">

        <div class="corpo-categorias">

            <div class="linha">

        <?php
        $sheep->Leitura('banners', "WHERE local = 'BannersHome' LIMIT 3");
        $bannersDestaques = Formata::Resultado($sheep);
        if($bannersDestaques):
            foreach($sheep->getResultado() as $banner):
            $banner = (object) $banner;
        ?>

                <div class="col-3">
                <a href="<?= $banner->link ?>" title="<?= $banner->link ?>">
                    <img src="<?=HOME?>/img-banners/<?= $banner->capa ?>" alt="<?= $banner->titulo_um ?>">
                </a>
                </div>
        
        <?php
                endforeach;
                endif;
        ?>

            </div>
        </div>
     </div>