<?php

require __DIR__ . "/config.php";

$action = $_GET["action"] ?? "login";

$views = (object) [
    "login" => (object) [
        "title" => "Acessar conta"
    ],
    "register" => (object) [
        "title" => "Criar conta"
    ],
    "forget" => (object) [
        "title" => "Esquecia a senha"
    ],
    "update-password" => (object) [
        "title" => "Atualizar senha"
    ],
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corts - <?= $views->$action->title ?>
    </title>
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.min.css">
</head>

<body class="account-body">
    <div class="container">
        <div class="inner-box">
            <div class="py-4 d-flex align-items-center inner-box-header">
                <a class="logo" href="<?= URL_BASE ?>">
                    <img src="./assets/img/logo.svg" alt="Logo">
                </a>
                <h1 class="ms-4 h4 mb-0 fw-medium">
                    <?= $views->$action->title ?>
                </h1>
                <nav class="d-flex align-items-center ms-auto">
                    <a class="btn <?= $action == "login" ? "btn-primary" : "text-primary" ?> px-4 mx-1"
                        href="account.php?action=login">
                        Login
                    </a>
                    <a class="btn <?= $action == "register" ? "btn-primary" : "text-primary" ?> px-4 mx-1"
                        href="account.php?action=register">
                        Registrar
                    </a>
                </nav>
            </div>
            <div class="p-4 inner-box-content">
                FOMULARP
            </div>
        </div>
    </div>

    <footer class="py-4">
        <div class="container">
            <div class="text-center mt-auto">
                <small>
                    <p class="mb-0">
                        Todos os direitos reservados - By <a
                            href="https://github.com/ernandesrs" title="Github"
                            target="_blank">Ernandes</a>
                    </p>
                    <p class="mb-0">
                        <a href="">
                            Termos de privacidade
                        </a>
                    </p>
                </small>
            </div>
        </div>
    </footer>
</body>

</html>