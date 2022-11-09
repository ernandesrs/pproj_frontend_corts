<form id="jsNewSchedule" action="" data-action-step2="" data-action-cancel="" data-action-submit="">
    <input type="hidden" name="appointment_id">
    <input type="hidden" name="payment_method">

    <div
        class="bkdrop jsBackdrop w-100 h-100 d-flex flex-column justify-content-center align-items-center py-5 position-absolute d-none">
        <div class="d-flex flex-column justify-content-center align-items-center py-5">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="small fw-semibold pt-3">Aguarde...</div>
        </div>
    </div>

    <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab">
        <li class="nav-item">
            <button class="nav-link active" id="step1-tab" data-bs-toggle="pill"
                data-bs-target="#step1" type="button" disabled>Passo 1</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="step2-tab" data-bs-toggle="pill"
                data-bs-target="#step2" type="button" disabled>Passo 2</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="step3-tab" data-bs-toggle="pill"
                data-bs-target="#step3" type="button" disabled>Passo 3</button>
        </li>
    </ul>

    <div class="tab-content position-relative id=" pills-tabContent">
        <div class="tab-pane fade show active" id="step1">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-floating">
                        <select name="qtd" id="qtd" class="form-control">
                            <option value="1">Atendimento para 1 pessoa</option>
                            <option value="2">Atendimento para 2 pessoas</option>
                            <option value="3">Atendimento para 3 pessoas</option>
                        </select>
                        <label for="qtd">Para quantas pessoas?</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="step2">
            <div class="model d-none">
                <div class="col-12 mb-4 schedule-list-item">
                    <h1 class="h4 title"></h1>
                    <div class="card card-body bg-transparent">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-8 mb-3">
                                <div class="form-floating">
                                    <select class="form-control jsDatesList" name=""
                                        id="">
                                        <option value="1">22/11/2022 13:30</option>
                                        <option value="2">22/11/2022 14:30</option>
                                        <option value="3">22/11/2022 15:00</option>
                                        <option value="4">22/11/2022 15:30</option>
                                        <option value="5">22/11/2022 16:00</option>
                                        <option value="6">22/11/2022 16:30</option>
                                    </select>
                                    <label for="">Agendar para</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-xl-4 mb-3">
                                <div class="form-floating">
                                    <select class="form-control jsServicesList" name=""
                                        id="">
                                        <option value="social">Corte social(R$ 25)
                                        </option>
                                        <option value="degrade">Corte degradê(R$ 35)
                                        </option>
                                        <option value="barba">Barba(R$ 45)</option>
                                        <option value="social_barba">Corte social +
                                            Barba(R$ 55)</option>
                                        <option value="degrade_barba">Corte degradê +
                                            Barba(R$ 75)</option>
                                    </select>
                                    <label for="">Tipo de serviço</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3" id="jsScheduleList">
            </div>
        </div>

        <div class="tab-pane fade" id="step3">
            <div class="row pt-3">
                <div class="col-12">
                    O que você está adquirindo
                    <div class="card card-body bg-transparent">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover">
                                <tbody>
                                    <tr>
                                        <td>
                                            Corte social
                                        </td>
                                        <td>
                                            R$ 25
                                        </td>
                                        <td>
                                            Para o dia 22/11/2023 13:30
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Corte degradê
                                        </td>
                                        <td>
                                            R$ 35
                                        </td>
                                        <td>
                                            Para o dia 22/11/2023 15:30
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    Pagamento
                    <div class="card card-body bg-transparent">
                        <div class="form-floating">
                            <select name="pay_method" id="pay_method"
                                class="form-control">
                                <option selected>Escolha uma forma</option>
                                <option value="local">Em dinheiro no local</option>
                            </select>
                            <label for="pay_method">Forma de pagamento</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex pt-4">
        <button class="btn btn-outline-primary d-none" type="button" id="jsPreviowStep">
            <i class='bx bx-left-arrow-alt'></i> <span>Voltar</span>
        </button>
        <button class="btn btn-outline-danger d-none" type="button" id="jsCancelStep">
            <i class='bx bx-x'></i> <span>Cancelar</span>
        </button>
        <button class="btn btn-primary ms-auto" type="button" id="jsNextStep">
            <span>Continuar</span> <i class='bx bx-right-arrow-alt'></i>
        </button>
        <button class="btn btn-primary ms-auto d-none" type="submit" id="jsFinalStep">
            <i class='bx bx-check'></i> <span>Finalizar</span>
        </button>
    </div>

</form>