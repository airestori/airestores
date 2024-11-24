<?php 

require_once("header.php");

if($Link->getData()):
    extract($Link->getData());
else:
    header("Location: " . HOME . "/404");
endif;
 
 ?>

<div class="corpo-categorias">
        <div class="linha linha2">
            <h2><?= $nome?></h2>
            <form action="" method="post">
            <select name="valorSelecionado" onchange="window.location.href = this.value;">
            <?php
                $LerProdutosPagina = new Ler();
                $LerProdutosPagina->Leitura('categorias', "WHERE tipo = 'categoria' ORDER BY nome ASC");
                $CategoriasPaginaProduto = Formata::Resultado($LerProdutosPagina);
                if($CategoriasPaginaProduto):
                    foreach($LerProdutosPagina->getResultado() as $categoria):
                    $categoria = (object) $categoria;
                ?>
                <option value="<?=  HOME .'/categorias/'. $categoria->id . '/' . $categoria->url?>"<?= $categoria->id == $id ? 'selected' : null; ?>><?= $categoria->nome?></option>

                <?php
                    endforeach;
                    endif;
                ?>

            </select>
            </form>
        </div>

        <div class="linha">

            <?php
            $urlPagina = filter_input(INPUT_GET, 'P', FILTER_VALIDATE_INT);
            $pagina = new Paginacao(HOME . '/categorias/' . $id . '&p=');
            $pagina->LerPaginas($urlPagina, 8);

            $LerProdutosPagina->Leitura('produto', "WHERE id_categoria = :id ORDER BY data DESC LIMIT : limite OFFSET :offset", "id={$id}&limit={$pagina->getLimit()}&offset={$pagina->getOffset()}");
            $produtosHome = Formata::Resultado($LerProdutosPagina);
            if($bannersDestaques):
                foreach($LerProdutosPagina->getResultado() as $produto):
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
                $pagina->ListarPaginas('produto', "WHERW id_categoria = :id ORDER BY data DESC", "id={$id}");
                endif;
            ?>


            <?= $pagina->getPaginacao()?>

        </div>



<?php require_once("footer.php")?>