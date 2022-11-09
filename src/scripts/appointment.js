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
    }

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
    }

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

        (new bootstrap.Tab(currentBsTab)).show();

        this.setContent();
    }

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

    clearAppointmentList() {
        this.appointmentList.innerHTML = "";
        this.appointmentData.appointmentAmount = 1;
        this.appointmentData.list = [];
    }

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

    getAllData() {
        this.appointmentData.list.forEach((item) => {
            let inputArea = this.appointmentForm.querySelector("#" + item.id);

            if (!inputArea) return;

            item.date = inputArea.querySelector(".jsDatesList")?.value;
            item.service = inputArea.querySelector(".jsServicesList")?.value;
        })

        this.appointmentForm.querySelector(".jsShowData").value = JSON.stringify(this.appointmentData, null, 5);
    }
}