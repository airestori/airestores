<div class="corpo-categorias">
        <h2 class="titulo"> Produtos em destaque: </h2>
        <div class="linha">
            <div class="col-4">
                <a href="ver-produto.php">
                <img src="<?=CAMINHO_TEMAS?>/assets/img/b1.jpeg" alt="">
                </a>
                <h4>Bota preta</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$150</p>
            </div>

            <div class="col-4">
                <a href="ver-produto.php">
                <img src="<?=CAMINHO_TEMAS?>/assets/img/p1.jpeg" alt="">
                </a>
                <h4>Papete Off-White</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$100</p>
            </div>
            <div class="col-4">
                <a href="ver-produto.php">
                <img src="<?=CAMINHO_TEMAS?>/assets/img/s1.jpeg" alt="">
                </a>
                <h4>Tamanco Preto</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$120</p>
            </div>
            <div class="col-4">
                <a href="ver-produto.php">
                <img src="<?=CAMINHO_TEMAS?>/assets/img/t1.jpeg" alt="">
                </a>
                <h4>Tênis Preto</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$130</p>
            </div>
        </div>
        <h2 class="titulo"> Novos Produtos: </h2>
        <div class="linha">

            <?php
            $sheep->Leitura('produto', "WHERE tipo = 'produto' ORDER BY data DESC LIMIT 8");
            $produtosHome = Formata::Resultado($sheep);
            if($bannersDestaques):
                foreach($sheep->getResultado() as $produto):
                $produto = (object) $produto;
            ?>

            <div class="col-4">
                <a href="<?= HOME . '/ver-produto/' . $produto->id . '/' . $produto->url ?>" title="<?= $produto->capa?>">
                <img src="<?=HOME?>/img-produtos/ <?= $produto->capa?>" alt="<?= $produto->capa?>">
                </a>
                <h4><?= Formata::LimitaTextos($produto->titulo, 4)?></h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$<?= Formata::vr($produto->valor);?></p>
            </div>
            <?php
                endforeach;
                endif;
            ?>

        </div>
     </div>