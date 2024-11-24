<?php require_once('header.php')?>

<div class="corpo-categorias carrinho-compras">

            <table>
                <tr>
                    <th> Produto </th>
                    <th> Valor </th>
                </tr>


                <!--inico item carrinho -->
                
                <tr>
                <?php
                $carrinhoDeCompras = new Ler();
                $carrinhoDeCompras->Leitura('carrinho', "WHERE id_sessao = :id", "id={$idSessao}");
                if($carrinhoDeCompras->getResultado()):
                    foreach($carrinhoDeCompras->getResultado() as $produto):
                        $produto = (object) $produto 

                ?>
                    <td>
                        <div class="info-carrinho">
                            <img src="<?=HOME?>/img-produto/<?= $produto->capa ?>" alt="<?= $produto->titulo ?>" style="width: 70px; heigth:auto;" > 

                            <div>
                                <p> <?= Formata::LimitaTextos($produto->titulo, 7)?>"> </p>
                                <br>
                                <form action="<?=HOME?>/ms/removerCarrinho" method="post">
                                <input type="hidden" name="id" value="<?= $produto->id ?>">
                                <button type="submit" name="removerCarrinho" class="btn-carrinho"> Remover </button>
                                </form>
                            </div>
                        </div>
                    </td>
                    
                    <td> R$ <?= Formata::vr($produto->valor)?> </td>
                </tr>
                <?php
                endforeach;
                else:
                    header("Location: " . HOME);
                    
                endif;

                ?>

            </table>
            <!--fim da tabela -->

            <!-- comeco valor total -->
            <div class="valor-total">
                <table>
                    <?php
                    $lerCarrinhoTotal = new Ler();
                    $lerCarrinhoTotal->LeituraCompleta("SELECT SUM(valor) AS total FROM carrinho WHERE id_sessao = :id", "id={$idSessao}");
                    $total = $lerCarrinhoTotal->getResultado()[0]['total'] ? Formata::vr($lerCarrinhoTotal->getResultado()[0]['total']) : 0;
                    ?>

                    <tr>
                        <td> Sub-Total </td>
                        <td> R$ <?= $total ?> </td>
                    </tr>

                    <tr></tr>
                        <td> Calcula Frete </td>
                        <td> 
                            <form action="" method="post">
                                <input type="radio" name="frete_selecionado" id="frete" value="" class="carrinhoFormRadio"> 
                                <label for="">Correios 3 dias R$ 30</label><br>
                                <small>Total c/ Frete 87,27</small><br>
                                <input type="text" name="cep" placeholder="Digite o CEP" style="width: 100%;">
                                
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <button type="submit" class="btn-carrinho" style="width: 260%; padding:7px;">
                            Finalizar Compra

                        </button>

                        </td>
                    </tr>

                </table>
            </div>
            <!-- fim valor total -->


        </div>

<?php require_once('footer.php')?>