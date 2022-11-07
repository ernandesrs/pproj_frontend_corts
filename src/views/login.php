<form action="client.php">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-xl-8 mb-4">
            <div class="form-floating">
                <input type="email" class="form-control" id="email"
                    placeholder="Seu email">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="col-12 col-md-10 col-xl-8 mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password"
                    placeholder="Sua senha">
                <label for="password">Senha</label>
            </div>
            <div class="pt-2 text-end">
                <a href="account.php?action=forget">Esquecia a senha</a>
            </div>
        </div>

        <div class="col-12 col-md-10 col-xl-8 mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="remember_me">
                <label class="form-check-label" for="remember_me">
                    Lembre-se de mim
                </label>
            </div>
        </div>

        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">
                Login
            </button>
        </div>
    </div>
</form>