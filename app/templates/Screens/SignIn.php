<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container justify-content-center align-items-center">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/5386489/pexels-photo-5386489.jpeg?auto=compress"
                        alt="login" class="login-card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <a href="./login.php" class="btn btn-link"><i class="fas fa-arrow-left"></i> Voltar</a>

                        <p class="h1">Desculpe, mas...</p>

                        <p class="login-card-description">Crie um novo usuário</p>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="name" class="sr-only">Digite seu nome</label>
                                <input type="text" name="name" id="name" placeholder="João da Silva"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="sr-only">Data de Nascimento</label>
                                <input type="date" name="bornDate" id="bornDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Digite seu e-mail</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="email@dominio.com">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Digite sua senha</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="***********">
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                value="Cadastrar">             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>