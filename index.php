<?php 
include "header.php";
include "destinos_data.php"
?>

<main>
    <h1>Destinos em Destaque</h1>
    <p>Confira alguns dos lugares mais incríveis para sua próxima viagem.</p>
    <br>
    <div class="grid">
        <?php
            $contador = 1;
            shuffle($destinos);
            foreach ($destinos as $destino) {
        ?>
            <div class="coluna">
                <h2><?= $destino["nome"]?></h2>
                <br>
                <img src="imagens_viagem/<?= $destino["imagem"] ?>" alt="">
            </div>
        <?php 
        $contador++;
        if ($contador > 3) break;
        }
         ?>
        </div>
</main>
<?php 
include "footer.php";
?>