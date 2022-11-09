class Appointment {
    constructor(form) {
        this.appointmentForm = document.querySelector(form);
        if (!this.appointmentForm) return;

        this.appointmentData = {
            appointmentAmount: 1,
            list: []
        };
        this.appointmentAmountInput = this.appointmentForm.querySelector("#qtd");
        this.appointmentList = this.appointmentForm.querySelector("#jsScheduleList");
        this.appointmentAmount = {
            current: 1,
            old: null
        };
        this.appointmentSteps = {
            current: 1,
            old: null
        };
        this.buttonNextStep = this.appointmentForm.querySelector("#jsNextStep");
        this.buttonPreviowStep = this.appointmentForm.querySelector("#jsPreviowStep");
        this.buttonCancelStep = this.appointmentForm.querySelector("#jsCancelStep");
        this.buttonFinalStep = this.appointmentForm.querySelector("#jsFinalStep");
        this.buttonFinalStep.disabled = true;
        this.appointmentPaymentMethodInput = this.appointmentForm.querySelector("#pay_method");
    }

    /**
     * Inicia monitoramentos
     */
    init() {
        if (!this.appointmentForm) return;

        /**
         * Monitorara alterações na quantidade de agendamentos
         */
        this.appointmentAmountInput.addEventListener("change", (event) => {
            if (["1", "2", "3"].includes(event.target.value)) {
                this.appointmentAmount.old = this.appointmentAmount.current;
                this.appointmentAmount.current = event.target.value;

                this.appointmentData.appointmentAmount = this.appointmentAmount.current;
            }
        });

        /**
         * Monitorara clique no botão de avançar
         */
        this.buttonNextStep.addEventListener("click", (event) => {
            event.preventDefault();

            if (this.appointmentSteps.current <= 3) {
                this.appointmentSteps.old = this.appointmentSteps.current;
                this.appointmentSteps.current++;
            }

            this.changeAppointmentStepsTab();
        });

        /**
         * Monitora clique no botão de voltar
         */
        this.buttonPreviowStep.addEventListener("click", (event) => {
            event.preventDefault();

            if (this.appointmentSteps.current > 1) {
                this.appointmentSteps.old = this.appointmentSteps.current;
                this.appointmentSteps.current--;
            }

            this.changeAppointmentStepsTab();
        });

        /**
         * Monitora clique no botão de cancelar
         */
        this.buttonCancelStep.addEventListener("click", (event) => {
            event.preventDefault();

            this.cancelAppointment();
        });

        /**
         * Monitora submissão do formulário
         */
        this.appointmentForm.addEventListener("submit", (event) => {
            event.preventDefault();

            this.submitForm(event);
        });

        /**
         * Monitorara alterações no modo de pagamento
         */
        this.appointmentPaymentMethodInput.addEventListener("change", (event) => {
            let value = event.target.value;

            this.buttonFinalStep.disabled = true;
            switch (value) {
                case "local":
                    this.buttonFinalStep.disabled = false;
                    this.appointmentForm.querySelector("[name=payment_method]").value = value;
                    break;
            }
        });
    }

    /**
     * Atualizar as guias e seus elementos de acordo com o passo atual/anterior
     */
    changeAppointmentStepsTab() {
        let oldBsTab = this.appointmentForm.querySelector(`#step${this.appointmentSteps.old}-tab`);
        let currentBsTab = this.appointmentForm.querySelector(`#step${this.appointmentSteps.current}-tab`);

        oldBsTab.disabled = true;
        currentBsTab.disabled = true;
        if (this.appointmentSteps.current > 1) {
            this.buttonPreviowStep.classList.remove("d-none");
        } else {
            this.buttonPreviowStep.classList.add("d-none");
        }

        if (this.appointmentSteps.current == 3) {
            this.buttonCancelStep.classList.remove("d-none");
            this.buttonFinalStep.classList.remove("d-none");
            this.buttonNextStep.classList.add("d-none");
            this.buttonPreviowStep.classList.add("d-none");
        } else {
            this.buttonCancelStep.classList.add("d-none");
            this.buttonFinalStep.classList.add("d-none");
            this.buttonNextStep.classList.remove("d-none");
            this.buttonPreviowStep.classList.remove("d-none");
        }

        (new bootstrap.Tab(currentBsTab)).show();

        this.setContent();
    }

    /**
     * Alterar o conteúdo das guias de acordo com passo atual/anterior
     */
    setContent() {
        switch (this.appointmentSteps.current) {
            case 1:
                this.clearAppointmentList();
                break;
            case 2:
                if (this.appointmentSteps.old !== 3)
                    this.updateAppointmentList();
                break;
            case 3:
                this.getAllData();
                break;
        }
    }

    /**
     * Limpa a lista de agendamentos
     */
    clearAppointmentList() {
        this.appointmentList.innerHTML = "";
        this.appointmentData.appointmentAmount = 1;
        this.appointmentData.list = [];
    }

    /**
     * Atualiza a lista de agendamentos de acordo com a quantidade
     * de agendamentos escolhido
     */
    updateAppointmentList() {
        for (let i = 0; i < this.appointmentAmount.current; i++) {
            let clone = this.appointmentForm.querySelector(".model .schedule-list-item").cloneNode(true);

            clone.setAttribute("id", `appointment_${(i + 1)}`);
            clone.querySelector(".title").innerHTML = "Agendamento " + (i + 1);
            clone.querySelector(".jsDatesList").setAttribute("name", "date_" + (i + 1));
            clone.querySelector(".jsServicesList").setAttribute("name", "service_" + (i + 1));

            this.appointmentData.list.push({
                id: `appointment_${(i + 1)}`,
                date: null,
                service: null,
            });
            this.appointmentList.append(clone);
        }
    }

    /**
     * Obtém os dados relacionados aos agendamentos e os adiciona
     * no objeto de dados(appointmentData)
     */
    getAllData() {
        this.appointmentData.list.forEach((item) => {
            let inputArea = this.appointmentForm.querySelector("#" + item.id);

            if (!inputArea) return;

            item.date = inputArea.querySelector(".jsDatesList")?.value;
            item.service = inputArea.querySelector(".jsServicesList")?.value;
        })

        this.processData();
    }

    /**
     * Fazer aqui o processamento dos dados, como enviar ao servidor, validar, salvar informação dos agendamentos, calcular preços finais
     * para então mostrar formas de pagamentos
     */
    processData() {
        let bkdrop = this.appointmentForm.querySelector(".jsBackdrop");

        bkdrop.classList.remove("d-none");

        // apenas para simular envio e processamento
        setTimeout(() => {
            console.log(this.appointmentData);

            this.appointmentForm.querySelector("[name=appointment_id]").value = 12902;

            bkdrop.classList.add("d-none");
        }, 2000);
    }

    /**
     * Aqui finalmente as informações finais serão enviadas ao servidor,
     * como o id do agendamento e forma de pagamento.
     * 
     * @param {*} event 
     */
    submitForm(event) {
        let data = new FormData(event.target);

        console.log("Finalizar", data.get("appointment_id"), data.get("payment_method"));
    }

    /**
     * Cancelamento de agendamento: tomar os devido processos(exclusão do agendamento do servidor, etc)
     * @returns 
     */
    cancelAppointment() {
        let appointmentId = this.appointmentForm.querySelector("[name=appointment_id]").value;

        if (!window.confirm("O cancelamento não pode ser desfeito, continuar?")) return;

        console.log("Cancelar agendamento: ", appointmentId);
    }
}