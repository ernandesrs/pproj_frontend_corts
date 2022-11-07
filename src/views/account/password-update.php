<form action="client.php">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password"
                    placeholder="Nova senha">
                <label for="password">Nova senha</label>
            </div>
        </div>

        <div class="col-12 col-md-10 mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password_confirmation"
                    placeholder="Confirmar nova senha">
                <label for="password_confirmation">Confirmar nova senha</label>
            </div>
        </div>

        <div class="col-12 col-md-10 d-flex justify-content-center align-items-center">
            <button class="btn btn-primary" type="submit">
                Atualizar senha
            </button>
        </div>
    </div>
</form>