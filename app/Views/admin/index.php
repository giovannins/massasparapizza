<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-center">Administrador</h5>
        <form action="/admin/login" method="post">
            <?= csrf_field() ?>
            <div class="my-3">
                <label for="adminPass" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="adminPass" name="adminPass">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>