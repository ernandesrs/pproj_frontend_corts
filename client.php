<?php

require __DIR__ . "/config.php";

$menuHeader = [
    (object) [
        "text" => "Dashboard",
        "url" => URL_BASE,
        "target" => "_self",
        "title" => "Resumo geral"
    ],
    (object) [
        "text" => "Agendamentos",
        "url" => URL_BASE,
        "target" => "_self",
        "title" => "Meus agendamentos"
    ],
    (object) [
        "text" => "Perfil",
        "url" => URL_BASE,
        "target" => "_self",
        "title" => "Meu perfil"
    ],
];

$socials = (object) [
    "facebook" => (object) [
        "icon" => "facebook",
        "name" => "Facebook",
        "url" => "",
    ],
    "instagram" => (object) [
        "icon" => "instagram",
        "name" => "Instagram",
        "user" => "@username",
        "url" => "#",
    ],
    "twitter" => (object) [
        "icon" => "twitter",
        "name" => "Twitter",
        "url" => "",
    ],
    "youtube" => (object) [
        "icon" => "youtube",
        "name" => "Youtube",
        "url" => "",
    ],
    "tiktok" => (object) [
        "icon" => "tiktok",
        "name" => "TikTok",
        "url" => "",
    ],
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corts - Painel do cliente</title>

    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/dash.styles.min.css">
</head>

<body class="client-dash-body">
    <div class="header-bg"></div>

    <header class="header">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <a class="logo" href="<?= URL_BASE ?>">
                        <img src="./assets/img/logo.svg" alt="Corts">
                    </a>
                </div>

                <div class="ms-1">
                    <button class="sidebar-toggler">
                        <span class="toggler-open">
                            &equiv;
                        </span>
                        <span class="toggler-close">
                            &times;
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="container pb-3">
                <p class="h3 mb-0">Bem vindo Cliente!</p>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card card-body bg-trasparent content">

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 sidebar">
                        <div class="card card-body bg-transparent">
                            <h4>Dashboard</h4>
                            <hr>
                            <nav class="nav flex-column">
                                <?php foreach ($menuHeader as $menuH): ?>
                                <a class="nav-link" href="<?= $menuH->url ?>"
                                    target="<?= $menuH->target ?>"
                                    title="<?= $menuH->title ?>">
                                    <?= $menuH->text ?>
                                </a>
                                <?php endforeach; ?>
                                <a href="" class="nav-link">
                                    Sair
                                </a>
                                <a href="#schedule" class="nav-link btn btn-outline-primary mt-5">
                                    Novo agendamento
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="d-flex flex-column h-100">
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
        </div>
    </footer>

    <script src="./assets/js/dash.scripts.min.js"></script>
</body>

</html>