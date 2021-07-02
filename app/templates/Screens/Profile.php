<main class="d-flex min-vh-100 py-3 py-md-0">
    <div class="container">
        <!-- Header -->
        <?php
        include_once "../templates/Components/Header.php";
        ?>
        <!-- Fim Header -->
        <div class="row no-gutters">
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <p style="font-size: 10rem;" class="text-center">
                    <i class="far fa-user-circle"></i>
                </p>

                <p class="h4 text-center">João da Silva</p>
                <p class="text-center">seuemail@mail.com</p>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-danger">Sair</button>
                </div>

            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <a href="./home.php" class="btn btn-link"><i class="fas fa-arrow-left"></i> Voltar</a>
                    
                    <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-plus"></i> Nova frase</a>
                </div>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Frase</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius ex laborum numquam natus
                                consectetur odio.</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <button type="button" class="btn bbtn-outline-primary">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn bbtn-outline-primary">
                                        <i class="far fa-trash-alt text-danger"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>