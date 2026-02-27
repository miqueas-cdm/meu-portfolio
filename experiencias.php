<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miqueas Silva Tavaes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Incluir sistema de tema -->
    <?php
    include("include/theme.php");
    require_once("include/db.php");
    $stmt = $pdo->query("SELECT * FROM experiencias ORDER BY ordem ASC");
    $experiencias = $stmt->fetchAll();
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
    </style>
</head>

<body>
    <div class="container-xl">
        <!-- Cabeçalho -->
        <?php
        include("include/topo.php");
        ?>

        <!-- Corpo do portifolio-->
        <div>
            <!--Experiencias -->
            <?php
            $count = 0;
            foreach ($experiencias as $exp):
                $orderClass = ($count % 2 != 0) ? 'order-md-2' : '';
                $imgOrderClass = ($count % 2 != 0) ? 'order-md-1' : '';
                ?>
                <hr class="featurette-divider" />
                <div class="row featurette" data-aos="fade-up">
                    <div class="col-md-7 <?= $orderClass ?>">
                        <h2 class="featurette-heading fw-normal lh-1">
                            <?= $exp['titulo'] ?>
                            <?php if ($exp['subtitulo']): ?>
                                <span class="text-body-secondary"> <?= $exp['subtitulo'] ?></span>
                            <?php endif; ?>
                        </h2><br>
                        <p class="lead">
                            <?= $exp['descricao'] ?>
                        </p>
                    </div>
                    <div class="col-md-5 <?= $imgOrderClass ?>">
                        <img src="<?= $exp['imagem'] ?>" alt="<?= $exp['titulo'] ?>"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                            height="500">
                    </div>
                </div>
                <?php
                $count++;
            endforeach;
            ?>
            <hr class="featurette-divider" />
            <!-- /END THE FEATURETTES -->
        </div>


        <!-- Roda pé -->
        <?php
        include("include/roda_pe.php");
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>