
<?php
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editando contato</h1>

    <form id="edit-form" action="<?=$BASE_URL ?>config/process.php" method="post">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">

        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome"  value="<?= $contact['name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o Telefone" value="<?= $contact['phone'] ?>" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações</label>
            <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Insira as observações" rows="3"  > <?= $contact['observation'] ?>  </textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</div>

<?php
    include_once("templates/footer.php");
?>