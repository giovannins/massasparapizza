<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<?= $this->include('navbar') ?>
<div class="container mt-3">
    <h3 class="text-center display-3 animate__animated animate__fadeInUp">Fabricamos massas para pizzas!</h3>

    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="text-center">
                <h5 class="p-3">
                    <i class="bi bi-envelope-fill"></i>
                    vendas@pizzaspre.com.br
                </h5>
                <h5 class="p-3">
                    <i class="bi bi-phone-fill"></i>
                    +55 (11) 93015-0000
                </h5>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="text-center">
                <h5 class="p-3">
                    <i class="bi bi-geo-alt-fill"></i>
                    Av. Benedito Lopes da Silva, 799, Jd. Cipava, Osasco
                </h5>
                <h5 class="p-3">
                    <i class="bi bi-clock-fill"></i>
                    Segunda a Sexta das 09.00h. as 17.00h.
                </h5>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>