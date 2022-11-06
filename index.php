<?php

require __DIR__ . "/config.php";

$menuHeader = [
    (object)[
        "text" => "Início",
        "url" => URL_BASE,
        "target" => "_self",
        "title" => "Página inicial"
    ],
    (object)[
        "text" => "Cortes e preços",
        "url" => URL_BASE . "#services",
        "target" => "_self",
        "title" => "Cortes e preços"
    ],
    (object)[
        "text" => "Área do cliente",
        "url" => URL_BASE . "?action=login",
        "target" => "_self",
        "title" => "Acessar área do cliente"
    ],
    (object)[
        "text" => "Example #1",
        "url" => "https://google.com.br",
        "target" => "_blank",
        "title" => "Acessar Google"
    ],
];
$menuFooter = $menuHeader;

$services = [
    (object) [
        "image" => "corte-social",
        "title" => "Corte Social",
        "price" => "25",
        "icon" => "scissor"
    ],
    (object) [
        "image" => "corte-degrade",
        "title" => "Corte Degradê",
        "price" => "35",
        "icon" => "scissor"
    ],
    (object) [
        "image" => "corte-barba",
        "title" => "Corte Barba",
        "price" => "50",
        "icon" => "beard"
    ],
];

$photos = [
    (object) ["name" => "", "url" => "foto-barba.jpg"],
    (object) ["name" => "", "url" => "foto-items-de-barbearia.jpg"],
    (object) ["name" => "", "url" => "foto-degrade.jpg"],
    (object) ["name" => "", "url" => "foto-degrade-2.jpg"],
    (object) ["name" => "", "url" => "foto-degrade-3.jpg"],
    (object) ["name" => "", "url" => "foto-social.jpg"],
    (object) ["name" => "", "url" => "foto-tesouras.jpg"],
    (object) ["name" => "", "url" => "foto-barbearia-interior.jpg"],
    (object) ["name" => "", "url" => "foto-barbearia.jpg"],
];

$socials = [
    (object) [
        "icon" => "facebook",
        "name" => "Facebook",
        "url" => "",
    ],
    (object) [
        "icon" => "instagram",
        "name" => "Instagram",
        "url" => "",
    ],
    (object) [
        "icon" => "twitter",
        "name" => "Twitter",
        "url" => "",
    ],
    (object) [
        "icon" => "youtube",
        "name" => "Youtube",
        "url" => "",
    ],
    (object) [
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
    <title>Corts - Cortes de cabelo e barba em Loremds</title>

    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.min.css">
    <link rel="stylesheet" href="./assets/css/aos.min.css">
</head>

<body>
    <div class="header-bg"></div>

    <header class="header">
        <div class="container">
            <div class="c-header">
                <div class="c-header-leftside">
                    <a class="logo" href="<?= URL_BASE ?>">
                        <img src="./assets/img/logo.svg" alt="Corts">
                    </a>
                </div>

                <div class="c-header-rightside">
                    <button class="c-header-toggler">
                        <span class="c-header-toggler-open">
                            &equiv;
                        </span>
                        <span class="c-header-toggler-close">
                            &times;
                        </span>
                    </button>

                    <div class="c-header-content">
                        <nav class="nav c-header-nav">
                            <?php foreach ($menuHeader as $menuH): ?>
                            <a class="c-header-nav-link" href="<?= $menuH->url ?>"
                                target="<?= $menuH->target ?>"
                                title="<?= $menuH->title ?>">
                                <?= $menuH->text ?>
                            </a>
                            <?php endforeach; ?>
                        </nav>

                        <div class="c-header-account">
                            <a href="#schedule" class="btn btn-primary">
                                Agendar atendimento
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="feature">
        <div class="container">
            <div class="feature-inner d-flex flex-column justify-content-center">
                <div
                    class="row justify-content-center justify-content-lg-start text-center text-lg-start">
                    <div class="col-12 col-md-10 col-lg-7" data-aos="zoom-in-down">
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

    <section class="section services" id="services">
        <div class="container">
            <div class="row justify-content-center pb-4 text-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <h1 data-aos="zoom-in-up">
                        Cortes e Preços
                    </h1>
                    <p class="h4" data-aos="zoom-in-up">
                        Surpreenda-se nossos cortes profissionais e preços baixos
                    </p>
                </div>
            </div>

            <div class="row justify-content-center pb-4" data-aos="zoom-out" data-aos-duration="1000">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center services-list">
                        <?php foreach ($services as $key => $service): ?>
                        <div class="col-10 col-sm-6 col-md-4 mb-4 services-item">
                            <div class="card card-body bg-transparent border-0">
                                <div class="d-flex flex-row mb-2">
                                    <div class="icon">
                                        <img src="./assets/img/icons/<?= $service->icon ?>.svg"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <?= $service->title ?>
                                        </h4>
                                        <p class="h3 mb-0">
                                            R$ <?= $service->price ?>
                                        </p>
                                    </div>
                                </div>

                                <img class="service-image img-fluid"
                                    src="./assets/img/<?= $service->image ?>.jpg"
                                    alt="<?= $service->title ?>">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="" class="btn btn-outline-primary" data-aos="fade-up" data-aos-duration="750">
                    Sou cliente
                </a>
                <a href="" class="btn btn-primary" data-aos="fade-up" data-aos-delay="275" data-aos-duration="750">
                    Agendamento horário
                </a>
            </div>
        </div>
    </section>

    <section class="section schedule" id="schedule">
        <img class="parallax-image" src="./assets/img/section-bg-1.jpg" alt="image">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-lg-8 floating-card">
                    <div class="d-flex flex-column flex-lg-row py-4">

                        <div class="left-side px-4 mb-5 mb-lg-0 order-lg-5">
                            <h3 class="mb-3">
                                <span class="text-primary">VANTAGENS</span> de ser um
                                cliente cadastrado
                            </h3>
                            <p class="mb-4">
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
                            <h3 class="mb-3">
                                Agendamento rápido
                            </h3>
                            <p class="mb-3">
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
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="text" class="form-control"
                                                    id="phone" placeholder="Seu número">
                                                <label for="phone">Celular</label>
                                            </div>
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
        <div class="container">
            <div class="row justify-content-center pb-4 text-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <h1 data-aos="zoom-in-up">
                        Galeria
                    </h1>
                    <p class="h4" data-aos="zoom-in-up">
                        Veja alguns de nossos trabalhos já realizados
                    </p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="750">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="splide" id="photos-galery">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($photos as $item): ?>
                                <li class="splide__slide">
                                    <div class="card card-body border-0 p-1 justify-content-center align-items-center overflow-hidden"
                                        style="height:250px;">
                                        <a class="position-absolute" href=""
                                            data-bs-toggle="modal"
                                            data-bs-target="#photo-view"
                                            data-image="./assets/img/photos/<?= $item->url ?>">
                                            <img src="./assets/img/photos/<?= $item->url ?>"
                                                alt="<?= $item->name ?>">
                                        </a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div
                            class="splide__pagination splide__pagination--ltr position-relative py-4">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section location">
        <div class="container">
            <div class="row justify-content-center pb-4 text-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <h1 data-aos="zoom-in-up">
                        Onde Estamos?
                    </h1>
                    <p class="h4" data-aos="zoom-in-up" data-aos-delay="275">
                        Encontre-nos por um dos meios abaixo
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-6 col-xl-5 d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <!-- address -->
                        <div class="d-flex align-items-center mb-3" data-aos="zoom-in-right">
                            <div class="icon">
                                <svg width="45" height="45" viewBox="0 0 45 45"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.5 3.75C14.2294 3.75 7.5 10.4794 7.5 18.7406C7.44563 30.825 21.93 40.845 22.5 41.25C22.5 41.25 37.5544 30.825 37.5 18.75C37.5 10.4794 30.7706 3.75 22.5 3.75ZM22.5 26.25C18.3562 26.25 15 22.8937 15 18.75C15 14.6062 18.3562 11.25 22.5 11.25C26.6437 11.25 30 14.6062 30 18.75C30 22.8937 26.6437 26.25 22.5 26.25Z"
                                        fill="#EBEBEB" />
                                </svg>
                            </div>
                            <div class="description ms-3">
                                <span class="h4">Rua Lorem Ipsum, 2246</span>
                                <br>
                                <span class="h4">Centro, Loremds, LD</span>
                            </div>
                        </div>

                        <!-- phone number -->
                        <div class="d-flex align-items-center mb-3" data-aos="zoom-in-right" data-aos-delay="125">
                            <div class="icon">
                                <svg width="45" height="45" viewBox="0 0 45 45"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37.5 20.6231H41.25C41.25 11.0044 33.9881 3.75 24.3563 3.75V7.5C31.9725 7.5 37.5 13.0181 37.5 20.6231Z"
                                        fill="#EBEBEB" />
                                    <path
                                        d="M24.375 15C28.3181 15 30 16.6818 30 20.625H33.75C33.75 14.5781 30.4219 11.25 24.375 11.25V15ZM30.7913 25.2056C30.431 24.8781 29.9575 24.7035 29.4709 24.7185C28.9843 24.7336 28.5225 24.9371 28.1831 25.2862L23.6963 29.9006C22.6163 29.6943 20.445 29.0175 18.21 26.7881C15.975 24.5512 15.2981 22.3743 15.0975 21.3018L19.7081 16.8131C20.0577 16.4739 20.2615 16.0121 20.2766 15.5253C20.2916 15.0386 20.1167 14.565 19.7888 14.205L12.8606 6.58683C12.5326 6.22563 12.0767 6.00653 11.5897 5.97607C11.1027 5.94561 10.623 6.10619 10.2525 6.42371L6.18376 9.91308C5.85959 10.2384 5.66611 10.6714 5.64001 11.13C5.61188 11.5987 5.07564 22.7025 13.6856 31.3162C21.1969 38.8256 30.6056 39.375 33.1969 39.375C33.5756 39.375 33.8081 39.3637 33.87 39.36C34.3285 39.3343 34.7612 39.1399 35.085 38.8143L38.5725 34.7437C38.8903 34.3735 39.0512 33.8939 39.0211 33.4069C38.9909 32.92 38.7722 32.4639 38.4113 32.1356L30.7913 25.2056Z"
                                        fill="#EBEBEB" />
                                </svg>
                            </div>
                            <div class="description ms-3">
                                <span class="h4">+55 (77) 00000-0000</span>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="d-flex align-items-center mb-3" data-aos="zoom-in-right" data-aos-delay="200">
                            <div class="icon">
                                <svg width="45" height="45" viewBox="0 0 45 45"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37.5 7.5H7.5C6.50544 7.5 5.55161 7.89509 4.84835 8.59835C4.14509 9.30161 3.75 10.2554 3.75 11.25V33.75C3.75 34.7446 4.14509 35.6984 4.84835 36.4016C5.55161 37.1049 6.50544 37.5 7.5 37.5H37.5C38.4946 37.5 39.4484 37.1049 40.1516 36.4016C40.8549 35.6984 41.25 34.7446 41.25 33.75V11.25C41.25 10.2554 40.8549 9.30161 40.1516 8.59835C39.4484 7.89509 38.4946 7.5 37.5 7.5ZM37.5 16.3125L22.5 26.3138L7.5 16.3125V11.8069L22.5 21.8063L37.5 11.8069V16.3125Z"
                                        fill="#EBEBEB" />
                                </svg>
                            </div>
                            <div class="description ms-3">
                                <span class="h4">example@domain.com</span>
                            </div>
                        </div>

                        <!-- whatsapp -->
                        <div class="d-flex align-items-center mb-3" data-aos="zoom-in-right" data-aos-delay="275">
                            <div class="icon">
                                <svg width="45" height="45" viewBox="0 0 45 45"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.5056 10.5619C32.9463 8.99234 31.091 7.74777 29.0472 6.90033C27.0035 6.05289 24.8119 5.61943 22.5994 5.62505C13.3219 5.62505 5.76938 13.1757 5.76563 22.4569C5.76563 25.4232 6.54 28.3182 8.01187 30.8719L5.625 39.5926L14.5481 37.2507C17.0164 38.5943 19.7816 39.2988 22.5919 39.3001H22.5994C31.875 39.3001 39.4275 31.7494 39.4313 22.4682C39.4376 20.2566 39.0056 18.0657 38.1601 16.022C37.3147 13.9784 36.0726 12.1226 34.5056 10.5619ZM22.5994 36.4594H22.5938C20.0878 36.4597 17.6281 35.7855 15.4725 34.5076L14.9625 34.2038L9.6675 35.5932L11.0794 30.4313L10.7475 29.9026C9.34648 27.6721 8.60481 25.0909 8.60813 22.4569C8.61188 14.7432 14.8875 8.46755 22.605 8.46755C24.443 8.46347 26.2635 8.82396 27.9612 9.52815C29.6589 10.2323 31.2001 11.2663 32.4956 12.5701C33.798 13.8676 34.8304 15.4105 35.5329 17.1094C36.2355 18.8084 36.5943 20.6297 36.5887 22.4682C36.585 30.1819 30.3094 36.4594 22.5994 36.4594ZM30.2738 25.9801C29.8519 25.7682 27.7856 24.7519 27.3994 24.6113C27.015 24.4707 26.7356 24.4013 26.4544 24.8213C26.1731 25.2413 25.3669 26.1882 25.1213 26.4694C24.8756 26.7507 24.63 26.7844 24.21 26.5744C23.79 26.3644 22.4344 25.9201 20.8275 24.4876C19.5769 23.3719 18.7331 21.9957 18.4875 21.5738C18.2419 21.1519 18.4612 20.9251 18.6731 20.7151C18.8625 20.5276 19.0931 20.2238 19.3031 19.9782C19.5131 19.7326 19.5825 19.5582 19.7231 19.2769C19.8638 18.9957 19.7944 18.7501 19.6875 18.5401C19.5825 18.3282 18.7406 16.2582 18.39 15.4163C18.0506 14.6007 17.7037 14.7094 17.445 14.6982C17.177 14.6872 16.9088 14.6822 16.6406 14.6832C16.4274 14.6886 16.2175 14.7381 16.0242 14.8284C15.831 14.9187 15.6585 15.048 15.5175 15.2082C15.1313 15.6301 14.0456 16.6463 14.0456 18.7163C14.0456 20.7863 15.5531 22.7869 15.7631 23.0682C15.9731 23.3494 18.7294 27.5963 22.9481 29.4188C23.9531 29.8519 24.7369 30.1107 25.3462 30.3057C26.3531 30.6263 27.27 30.5794 27.9956 30.4726C28.8037 30.3526 30.4837 29.4563 30.8344 28.4738C31.185 27.4913 31.185 26.6494 31.08 26.4732C30.975 26.2969 30.6919 26.1901 30.2738 25.9801Z"
                                        fill="#EBEBEB" />
                                </svg>
                            </div>
                            <div class="description ms-3">
                                <span class="h4">+55 (77) 00000-0000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7 py-3" data-aos="zoom-in-left" data-aos-duration="750">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1667673971501!6m8!1m7!1sh9fsIkFmlutDRUO13dLp9Q!2m2!1d25.19846403102348!2d55.27243301486146!3f133.59694635865472!4f39.71106924254599!5f0.7820865974627469"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="d-flex flex-column h-100">
                <div class="row py-5">
                    <div class="col-12 col-md-5 mb-5 mb-md-0">
                        <img class="logo" src="./assets/img/logo.svg" alt="Corts">
                        <div class="pt-4 nav footer-socials">
                            <?php foreach ($socials as $social): ?>
                            <a class="nav-link" href="<?= $social->url ?>"
                                title="<?= $social->name ?>" target="_blank">
                                <img src="./assets/img/icons/<?= $social->icon ?>.svg"
                                    alt="<?= $social->name ?>">
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
                        <h4>MENU</h4>
                        <nav class="nav flex-column footer-menu">
                            <?php foreach($menuFooter as $menuF): ?>
                            <a class="nav-link" href="<?= $menuF->url ?>"
                                target="<?= $menuF->target ?>"
                                title="<?= $menuF->title ?>">
                                <?= $menuF->text ?>
                            </a>
                            <?php endforeach; ?>
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
                                href="mailto:example@domain.com">
                                example@domain.com
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="text-center mt-auto pb-3">
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

    <!-- modal: photo view -->
    <div class="modal" tabindex="-1" id="photo-view">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="photo-view-label">Preview</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div class="loading-area text-center">
                        <div class="spinner-border text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="pt-2">
                            <strong>
                                Carregando imagem...
                            </strong>
                        </div>
                    </div>
                    <div class="image-area d-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal: photo view -->

    <script src="./assets/js/simple-parallax.min.js"></script>
    <script src="./assets/js/aos.min.js"></script>
    <script src="./assets/js/splide.min.js"></script>
    <script src="./assets/js/scripts.min.js"></script>

</body>
</html>