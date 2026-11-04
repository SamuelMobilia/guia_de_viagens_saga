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
            <a href="destino.php?id=<?= $destino["id"] ?>"><div class="coluna">
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
            </div></a>
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