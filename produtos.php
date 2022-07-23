
<?php

include_once './includes/head.php';
include_once './includes/header.php';
include_once './includes/dados.php';

?>

<link rel="stylesheet" href="./css./produtos.css">


<div class='banner-products'>
    <div>
        <h5>Homem</h5>
        <h1>Todos os Produtos</h1>
    </div>
</div>
<section class='catalog' id='catalog'>
    <div class="content">
        <div class="filter-card">
            <input type="text" class="search-input" placeholder='Busque seu produto aqui'/>
            <button class="search-button">Procurar</button>
        </div>
            <div class="categorias">
                <h2>Filtro:</h2>
                <div class="dropdown">
                    <button class="dropbtn">Tipo de Produto</button>
                    <div class="dropdown-content">
                        <a href="#">camisa</a>
                        <a href="#">bermuda</a>
                        <a href="#">calca</a>
                        <a href="#">regata</a>
                    </div>
                </div>
            </div>



                <div class="container">
                    <div class="row mt-5"> 
                    <?php
                        foreach ($produtos as $key => $value) {
                        ?>
                        <div class="card m-3" style="width: 21rem;">
                            <img class="card-img-top" src="./content/<?php echo $produtos[$key]['imagem']; ?>" alt="Card image cap" height=250>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $produtos[$key]['nome']; ?></h5>
                                <p class="card-text"><?php echo $produtos[$key]['descricao'];?> </p>
                                <p class="card-text">R$<?php echo $produtos[$key]['preco'];?> </p>
                                <a href="produto-detalhe.php?keyd=<?php echo $keyh; ?>" class="btn btn-primary">Ver Produto</a>
                            </div>
                    </div>
                    <?php } ?>
                </div>
        </div>

<?php

include_once './includes/footer.php';

?>