<form action="client.php">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 mb-4">
            <div class="form-floating">
                <input type="email" class="form-control" id="email"
                    placeholder="Seu email cadastrado">
                <label for="email">Email cadastrado</label>
            </div>
        </div>

        <div class="col-12 col-md-10 d-flex align-items-center">
            <a class="btn text-primary" href="account.php?action=login">Login</a>
            <span class="ms-auto"></span>
            <button class="btn btn-primary" type="submit">
                Recuperar senha
            </button>
        </div>
    </div>
</form>