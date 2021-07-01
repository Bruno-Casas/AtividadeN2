<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container justify-content-center align-items-center">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="https://images.pexels.com/photos/3350730/pexels-photo-3350730.jpeg?auto=compress" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">

                        <p class="h1">Desculpe, mas...</p>

                        <p class="login-card-description">Faça login</p>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="email" class="sr-only">Digite seu e-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Seu e-mail aqui">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Digite sua senha</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Sua senha aqui">
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                        </form>
                        <p class="login-card-footer-text"> Ainda não possui acesso? <a href="./pages/signin.php" class="text-reset">Clique aqui</a> e crie agora mesmo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>