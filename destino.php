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
            <img src=<?= $destino["imagem"] ?> alt="">
        </div>

        <?php } ?>
    </div>
</main>

<?php
include "footer.php";
?>