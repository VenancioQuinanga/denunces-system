<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/footer4.css">
    <link rel="stylesheet" href="./assets/css/dashboard_.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/root.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/topics_.css" />
    <title>Bounty - <?=$title?></title>
</head>
<body class="bg-dark">  
<?php
// Importing navbar links
$link = [
    'home'=>'./home',
    'dashboard'=>'./dashboard',
    'denunciar'=>'./denunciar',
    'conta'=>'./users/conta'
];

include_once './components/navbar.php';
?>

<div class="pt-5 pb-5 bg-dark" style="background-iage:url('./assets/img/baners/project_bg.jpg');">
    <div class="container ">
        <h1 class="m-4" style="color:#ccc;">Dashboard</h1>
        <div class="v-card bg-primary">
            <div class="v-card-body">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <span>Historico de denuncias</span>
                </h5>
                <small>Seja bem vindo a area de dashboard</small>
                <small>Confira o historico de suas denuncias</small>
            </div>
        </div>
        <div class="v-card">
            <div class="v-card-body">
                <h5>Denuncias</h5>
                <h4>6</h4>
                <small>Efetuadas</small>
            </div>
        </div>
        <div class="v-card">
            <div class="v-card-body">
                <h5>Normais</h5>
                <h4>4</h4>
                <small>Efetuadas</small>
            </div>
        </div>
        <div class="v-card">
            <div class="v-card-body">
                <h5>Anónimas</h5>
                <h4>2</h4>
                <small>Efetuadas</small>
            </div>
        </div>
        <div class="v-card">
            <div class="v-card-body">
                <h5>Em espera</h5>
                <h4>2</h4>
                <small>Estão</small>
            </div>
        </div>
        <div class="v-card">
            <div class="v-card-body">
                <h5>Atendidas</h5>
                <h4>2</h4>
                <small>Foram</small>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <div class="text-light pt-3">
        <h2>Minhas Denúncias</h2>
    </div>
    <div class="mt-4">
        <div class="card p-1 m-2 d-inline-flex" style="width:16em !important;background-color:#000;">
            <div class="card-body text-light">
                <h4>Denúncia: 1</h4>                
                <h4>Tipo</h4>
                <p>Normal</p>
                <h4>Estado</h4>
                <p>Em espera</p>
                <h4>Data de denúncia</h4>
                <small>2023/03/08</small>
                <p class="mt-4">
                    <button class="btn btn-primary">Ver</button>
                    <button class="btn btn-info">Editar</button>
                </p>
            </div>
        </div>

        <div class="card p-1 m-2 d-inline-flex" style="width:16em !important;background-color:#000;">
            <div class="card-body text-light">
                <h4>Denúncia: 11</h4>
                <h4>Tipo</h4>
                <p>Normal</p>
                <h4>Estado</h4>
                <p>Em espera</p>
                <h4>Data de denúncia</h4>
                <small>2023/03/08</small>
                <p class="mt-4">
                    <button class="btn btn-primary">Ver</button>
                    <button class="btn btn-info">Editar</button>
                </p>
            </div>
        </div>
        
        <div class="card p-1 m-2 d-inline-flex" style="width:16em !important;background-color:#000;">
            <div class="card-body text-light">
                <h4>Denúncia: 11</h4>
                <h4>Tipo</h4>
                <p>Normal</p>
                <h4>Estado</h4>
                <p>Em espera</p>
                <h4>Data de denúncia</h4>
                <small>2023/03/08</small>
                <p class="mt-4">
                    <button class="btn btn-primary">Ver</button>
                    <button class="btn btn-info">Editar</button>                 
                </p>
            </div>
        </div>
        
        <div class="card p-1 m-2 d-inline-flex" style="width:16em !important;background-color:#000;">
            <div class="card-body text-light">
                <h4>Denúncia: 11</h4>
                <h4>Tipo</h4>
                <p>Normal</p>
                <h4>Estado</h4>
                <p>Em espera</p>
                <h4>Data de denúncia</h4>
                <small>2023/03/08</small>
                <p class="mt-4">
                    <button class="btn btn-primary">Ver</button>
                    <button class="btn btn-info">Editar</button>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
$js = [ '0'=> './assets/js/bootstrap/bootstrap.js'];
include_once "./components/footer.php";
?>
