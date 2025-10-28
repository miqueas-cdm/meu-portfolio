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
                    <h1 class="text-body-emphasis">Hard Skills & Certificações</h1>
                    <p class="lead">
                    As minhas Hard Skills e Certificações refletem uma combinação estratégica de especialização em Tecnologia da Informação (TI) e experiência operacional no Agronegócio. No campo da TI, minhas competências abrangem WordPress , Redes LAN-WAN , e um foco especializado em infraestrutura de redes , com prática em tecnologias como Mikrotik, Ubiquiti e FTTx. Eu adquiri a habilidade de realizar diagnóstico, análise de logs, monitoramento , e configuração e manutenção de equipamentos de rede , utilizando ferramentas como WinBox e RouterOS. Estas habilidades técnicas foram formalizadas e reforçadas com as certificações de Curso de MikroTik Grátis e Curso de Redes Grátis 2.0. Em paralelo, desenvolvi um conjunto de habilidades específicas no Agronegócio, incluindo a classificação de grãos (avaliação de umidade, impurezas e outros aspectos) e gerenciamento eficiente de estoque. Essa formação dupla me posiciona como o elo entre a necessidade operacional do Agro e as soluções tecnológicas de TI , com o objetivo de otimizar processos no campo.
                    </p>
                </div> 
            </div>
        </div>   

        <div class="b-example-divider"></div>
            <div class="container px-4 py-5" id="icon-grid">
                <h2 class="pb-2 border-bottom">Certificações</h2>
                <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5"
                >
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
            
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                       Curso Superior de Tecnologia (CST) em Agrocomputação
                    </h3>
                    <p>
                        Instituição: Fazu Uberaba. Período: agosto de 2024 - dezembro de 2026. Foco em integrar a Tecnologia da Informação com o Agronegócio, especializando-se em análise de dados, topografia digital e otimização de processos no campo.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#cpu-fill"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        Técnico em Administração e Negócios
                    </h3>
                    <p>
                        Instituição: Senac Minas. Período: novembro de 2021 - agosto de 2023. Base sólida em gestão e administração, englobando áreas como faturamento, análise de crédito, cobrança e emissão de notas fiscais.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#calendar3"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        DevFest Triângulo 2024
                    </h3>
                    <p>
                        Participação em evento focado em desenvolvimento de software e inovações em tecnologia. Atualização em tendências de mercado, networking e imersão em novas ferramentas de programação e desenvolvimento.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#home"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        Fábrica de Criatividade.
                    </h3>
                    <p>
                        Certificação que visa o aprimoramento em técnicas de brainstorming, pensamento criativo (design thinking) e metodologias ágeis para a resolução de problemas e desenvolvimento de soluções inovadoras.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#speedometer2"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        Photoshop - Composição de Imagens Cinemagraph
                    </h3>
                    <p>
                        Treinamento em manipulação de imagens, composição digital e criação de conteúdo visual dinâmico (cinemagraphs). Habilidade aplicada na produção de materiais para comunicação e marketing digital..
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#toggles2"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        Curso de Redes Grátis 2.0
                    </h3>
                    <p>
                        Certificação que solidifica o conhecimento em infraestrutura de TI e suporte de redes. Oferece a base para o diagnóstico de problemas de conectividade, monitoramento e otimização de redes LAN-WAN.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#geo-fill"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        WordPress
                    </h3>
                    <p>
                        Competência chave para a gestão e desenvolvimento de sites. Habilidade essencial para a criação e manutenção de presença digital, complementando a base de infraestrutura de TI.
                    </p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg
                    class="bi text-body-secondary flex-shrink-0 me-3"
                    width="1.75em"
                    height="1.75em"
                    aria-hidden="true"
                    >
                    <use xlink:href="#tools"></use>
                    </svg>
                    <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">
                        Administração de Servidores e Serviços de Rede
                    </h3>
                    <p>
                        Treinamento essencial para a gestão eficiente de infraestrutura de TI. Inclui conhecimentos sobre configuração, segurança e manutenção de sistemas operacionais de servidor e serviços de rede cruciais.
                    </p>
                    </div>
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