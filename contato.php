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
    <?php include("include/theme.php"); ?>

    <style>
        .border-dashed {
            --bs-border-style: dashed;
        }

        @media (min-width: 992px) {
            .rounded-lg-3 {
                border-radius: .3rem;
            }
        }


        $container-max-widths: (
            sm: 540px,
            md: 720px,
            lg: 960px,
            xl: 1140px,
            xxl: 1320px
        );
        /* Thin out the marketing headings */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
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
        <?php
        include("include/topo.php");
        ?>

        <!-- Corpo do portifolio-->
        <div class="b-example-divider"></div>
        <div class="container my-5">
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <h1 class="text-body-emphasis">Dados para Contato</h1>
                <p class="lead">
                    Telefone: (34) 99147-7961
                    E-mail: miqueias848@gmail.com
                    Localização: Conceição das Alagoas – Minas Gerais, Brasil
                </p>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">
                Enviar
            </button>
        </div>

        <!-- Roda pé -->
        <?php
        include("include/roda_pe.php");
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>