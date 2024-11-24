<?php require_once('header.php');

if($Link->getData()):
    extract($Link->getData());
else:
    header("Location: " . HOME . "/404");
endif;

?>

<div class="corpocategoria">
                <div class="linha">
                    
                    <div class="col-2">
                        <img src="<?=HOME?>/img-produtos/<?= $capa ?>" id="produtoImg">

                        <div class="img-linha">

                            <div class="img-col">
                                <img src="<?=CAMINHO_TEMAS?>/assets/img/galeria/b2.jpeg" alt="" width="100%" class="produtominiatura">
                            </div>

                            <div class="img-col">
                                <img src="<?=CAMINHO_TEMAS?>/assets/img/galeria/b3.jpeg" alt="" width="100%" class="produtominiatura">
                            </div>

                            <div class="img-col">
                                <img src="<?=CAMINHO_TEMAS?>/assets/img/galeria/b4.jpeg" alt="" width="100%" class="produtominiatura">
                            </div>

                        </div>
                    </div>

                    <div class="col-2">
                        <p>Bota Texana (Western)</p>
                        <h1>Compre com desconto</h1>
                        <h4>R$150</h4>
                        <form action="" method="post">

                            <select name="" id="">
                                <option value="">Selecione o Tamanho</option>
                                <option value="">34</option>
                                <option value="">35</option>
                                <option value="">36</option>
                                <option value="">37</option>
                                <option value="">38</option>
                                <option value="">39</option>
                            </select>

                            <input type="number" name="" id="" value="1">

                            <button type="submit" class="btn">Adicionar ao Carrinho</button>

                        </form>

                        <h3>Descrição:</h3>
                        <p>Bota feminina confeccionada em couro falso, com bico arredondado, cano baixo, salto baixo, detalhes em relevos e fechamento lateral por zíper.</p>
                    </div>

                </div>
            </div>

     <div class="corpo-categorias ver-produto">

        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>
        </div>


        <div class="linha">
            <div class="col-4">
                <img src="<?=CAMINHO_TEMAS?>/assets/img/b1.jpeg" alt="">
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
                <img src="<?=CAMINHO_TEMAS?>/assets/img/p1.jpeg" alt="">
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
                <img src="<?=CAMINHO_TEMAS?>/assets/img/s1.jpeg" alt="">
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
                <img src="<?=CAMINHO_TEMAS?>/assets/img/t1.jpeg" alt="">
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
                <div class="linha">
                    <div class="col-4">
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/b11.jpeg" alt="">
                        <h4>Bota Bege</h4>
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
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/p3.jpeg" alt="">
                        <h4>Kit 3 Papete </h4>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <p>R$300</p>
                    </div>
                    <div class="col-4">
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/s4.jpeg" alt="">
                        <h4>Tamanco Marrom</h4>
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
                        <img src="<?=CAMINHO_TEMAS?>/assets/img/t6.jpeg" alt="">
                        <h4>Tênis Branco</h4>
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
        </div>

<?php require_once('footer.php')?>