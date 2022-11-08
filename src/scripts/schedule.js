class Schedule {
    constructor(form) {
        this.scheduleForm = document.querySelector(form);
    }

    init() {
        if (!this.scheduleForm) return;
        console.log(this.scheduleForm);
    }
}