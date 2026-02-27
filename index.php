<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miqueas Silva Tavares - Portfólio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Incluir sistema de tema e banco -->
    <?php
    include("include/theme.php");
    require_once("include/db.php");

    // Buscar configurações
    $stmt = $pdo->query("SELECT chave, valor FROM configuracoes");
    $config = [];
    foreach ($stmt->fetchAll() as $row) {
        $config[$row['chave']] = $row['valor'];
    }

    // Buscar experiências para o destaque
    $stmtExp = $pdo->query("SELECT * FROM experiencias ORDER BY ordem ASC LIMIT 3");
    $experiencias = $stmtExp->fetchAll();
    ?>

    <style>
        .border-dashed {
            --bs-border-style: dashed;
        }

        @media (min-width: 992px) {
            .rounded-lg-3 {
                border-radius: .3rem;
            }
        }

        /* RESPONSIVE CSS */
        @media (min-width: 40em) {
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <!-- Cabeçalho -->
        <?php include("include/topo.php"); ?>

        <!-- Corpo do portfólio -->
        <div>
            <!-- Minha Trajetória -->
            <div class="container my-5" data-aos="fade-up">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">
                            <?= $config['trajetoria_titulo'] ?? 'Minha Trajetória' ?>
                        </h1><br><br>
                        <p class="lead">
                            <?= $config['trajetoria_texto'] ?? '' ?>
                        </p>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-lg-3"
                            src="<?= $config['trajetoria_imagem'] ?? 'imagens/fazu_miqueas.jpg' ?>"
                            alt="Miqueas Silva Tavares" width="500" />
                    </div>
                </div>
            </div>

            <div class="container marketing">
                <div class="row">
                    <?php
                    $delay = 100;
                    foreach ($experiencias as $exp):
                        ?>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <img src="<?= $exp['imagem'] ?>" alt="<?= $exp['titulo'] ?>"
                                class="bd-placeholder-img rounded-circle" width="140" height="140" />
                            <h2 class="fw-normal"><?= $exp['titulo'] ?></h2>
                            <p><?= $exp['descricao'] ?></p>
                            <p>
                                <a class="btn btn-secondary" href="experiencias.php">Ver detalhes &raquo;</a>
                            </p>
                        </div>
                        <?php
                        $delay += 100;
                    endforeach;
                    ?>
                </div>
            </div>

            <!-- Formações -->
            <div class="b-example-divider"></div>
            <div class="px-4 pt-5 my-5 text-center border-bottom" data-aos="fade-up">
                <h1 class="display-4 fw-bold text-body-emphasis">
                    Conectando o Campo à Tecnologia
                </h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        Tenho experiência nas áreas de redes e infraestrutura de TI, atuando com Mikrotik, Ubiquiti e
                        FTTx. Já passei por diferentes setores, como classificação de grãos e almoxarifado, o que me deu
                        uma visão ampla de processos e trabalho em equipe. Hoje, busco unir a tecnologia e o agronegócio
                        pra otimizar operações e trazer mais inovação pro campo.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                        <a href="formacoes.php" class="btn btn-primary btn-lg px-4 me-sm-3" role="button">
                            Minha Caminhada
                        </a>
                    </div>
                </div>
                <div class="overflow-hidden" style="max-height: 50vh">
                    <div class="container px-5">
                        <img src="imagens/agrishow.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="AgriShow"
                            width="700" height="500" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <?php include("include/roda_pe.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>