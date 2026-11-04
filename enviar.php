<?php
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$mensagem = trim($_POST["mensagem"]);
?>

<?php
include "header.php";
?>

<main>
    <div class="confirmacao">
        <h1>Mensagem Recebida!</h1>
        <p class="confirmacao-intro">Obrigado pelo contato! Recebemos a sua mensagem e responderemos em breve.</p>

        <div class="confirmacao-dados">
            <p><span>Nome</span><?= $nome ?></p>
            <p><span>E-mail</span><?= $email ?></p>
            <p><span>Mensagem</span><?= $mensagem?></p>
        </div>

        <a href="index.php" class="botao">Voltar para a Home</a>
    </div>
</main>

<?php
include "footer.php"
?>