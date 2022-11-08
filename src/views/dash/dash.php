<?php

/*
 * Apenas para exemplo: alternar card (atendimento agendado e sem agendamento)
 */
$scheduleActive = false;

?>

<div class="row mb-4">
    <div class="col-12 col-md-6">
        <?php if(!$scheduleActive): ?>
        <div class="card card-body custom-card">
            <p class="h4 mb-3">Você não possui nenhum atendimento agendado</p>
            <a class="btn btn-outline-primary" href="<?= URL_BASE . "/client.php?action=new-schedule" ?>">
                <i class='bx bx-calendar-check'></i> <span>Fazer um agendamento</span>
            </a>
        </div>
        <?php else: ?>
        <div class="card card-body custom-card custom-card-scheduled">
            <p class="h4 mb-3">Você possui atendimento agendado</p>
            <p>
                Dia: 22/04/2023 13:30 - 14:30
            </p>
            <p class="small">
                Atendimento para 2 pessoas.
            </p>
            <a class="btn btn-outline-danger" href="">
                <i class='bx bx-x'></i> <span>Cancelar agendamento</span>
            </a>
        </div>
        <?php endif; ?>
    </div>

    <div class="col-12 col-md-6">
        <div class="card card-body bg-transparent">
            <p class="h4 mb-3">Você está participando do sorteio deste mês!</p>
            <a class="small" href="">Ver regulamentos</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="mb-2 d-flex align-items-center">
            <h2 class="h4 mb-0">Últimos agendamentos</h2>
            <a class="btn text-primary ms-auto" href="<?= URL_BASE . "
                /client.php?action=schedules" ?>">
                <span>Ver todos</span> <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
        <hr>
        <div class="table-responsive schedules-list">
            <table class="table table-striped table-hover table-borderless">
                <thead>
                    <tr>
                        <td>Data</td>
                        <td>Serviço</td>
                        <td>Valor pago</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if($scheduleActive): ?>
                    <tr class="scheduled">
                        <td>22/04/2023</td>
                        <td>Corte social</td>
                        <td>R$ 30</td>
                        <td class="status">Agendado</td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td>22/04/2023</td>
                        <td>Corte social</td>
                        <td>R$ 30</td>
                        <td class="status">Concluído</td>
                    </tr>
                    <tr>
                        <td>01/02/2023</td>
                        <td>Corte social</td>
                        <td>R$ 30</td>
                        <td class="status">Concluído</td>
                    </tr>
                    <tr>
                        <td>03/12/2022</td>
                        <td>Corte social</td>
                        <td>R$ 30</td>
                        <td class="status">Concluído</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>