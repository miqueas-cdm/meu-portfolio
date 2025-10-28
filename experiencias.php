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
                    <!-- START THE FEATURETTES -->
                    <hr class="featurette-divider" />
                        <div class="row featurette">
                             <div class="col-md-7">
                                <h2 class="featurette-heading fw-normal lh-1">
                                DevFest Triângulo 2024 
                                <span class="text-body-secondary"> Google Developers</span>
                                </h2><br>
                                <p class="lead">
                                Uma experiência surreal e inspiradora, marcada por palestras voltadas à Tecnologia da Informação e muita troca de conhecimento. O evento proporcionou networking com profissionais da área, novas ideias e uma visão mais ampla sobre as tendências e inovações tecnológicas do mercado.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img 
                                    src="imagens/dev_feste.jpg" 
                                    alt="Visita Técnica" 
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
                                    width="500" 
                                    height="500"
                                >
                            </div>
                            </div>
                            <hr class="featurette-divider" />
                            <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading fw-normal lh-1">
                                AgriShow 2025
                                <span class="text-body-secondary">Ribeirão Preto (SP)</span>
                                </h2><br>
                                <p class="lead">
                                    Uma vivência incrível no maior evento do agronegócio da América Latina. A AgriShow 2025 foi uma oportunidade de aprofundar conhecimentos sobre máquinas agrícolas, tecnologia e inovações do setor, além de ampliar significativamente o network com profissionais e empresas do Agro.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img 
                                    src="imagens/agrishow.jpg" 
                                    alt="Visita Técnica" 
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
                                    width="500" 
                                    height="500"
                                >
                            </div>
                            </div>
                            <hr class="featurette-divider" />
                            <div class="row featurette">
                            <div class="col-md-7">
                                <h2 class="featurette-heading fw-normal lh-1">
                              Visita Técnica
                                <span class="text-body-secondary">Datacenter Algar Telecom</span>
                                </h2><br>
                                <p class="lead">
                                Uma experiência única e enriquecedora. Durante a visita técnica ao Datacenter da Algar Telecom, pude conhecer de perto a estrutura, os processos operacionais e as tecnologias envolvidas na gestão de grandes redes de comunicação e infraestrutura de TI — uma imersão que reforçou ainda mais meu interesse pela área de redes e telecomunicações.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img 
                                    src="imagens/algar.jpg" 
                                    alt="Visita Técnica" 
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
                                    width="500" 
                                    height="500"
                                >
                            </div>
                        </div>
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