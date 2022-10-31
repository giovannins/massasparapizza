<?= $this->extend('default') ?>

<?= $this->section('conteudo') ?>
<?= $this->include('navbar') ?>
<div class="container mt-5">
    <h1 class="display-2 text-center animate__animated animate__fadeInUp">Massa de Pizza</h1>
    <div class="p-3 my-5 mx-5">
        <p class="fs-4 fw-light animate__animated animate__fadeInUp animate__delay-1s text-center">Massas Pré
            assadas, com Ingredientes de 1ª linha,
            feito artesanalmente, pré assada em pedra, com aparência de forno a lenha, sabor e aroma inigualáveis.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-sm-6">
            <p class="animate__animated animate__flipInX animate__delay-2s">
                Procurando um bom Pizzaiolo mais não encontra.
                Quando encontra, falta Compromisso?
            </p>
            <p class="animate__animated animate__flipInX animate__delay-3s">
                O dia tem uma Alta Demanda sua Cozinha não dá Conta?
            </p>
            <p class="animate__animated animate__flipInX animate__delay-4s">
                O Espaço que você tem em sua Pizzaria é Pequeno?
            </p>
        </div>
        <div class="col-sm-6">
            <p class="animate__animated animate__flipInX animate__delay-4s animate__slow">
                Custo altíssimo em Equipamentos?
            </p>
            <p class="animate__animated animate__flipInX animate__delay-5s">
                Já Pensou em Comprar seus Discos Pré Assados?
            </p>
            <p class="animate__animated animate__flipInX animate__delay-5s animate__slow">
                Redução de custos , Agilidade. A Tranquilidade em ter Sempre sua Massa
            </p>
        </div>
    </div>
</div>
<div class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md m-auto">
                <img src="/imgs/massatextosg.png" class="img-fluid" alt="Massa de Pizza sem gluten">
            </div>
            <div class="col m-auto p-3 fs-5 text-center">
                <p class="fw-light">
                    Todo mundo ama pizza e muitas pessoas deixam de saborear por conta de alguma intolerância ao
                    glúten,
                    mas agora isso mudou! As nossas massas sem glúten pré assadas são indescritivelmente <span class="fw-bold">saborosa</span> e muito gostosas e,
                    o melhor, <span class="fw-bold">sem glúten e sem lactose</span>.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="mb-5">
    <div>
        <img src="/imgs/pizzasfundo2.jpg" alt="Pedaços de pizza" class="img-fluid">
    </div>
    <div class="container">
        <p class="text-center fs-5 p-3 fw-light">
            Chega de "sem glúten sem graça", nossa massa de pizza pré assada <span class="fw-bold">sem glúten</span>
            é <span class="fw-bold">deliciosa</span> do jeito que você merece.
        </p>
    </div>
</div>
<?= $this->endSection() ?>