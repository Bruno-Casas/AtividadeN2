<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container justify-content-center align-items-center">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="./home.php" class="btn btn-link"><i class="fas fa-arrow-left"></i> Voltar</a>

                        <p class="login-card-description">Contribuir com uma nova frase</p>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="phrase">Digite sua frase</label>
                                <textarea class="form-control" id="phrase" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="category">Escolha a categoria</label>
                                <select class="form-control" id="category">
                                    <option>Nenhuma</option>
                                    <option>Engraçada</option>
                                    <option>Para o trabalho</option>
                                    <option>Familiar</option>
                                </select>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="anonymos">
                                <label class="form-check-label" for="anonymos">
                                    Quero ficar no anonimato
                                </label>
                            </div>

                            <input name="newPhrase" id="newPhrase" class="btn btn-block login-btn mb-4" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/163084/typewriter-vintage-old-vintage-typewriter-163084.jpeg" alt="login" class="login-card-img">
                </div>
            </div>
        </div>
    </div>
</main>