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

                <p class="h4 text-center"><?php echo $userName ?></p>
                <p class="text-center"><?php echo $email ?></p>

                <div class="d-flex justify-content-center">
                    <a href="./logout.php" class="btn btn-outline-danger">Sair</a>
                </div>

            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <a href="./home.php" class="btn btn-link"><i class="fas fa-arrow-left"></i> Voltar</a>

                    <a href="./newphrase.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-plus"></i> Nova frase</a>
                </div>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Frase</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius ex laborum numquam natus
                                consectetur odio.</td>
                            <td>Mark Ruffalo</td>
                            <td>
                                <button type="button" class="btn bbtn-outline-primary btn-sm"><i class="far fa-copy"></i> copiar</button>
                            </td>
                        </tr> -->

                        <?php if (!empty($desculpas)) { ?>
                            <!-- Aqui que será montada a tabela com a relação de anúncios!! -->
                            <?php foreach ($desculpas as $a) { ?>
                                <tr>
                                    <td><?php echo $a['frase']; ?></td>
                                    <td>
                                        <script>
                                            function editDesculpa() {
                                                alert("Não implementado")
                                            }

                                            function deleteDesculpa() {
                                                alert("Não implementado")
                                            }
                                        </script>
                                        <div class="d-flex justify-content-around">
                                            <a href="./updatephrase.php?id=<?php echo $a['id']; ?>" class="btn bbtn-outline-primary">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="./deletedesculpa.php?id=<?php echo $a['id']; ?>" class="btn bbtn-outline-primary">
                                                <i class="far fa-trash-alt text-danger"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>