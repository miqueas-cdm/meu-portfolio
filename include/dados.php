<?php
// include/dados.php
// Edite as informações abaixo para atualizar o site.

$dados = [
    "configuracoes" => [
        "trajetoria_titulo" => "Minha Trajetória",
        "trajetoria_texto" => "Sou Miqueas Silva Tavares, natural de Alagoas, mas ainda pequeno vim com meus pais para Minas Gerais, lugar que me acolheu e onde construí minha vida. Hoje moro em Conceição das Alagoas, uma cidade que se tornou o nosso lar há mais de dez anos — um lugar tranquilo, onde fiz grandes amizades e onde aprendi muito sobre trabalho, família e valores. Foi aqui que cresci, amadureci e comecei a trilhar meu caminho profissional, sempre buscando aprender e evoluir em cada nova oportunidade.",
        "trajetoria_imagem" => "imagens/fazu_miqueas.jpg",
        "footer_texto" => "Miqueas Silva Tavares"
    ],
    "experiencias" => [
        [
            "titulo" => "DevFest Triângulo 2024 Google Developers",
            "subtitulo" => "Google Developers",
            "descricao" => "Uma experiência surreal e inspiradora, marcada por palestras voltadas à Tecnologia da Informação e muita troca de conhecimento.",
            "imagem" => "imagens/dev_feste.jpg",
            "ordem" => 0
        ],
        [
            "titulo" => "AgriShow 2025 Ribeirão Preto (SP)",
            "subtitulo" => "Ribeirão Preto (SP)",
            "descricao" => "Uma vivência incrível no maior evento do agronegócio da América Latina. Oportunidade de aprofundar conhecimentos sobre máquinas agrícolas e tecnologia.",
            "imagem" => "imagens/agrishow.jpg",
            "ordem" => 1
        ],
        [
            "titulo" => "Visita Técnica Datacenter Algar Telecom",
            "subtitulo" => "Datacenter Algar Telecom",
            "descricao" => "Imersão na estrutura e processos operacionais de gestão de grandes redes de comunicação e infraestrutura de TI.",
            "imagem" => "imagens/algar.jpg",
            "ordem" => 2
        ]
    ],
    "certificacoes" => [
        // Exemplo:
        // [
        //     "titulo" => "Certificado Mikrotik MTCNA",
        //     "descricao" => "Certificação em redes Mikrotik",
        //     "instituicao" => "Mikrotik",
        //     "data_obtencao" => "2023",
        //     "ordem" => 0
        // ]
    ],
    "projetos" => [
        [
            "titulo" => "Meu Portfólio Premium",
            "descricao" => "Este site que você está navegando! Desenvolvido com PHP, Bootstrap e um sistema de temas dinâmico.",
            "tecnologias" => "PHP, Bootstrap 5, CSS3",
            "link_github" => "https://github.com/miqueas-cdm",
            "status" => "Online",
            "ordem" => 0
        ],
        [
            "titulo" => "Infraestrutura como Código",
            "descricao" => "Scripts e automações para configuração de redes Mikrotik e infraestrutura FTTx de forma escalável.",
            "tecnologias" => "Scripts, Networking, Automação",
            "link_github" => "#",
            "status" => "Em Desenvolvimento",
            "ordem" => 1
        ],
        [
            "titulo" => "Monitoramento Real-time",
            "descricao" => "Dashboard para visualização de métricas de rede em tempo real, utilizando APIs de monitoramento.",
            "tecnologias" => "API, Dashboard, Monitoring",
            "link_github" => "https://github.com/miqueas-cdm",
            "status" => "Concluído",
            "ordem" => 2
        ]

    ]
];
