<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<?= $this->include('navbar') ?>
<main>
    <div class="container">
        <div id="produtos" class="row">
            <?php foreach ($produtos as $item): ?>
                <div class="col-md-4">
                    <div class="card m-2">
                        <img src="/imgs/<?= $item['img'] ?>" class="card-img-top" height="260px" width="400"/>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['titulo'] ?> | <?= $item['tamanho'] ?> |</h5>
                            <p class="card-text text-muted"><?= $item['descricao'] ?></p>
                            <hr />
                            <h5 class="card-title">Preços</h5>
                            <p class="card-text">R$<?= $item['valor'] ?> - <?= $item['quantidade'] ?> Unidade(s)</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?= $this->endSection() ?>