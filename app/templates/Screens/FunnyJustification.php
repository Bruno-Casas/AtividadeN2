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
                <div class="d-flex justify-content-between">
                    <h2>Desculpas Engraçadas</h2>

                </div>
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

                        <?php if (!empty($desculpas)) { ?>
                            <!-- Aqui que será montada a tabela com a relação de anúncios!! -->
                            <?php foreach ($desculpas as $a) { ?>
                                <tr>
                                    <td><?php echo $a['frase']; ?></td>
                                    <td>
                                        <?php
                                        if ($a['user_void'] == true) {
                                            echo "Anônimo";
                                        } else {
                                            echo $a['usuario_id'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <script>
                                            function copyToClipboard() {
                                                let temp = documente.createElement("input")
                                                temp.value = <?php echo $a['frase']; ?>

                                                document.body.appendChild(temp)

                                                try {
                                                    temp.select();
                                                    document.execCommand("copy");
                                                    alert("Copiado com sucesso")
                                                } catch (error) {
                                                    alert("Não foi possível copiar")
                                                }

                                                document.body.removeChild(temp)
                                            }
                                        </script>
                                        <button onclick="copyToClipboard()" type="button" class="btn bbtn-outline-primary btn-sm"><i class="far fa-copy"></i> copiar</button>
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