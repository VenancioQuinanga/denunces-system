<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/footer4.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/root.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/topics_.css" />
    <title>Bounty - <?=$title?></title>
</head>
<body class="bg-dark">  
<?php
// Importing navbar
include_once './components/start_navbar.php';
?>

<div class="bg-dark">
    <div class="container-*">
        <div class="card bg-info p-3">
            <div class="card-body">
                <div class="jumbotron">
                    <h1 class="display-5" style='color:#fff !important;text-transform:uppercase;'>Efectue suas denúncias aqui</h1>
                    <h1 class="display-5" style='color:#fff !important;text-transform:uppercase;'>ajude os orgãos de justiça a manter</h1>
                    <h1 class="display-5" style='color:#fff !important;text-transform:uppercase;'>a ordem e a segurança</h1>
                    <div class="bg-primary p-4 mt-4 mb-4 rounded" style='color:#fff !important;'>
                        <p class="lead">Voce poderá denunciar aqueles que ameaçam a sua segurança ou da sociedade</p>
                        <hr class="mt-4">
                        <p class="lead">Ajude no combate a criminalidade, não exite, faça o que está certo</p>
                    </div>
                    <p class="lead">
                        <a href="./users/sign_up" class="btn btn-dark">Clique aqui e participe desta causa</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="topics bg-dark" id="topics">
    <div class="container row">
        <div class="col-md-6" style="z-index: 1;">
            <div class="title-page">Conheça melhor</div>
            <div class="title-page"> o Bounty</div>
            <div class="title-page display-6 mb-4 mt-4 text-secondary">Tire suas</div>
            <div class="title-page display-6 mb-4 mt-4 text-secondary">dúvidas</div>
            <div class="title-page display-6 mb-4 mt-4 text-secondary">Agora</div>
            <div class="title-page display-6 mb-4 mt-4 text-secondary">___________</div>
        </div>

        <div class="col-md-6 content">
        <div class="title-page text-secondary">FAQS:</div>

            <span class="title">O que é o Bounty afinal</span>
            <p>O Bounty é nada mais nada menos que um sistema de denúncias implementado em Angola,
                e tem como um dos seus objectivos permitir aos cidadãos angolanos denunciar actividades
                criminosas como furtos,assaltos,violência doméstica,entre outras mais.
            </p>

            <span class="title">Qual é o principal objectivo do Bounty </span>
            <p>O Bounty tem como principal objectivo permitir aos cidadãos angolanos denunciar actividades
                inlícitas (ou seja crimes) sem a necessidade de sair de casa ou seja de forma digital.
                Além de permiti-nos acompanharem o andamento das mesmas e adicionar evidências que ajudem
                a concluir a investigação. 
            </p>

            <span class="title">Como ocorre o processo de denúncias</span>
            <p>Para efetuares o processo de denúncia teras cumprir os seguintes requisitos: </p>
            <p>1° Ter uma conta aqui no Bounty(estar registrado no Bounty);</p>
            <p>2° Aceder a essa mesma conta(fazer login);</p>
            <p>3° No menu do Bounty deveras escolher a opção Dashboard, onde encontraras as
                denuncias que efetuares, e algumas opções;
            </p>
            <p>4° Deveras escolher a opção denunciar que te apresentará um formulário de denuncias; </p>
            <p>5° Asseguir teras apenas de responder algumas questões como: O que aconteceu ?,
                onde ?,quando ?,qual é o tipo de denúcia ?,qual é o tipo de crime,etc, e clicar em denunciar.
            </p>

            <span class="title">É possível fazer denúncias anónimas </span>
            <p>Sim, é possível fazeres denúncias anónimas e ocultares a tua identidade caso assim quiseres
                durante o processo de denúncia teras essa opção no formulário de denuncias que teras de preencher.
            </p>
            <p class="lead">
                <a href="./users/sign_up" class="btn btn-primary text-light">Clique aqui e participe desta causa</a>
            </p>
        </div>
    </div>
</div>

<?php
$js = [ '0'=> './assets/js/bootstrap/bootstrap.js'];
include_once "./components/footer.php";
?>
