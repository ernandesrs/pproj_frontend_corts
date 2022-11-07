<form action="account.php?action=account-created">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="first_name"
                    placeholder="Seu nome">
                <label for="first_name">Nome</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="last_name"
                    placeholder="Seu Sobrenome">
                <label for="last_name">Sobrenome</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="email"
                    placeholder="Seu email">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="phone"
                    placeholder="Seu telefone">
                <label for="phone">Número</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password"
                    placeholder="Sua senha">
                <label for="password">Senha</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password_confirmation"
                    placeholder="Confirmar senha">
                <label for="password_confirmation">Confirmar senha</label>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                    id="promotional_email_accept">
                <label class="form-check-label" for="promotional_email_accept">
                    Eu aceito receber emails promociais
                </label>
            </div>
        </div>

        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">
                Finalizar cadastro
            </button>
        </div>
    </div>
</form>