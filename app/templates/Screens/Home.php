<main class="d-flex min-vh-100 py-3 py-md-0">
    <div class="container">
        <!-- Header -->
        <?php
        include_once "../templates/Components/Header.php";
        ?>
        <!-- Fim Header -->
        <div class="row no-gutters">
            <!-- Menu -->
            <?php
            include_once "../templates/Components/Menu.php";
            ?>
            <!-- Menu -->
            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Frases</th>
                            <th scope="col">Autor</th>
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

                        <script>
                            function copyToClipboard(id) {
                                let input = document.getElementById(id);

                                try {
                                    input.select();
                                    document.execCommand("copy");
                                    alert("Copiado com sucesso")
                                } catch (error) {
                                    alert("Não foi possível copiar")
                                }
                            }
                        </script>

                        <?php if (!empty($desculpas)) { ?>
                            <!-- Aqui que será montada a tabela com a relação de desculpas!! -->
                            <?php foreach ($desculpas as $a) { ?>
                                <tr>
                                    <input type="text" style="display:none" id="<?php echo $a['id']; ?>" value="<?php echo $a['frase']; ?>">
                                    <td><?php echo $a['frase']; ?></td>
                                    <td>
                                        <?php
                                        if ($a['user_void'] == true) {
                                            echo "Anônimo";
                                        } else {
                                            require '../connection/conectaBD.php';

                                            $sql = "SELECT u.nome FROM usuario u WHERE u.id = :userID LIMIT 1";
                                            $stmt = $pdo->prepare($sql);

                                            $dados = array(':userID' => (int)$a['usuario_id']);

                                            if ($stmt->execute($dados)) {
                                                $nome = $stmt->fetchAll();
                                                // var_dump($nome);
                                                echo $nome[0]['nome'];
                                            } else {
                                                echo "Não Encontrado";
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <td>

                                        <button onclick="copyToClipboard(<?php echo $a['id']; ?>)" type="button" class="btn bbtn-outline-primary btn-sm"><i class="far fa-copy"></i> copiar</button>
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