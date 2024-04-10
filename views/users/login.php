<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/root.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/topics_.css" />
    <title>Bounty - <?=$title?></title>
</head>
<body class="bg-info" id="login">

<div class="container ">
    <div class="row fixed-top">
        <div class="col-md-6 mt-4" style="margin-left:auto;margin-right:auto;">
            <div class="card bg-dark p-4" id="login">
                <div class="card-body">
                    <form action="">
                    <div class="col-md-6 content">
                        <span class="title text-dark">Bounty</span>
                    </div>
                    <h3 class="text-light mt-2 mb-2">Entrar com email e senha</h3>
                        <label for="" class="mb-1 mt-2 text-light">Email</label>
                        <input type="email" class="form-control mt-2" placeholder="Email ou Usuário">
                        <div class="d-flex">
                            <label for="" class="mb-1 mt-2 text-light me-auto">Senha</label>
                            <p class="mb-1 mt-2 text-primary">
                                <a href="../users/redefinir_senha">Esqueci minha senha</a>
                            </p>
                        </div>
                        <input type="password" class="form-control mt-2" placeholder="Sua senha">
                        <div class="d-flex">
                            <input type="submit" class="btn btn-primary text-light mt-2 me-auto" style="font-weight:bold;" value="Entrar">
                            <p class="mb-1 mt-2 text-primary">
                                <a href="../users/sign_up">Não tenho uma conta</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>