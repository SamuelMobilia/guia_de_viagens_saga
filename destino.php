<?php
    include "destinos_data.php";
    include "header.php";

    $id = $_GET["id"];
?>

<main>
    <div class="grid-2">
        <img src="imagens_viagem/<?=$destinos[$id]["imagem"]?>" alt="">
        <div class="descricao">
            <h1><?=$destinos[$id]["nome"]?></h1>
            <h4><?=$destinos[$id]["descricao_curta"]?></h4>
            <p class="regiao"><?=$destinos[$id]["regiao"]?></p>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>