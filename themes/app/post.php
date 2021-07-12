<?php $v->layout("__theme"); ?>
<div class="content">
    <article class="library">
        <h1>Livro emprestado</h1>

        <p><span>Código: </span> <?= $user->type; ?></p>
        <p><span>Livro: </span> <?= $book->name; ?></p>

        <p class="trigger warning">
            <?php
            if($user->type == 1):
                echo "<p class='message warning'>Você tem 10 dias pra devolver o livro</p>";
            else:
                echo "<p class='message warning'>Você tem 3 dias pra devolver o livro</p>";
            endif;?>
        </p>
        <a href="<?= url("/"); ?>">voltar</a>
    </article>
</div>