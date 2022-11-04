<?php require __DIR__ . "/config.php" ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corts - Cortes de cabelo e barba em Loremds</title>

    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.min.css">
</head>

<body>
    <div class="header-bg"></div>

    <header class="header">
        <div class="container">
            <div class="d-flex align-items-center">
                <a href="<?= URL_BASE ?>">
                    <img src="./assets/img/logo.svg" alt="Corts">
                </a>

                <div class="ms-auto">
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="http://localhost/cortsfront" class="nav-link">
                                    Início
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">
                                    Cortes e preços
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="client.php?action=login" class="nav-link">
                                    Área do cliente
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#schedule" class="btn btn-primary">
                                    Agendar atendimento
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="feature">
        <div class="container">
            <div class="feature-inner d-flex flex-column justify-content-center">
                <div class="row justify-content-start">
                    <div class="col-12 col-md-8 col-lg-7">
                        <h1 class="feature-title">
                            Nós surpreendemos você e você surpreende o mundo com <span
                                class="text-primary">um belo corte de cabelo</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div>
                <a class="button-services d-flex flex-column justify-content-center align-items-center"
                    href="#services">
                    <span class="h4">Cortes e preços</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.939 7.939L12 12.879L7.061 7.939L4.939 10.061L12 17.121L19.061 10.061L16.939 7.939Z"
                            fill="#BDBDBD" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="section py-5 services" id="services">
        <div class="container">
            <div class="row justify-content-center pb-4 text-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <h1>
                        Cortes e Preços
                    </h1>
                    <p class="h4">
                        Surpreenda-se nossos cortes profissionais e preços baixos
                    </p>
                </div>
            </div>

            <div class="row justify-content-center pb-4">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center services-list">
                        <?php
                        $services = [
                            [
                                "image" => "corte-social",
                                "title" => "Corte Social",
                                "price" => "25",
                                "icon" => "scissor"
                            ],
                            [
                                "image" => "corte-degrade",
                                "title" => "Corte Degradê",
                                "price" => "35",
                                "icon" => "scissor"
                            ],
                            [
                                "image" => "corte-barba",
                                "title" => "Corte Barba",
                                "price" => "50",
                                "icon" => "beard"
                            ],
                        ];
                        ?>

                        <?php foreach ($services as $key => $service): ?>
                        <div class="col-10 col-sm-6 col-md-4 mb-4 services-item">
                            <div class="card card-body bg-transparent border-0">
                                <div class="d-flex flex-row mb-2">
                                    <div class="icon">
                                        <img src="./assets/img/icons/<?= $service["icon"] ?>.svg"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <?= $service["title"] ?>
                                        </h4>
                                        <p class="h3 mb-0">
                                            R$ <?= $service["price"] ?>
                                        </p>
                                    </div>
                                </div>

                                <img class="service-image img-fluid"
                                    src="./assets/img/<?= $service["image"] ?>.jpg"
                                    alt="<?= $service["title"] ?>">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="" class="btn btn-outline-primary">
                    Sou cliente
                </a>
                <a href="" class="btn btn-primary">
                    Agendamento horário
                </a>
            </div>
        </div>
    </section>

    <section class="section py-5 schedule" id="schedule">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-lg-8 floating-card">
                    <div class="d-flex flex-column flex-lg-row py-4">

                        <div class="left-side px-4 mb-5 mb-lg-0 order-lg-5">
                            <h3 class="mb-2">
                                <span class="text-primary">VANTAGENS</span> de ser um
                                cliente cadastrado
                            </h3>
                            <p class="mb-2">
                                Clientes cadastrados participam de <span
                                    class="text-primary">sorteios mensais</span> e ganham
                                <span class="text-primary">descontos exclusivos</span>!
                            </p>
                            <div class="d-flex flex-column">
                                <a class="btn btn-primary mb-2"
                                    href="client.php?action=login">
                                    Fazer login
                                </a>
                                <a class="btn btn-outline-primary"
                                    href="client.php?action=register">
                                    Iniciar um cadastrado grátis
                                </a>
                            </div>
                        </div>

                        <div class="right-side px-4 order-lg-1">
                            <h3 class="mb-2">
                                Agendamento rápido
                            </h3>
                            <p class="mb-2">
                                Faça um agendamento rápido conosco
                            </p>
                            <div>
                                <form action="">
                                    <div class="mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control"
                                                id="full_name" placeholder="Seu nome">
                                            <label for="full_name">Nome</label>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control"
                                                id="phone" placeholder="Seu número">
                                            <label for="phone">Celular</label>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-floating">
                                            <select class="form-control" id="email"
                                                placeholder="Seu horário">
                                                <option selected>
                                                    Escolha
                                                </option>
                                                <option value="">
                                                    Quinta-feirta - 8:30
                                                </option>
                                                <option value="">
                                                    Quinta-feirta - 8:50
                                                </option>
                                                <option value="">
                                                    Quinta-feirta - 9:20
                                                </option>
                                            </select>
                                            <label for="email">Seu melhor horário</label>
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center pt-2">
                                        <a class="btn btn-primary" href="">
                                            Finalizar agendamento
                                        </a>
                                        <small class="py-2">
                                            <a href="">
                                                Regulamentos
                                            </a>
                                        </small>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section album">
        <div class="container"></div>
    </section>

    <section class="section location">
        <div class="container"></div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="d-flex flex-column h-100">
                <div class="row py-5">
                    <div class="col-12 col-md-5 mb-5 mb-md-0">
                        <img class="logo" src="./assets/img/logo.svg" alt="Corts">
                        <div class="pt-4 nav footer-socials">
                            <?php
                            $socials = [
                                [
                                    "icon" => "facebook",
                                    "name" => "Facebook",
                                    "url" => "",
                                ],
                                [
                                    "icon" => "instagram",
                                    "name" => "Instagram",
                                    "url" => "",
                                ],
                                [
                                    "icon" => "twitter",
                                    "name" => "Twitter",
                                    "url" => "",
                                ],
                                [
                                    "icon" => "youtube",
                                    "name" => "Youtube",
                                    "url" => "",
                                ],
                                [
                                    "icon" => "tiktok",
                                    "name" => "TikTok",
                                    "url" => "",
                                ],
                            ];
                            foreach ($socials as $social):
                            ?>
                            <a class="nav-link" href="<?= $social["url"] ?>"
                                title="<?= $social["name"] ?>" target="_blank">
                                <img src="./assets/img/icons/<?= $social["icon"] ?>.svg"
                                    alt="<?= $social["name"] ?>">
                            </a>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
                        <h4>MENU</h4>
                        <nav class="nav flex-column footer-menu">
                            <a href="" class="nav-link">
                                Início
                            </a>
                            <a href="" class="nav-link">
                                Cortes e preços
                            </a>
                            <a href="" class="nav-link">
                                Área do cliente
                            </a>
                            <a href="" class="nav-link">
                                Agendar atendimento
                            </a>
                        </nav>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <h4>ENCONTRE-NOS</h4>
                        <nav class="nav flex-column">
                            <a class="nav-link disabled" href="">
                                Rua Lorem Ipsum Dolor, 2246<br>
                                Loremdolor, LD
                            </a>
                            <a class="nav-link text-muted" href="tel:+55 67 90000-0000">
                                +55 67 90000-0000
                            </a>
                            <a class="nav-link text-muted"
                                href="mailto:atendimento@corts.com">
                                atendimento@corts.com
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="text-center mt-auto pb-3">
                    <small>
                        <p class="mb-0">
                            Todos os direitos reservados
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

    <script src="./assets/js/scripts.min.js"></script>
</body>

</html>