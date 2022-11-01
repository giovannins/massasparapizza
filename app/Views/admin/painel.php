<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<a href="/admin/painel/criar" class="btn btn-success m-2"><i class="bi bi-plus-lg"></i> Adicionar produto</a>
<div class="container">
    <div id="produtos" class="row">
        <?php foreach ($produtos as $item) : ?>
            <div class="col-md-4">
                <div class="card m-2">
                    <img src="/imgs/<?= $item['img'] ?>" class="card-img-top" height="260px" width="400" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['titulo'] ?> | <?= $item['tamanho'] ?> |</h5>
                        <p class="card-text text-muted"><?= $item['descricao'] ?></p>
                        <hr />
                        <h5 class="card-title">Preços</h5>
                        <p class="card-text">R$<?= $item['valor'] ?> - <?= $item['quantidade'] ?> Unidade(s)</p>
                        <hr />
                        <div class="text-end">
                            <a href="/admin/painel/editar/<?= $item['id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <button class="btn btn-danger" onclick="deletar(<?= $item['id'] ?>)" id="delete"><i class="bi bi-x-lg"></i> Deletar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function deletar(id) {
        const settings = {
            "async": true,
            "crossDomain": true,
            "url": `/admin/api/delete/${id}`,
            "method": "DELETE",
            "headers": {}
        };
        $.ajax(settings).done(function(response) {
            location.reload();
        });
    }
</script>
<?= $this->endSection() ?>