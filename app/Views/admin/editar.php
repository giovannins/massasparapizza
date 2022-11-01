<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<a href="/admin/painel" class="btn btn-warning m-2"><i class="bi bi-arrow-left"></i> Voltar</a>
<div class="container mt-5">
    <div id="produtos" class="row">
        <div class="col-md-6">
        <div class="text-center">
                <h5 class="display-5">Atualizar produto</h5>
            </div>
            <div class="card m-2">
                <div class="card-body">
                    <form action="/admin/api/update/<?= $produtos['id'] ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $produtos['titulo']?>">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $produtos['descricao']?>">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Nome da imagem <span class="text-muted ml-5">400x260px</span></label>
                            <input type="text" class="form-control" id="img" name="img" value="<?= $produtos['img']?>">
                        </div>
                        <div class="mb-3">
                            <label for="tamanho" class="form-label">Tamanho do disco</label>
                            <input type="text" class="form-control" id="tamanho" name="tamanho" value="<?= $produtos['tamanho']?>">
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Preço</label>
                            <input type="text" class="form-control" id="valor" name="valor" value="<?= $produtos['valor']?>">
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?= $produtos['quantidade']?>">
                        </div>
                        <div class="text-end">
                            <button class="btn btn-success"><i class="bi bi-check-lg"></i> Atualizar produto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="text-center">
                <h5 class="display-5">Pré-visualização</h5>
            </div>
            <div class="card m-2">
                <img src="/imgs/" class="card-img-top" id="img_p" height="260px" width="400" />
                <div class="card-body">
                    <h5 class="card-title"><span id="titulo_p">titulo</span> | <span id="tamanho_p">tamanho</span> |</h5>
                    <p class="card-text text-muted"><span id="descricao_p">descricao</span></p>
                    <hr />
                    <h5 class="card-title">Preços</h5>
                    <p class="card-text">R$<span id="valor_p">valor</span> - <span id="quantidade_p">quantidade</span> Unidade(s)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('input').keyup(() => {
        $("#titulo_p").text($("#titulo").val())
        $("#descricao_p").text($("#descricao").val())
        $("#img_p").attr("src", `/imgs/${$("#img").val()}`)
        $("#tamanho_p").text($("#tamanho").val())
        $("#valor_p").text($("#valor").val())
        $("#quantidade_p").text($("#quantidade").val())
    })
</script>
<?= $this->endSection() ?>