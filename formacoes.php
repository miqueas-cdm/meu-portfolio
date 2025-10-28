<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miqueas Silva Tavaes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Incluir sistema de tema -->
        <?php include("include/theme.php"); ?>
    <style>
        .border-dashed { --bs-border-style: dashed; }

        @media (min-width: 992px) {
        .rounded-lg-3 { border-radius: .3rem; }
        }
        

        $container-max-widths: (
        sm: 540px,
        md: 720px,
        lg: 960px,
        xl: 1140px,
        xxl: 1320px
        );  
        .container {
        max-width: 960px;
        }

        .icon-link > .bi {
        width: .75em;
        height: .75em;
        }

        /*
        * Custom translucent site header
        */

        .site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
        }
        .site-header a {
        color: #8e8e8e;
        transition: color .15s ease-in-out;
        }
        .site-header a:hover {
        color: #fff;
        text-decoration: none;
        }

        /*
        * Dummy devices (replace them with your own or something else entirely!)
        */

        .product-device {
        position: absolute;
        right: 10%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        transform: rotate(30deg);
        }

        .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
        background-color: rgba(255, 255, 255, .1);
        border-radius: 5px;
        }

        .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
        }


        /*
        * Extra utilities
        */

        .flex-equal > * {
        flex: 1;
        }
        @media (min-width: 768px) {
        .flex-md-equal > * {
            flex: 1;
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
                <!--Formações -->
                      <div class="b-example-divider"></div>
                            <div class="px-4 pt-5 my-5 text-center border-bottom">
                                <h1 class="display-4 fw-bold text-body-emphasis">
                                Conectando o Campo à Tecnologia
                                </h1>
                                <div class="col-lg-6 mx-auto">
                                    <p class="lead mb-4">
                                    Tenho experiência nas áreas de redes e infraestrutura de TI, atuando com Mikrotik, Ubiquiti e FTTx. Já passei por diferentes setores, como classificação de grãos e almoxarifado, o que me deu uma visão ampla de processos e trabalho em equipe. Hoje, busco unir a tecnologia e o agronegócio pra otimizar operações e trazer mais inovação pro campo.
                                    </p>
                                </div>
                            </div>

                     </div>
                <!--Empresas--> 
                <div class="container-xxl">
                          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                                <div
                                class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
                                >
                                <div class="my-3 py-3">
                                    <h2 class="display-5">Analista de Redes e Comunicação I </h2>
                                    <p class="lead">Atuo com infraestrutura de redes utilizando Mikrotik, Ubiquiti e FTTx, realizando suporte técnico, diagnóstico de conectividade, configuração de equipamentos e monitoramento de rede. Essa função tem fortalecido minha experiência em tecnologia e telecomunicações, além de aprimorar minha visão estratégica sobre conectividade e eficiência de sistemas.</p>
                                    <br><h4>Play Soluções (2024 - atual)</h4>
                                </div>
                                <div
                                    class="bg-body-tertiary shadow-sm mx-auto"
                                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0"
                                     <img src="imagens/logotipo" class="img-fluid h-100" style="border-radius: 21px 21px 0 0; object-fit: cover; width: 100%;" alt="Logotipo da Empresa">
                                </div>
                                </div>
                                <div
                                class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"
                                >
                                <div class="my-3 p-3">
                                    <h2 class="display-5">Classificador de Grãos Almoxarife</h2>
                                    <p class="lead">Desempenhei funções nas áreas de classificação de grãos e gestão de estoque, realizando análises de qualidade, controle de materiais e relatórios de produção. Essa experiência me proporcionou organização, atenção aos detalhes e resiliência, além de ampliar minha compreensão sobre o setor agroindustrial e seus processos operacionais.</p>
                                    <br><h4>Ouro Safra (2023 - 2024)</h4>
                                </div>
                                <div
                                    class="bg-dark shadow-sm mx-auto"
                                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0"
                                ></div>
                                </div>
                            </div>
                    </div>

         <!-- Roda pé -->
            <?php
                include("include/roda_pe.php");
            ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>