<?php
include "destinos_data.php";
include "header.php";
?>

<main>
    <div class="grid">
        <?php
        foreach ($destinos as $destino) {
        ?>

        <div class="coluna">
                <img src="imagens_viagem/<?= $destino["imagem"] ?>" alt="<?= $destino["nome"]?>">
                <br>
                <h3><?= $destino["nome"]?></h3>
                <h4>
                <?= $destino["descricao_curta"]?>
                </h4>
                <br>
                <p class= "regiao">
                <?= $destino["regiao"]?>
                </p>
            </div>

        <?php } ?>
    </div>
</main>

<?php
include "footer.php";
?>