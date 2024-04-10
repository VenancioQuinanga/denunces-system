
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/root.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/topics_.css" />
    <title>Bounty - <?=$title?></title>
</head>
<body class="bg-info" id="login">

<div class="container">
    <div class="row">
        <div class="col-md-7 mt-4" style="margin-left:auto;margin-right:auto;">
            <div class="card bg-dark p-4" id="sign_up">
                <div class="card-body">
                    <form action="./denunciar" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6 content">
                            <span class="title text-dark">Bounty</span>
                        </div>
                        <h3 class="text-light mt-2 mb-2">Preencha as informações e denuncie</h3>
                        <label for="" class="mb-1 mt-2  text-light">Ocorrido</label>
                        <input type="text" class="form-control mt-2" placeholder="O que aconteceu, onde, e quando?">
                        <label for="" class="mb-1 mt-2  text-light">Tipo de denúncia</label>
                        <select class="mb-1 mt-2 form-control" name="">
                            <option value="">Qual é o tipo de denuncia?</option>
                            <option value="1">Normal</option>
                            <option value="2">Anónima</option>
                        </select>
                        <label for="" class="mb-1 mt-2  text-light">Testemunha</label>
                        <input type="text" class="form-control" placeholder="Informe uma testemunha">
                        <label for="" class="mb-1 mt-2  text-light">Evidencias</label>
                        <input type="file" class="form-control" name="evidences[]" multiple="multiple">
                        <P class="text-light mt-4">Qual é o tipo de crime?</P>
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 text-light">Assalto</label>
                        </div>
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 mt-1 text-light">Furto</label>
                        </div>
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 mt-1 text-light">Violencia doméstica</label>
                        </div>
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 mt-1 text-light">Corrupção</label>
                        </div>
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 mt-1 text-light">Outro/os</label>
                        </div>
                        <input type="submit" name="denunce" class="btn btn-primary form-control text-light mt-2 me-auto" style="font-weight:bold;" value="Denunciar">
                        <div class="d-block">
                            <input type="checkbox">
                            <label for="" class="mb-1 mt-1 text-light">Aceito o uso das informações fornecidas</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
