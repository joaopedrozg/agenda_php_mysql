
<?php
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criando contato</h1>

    <form id="create-form" action="<?=$BASE_URL ?>config/process.php" method="post">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o Telefone" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações</label>
            <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Insira as observações" rows="3" >  </textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</div>

<?php
    include_once("templates/footer.php");
?>