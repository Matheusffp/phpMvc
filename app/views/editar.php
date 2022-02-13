<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de Edição</h3>

        <div class="col s12">
        <form action="?router=Site/alterar" method="POST">
            <?php foreach($editarForm as $edit){ ?>
            <div class="input-field col s12 m6">
                <label for="nome"> Digite Seu Nome: </label>
                <input type="text" name="nome" id="nome" value="<?= $edit['nome'] ?>" required>
            </div>
            <div class="input-field col s12 m6">
                <label for="email"> Digite Seu Email: </label>
                <input type="email" name="email" id="email" value="<?= $edit['email'] ?>" required>
            </div>
            <div class="input-field col s12">
                <input type="submit" value="Salvar Alterações" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
            <?php } ?>
        </form>
    </div>
    </div>
