<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - Miqueas Silva Tavares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Incluir sistema de tema -->
    <!-- Incluir sistema de tema -->
    <?php
    include("include/theme.php");
    require_once("include/db.php");
    $stmt = $pdo->query("SELECT * FROM projetos ORDER BY ordem ASC");
    $projetos = $stmt->fetchAll();
    ?>

    <style>
        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 12px var(--shadow-color);
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px var(--shadow-color);
            border-color: var(--btn-primary-bg);
        }

        .project-header {
            padding: 24px;
            background: linear-gradient(135deg, rgba(var(--btn-primary-bg), 0.1), transparent);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .project-body {
            padding: 24px;
            flex-grow: 1;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--text-primary);
        }

        .project-description {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .project-footer {
            padding: 20px 24px;
            border-top: 1px solid var(--border-color);
            background: var(--bg-secondary);
        }

        .tech-tag {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-right: 8px;
            margin-bottom: 8px;
            background: var(--btn-primary-bg);
            color: var(--btn-primary-text);
            font-weight: 500;
        }

        .btn-github {
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .btn-github:hover {
            opacity: 0.8;
        }

        [data-theme="dark"] .project-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <!-- Cabeçalho -->
        <?php include("include/topo.php"); ?>

        <!-- Conteúdo Principal -->
        <main class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-down">
                    <h1 class="display-4 fw-bold text-body-emphasis mb-3">Meus Projetos</h1>
                    <p class="lead text-secondary mx-auto" style="max-width: 700px;">
                        Uma vitrine das minhas criações técnicas, focadas em automação, infraestrutura e desenvolvimento
                        web. Confira meu trabalho no GitHub.
                    </p>
                </div>

                <div class="row g-4">
                    <?php
                    $delay = 100;
                    foreach ($projetos as $proj):
                        $techs = explode(',', $proj['tecnologias']);
                        $statusClass = 'bg-primary';
                        if (stripos($proj['status'], 'Desenvolvimento') !== false)
                            $statusClass = 'bg-warning text-dark';
                        if (stripos($proj['status'], 'Online') !== false || stripos($proj['status'], 'Concluído') !== false)
                            $statusClass = 'bg-success';
                        ?>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <div class="project-card">
                                <div class="project-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-primary">
                                        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z" />
                                        <path d="M3 9V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4" />
                                    </svg>
                                    <span class="badge rounded-pill <?= $statusClass ?>"><?= $proj['status'] ?></span>
                                </div>
                                <div class="project-body">
                                    <h3 class="project-title"><?= $proj['titulo'] ?></h3>
                                    <p class="project-description">
                                        <?= $proj['descricao'] ?>
                                    </p>
                                    <div class="tech-stack">
                                        <?php foreach ($techs as $tech): ?>
                                            <span class="tech-tag"><?= trim($tech) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="project-footer">
                                    <a href="<?= $proj['link_github'] ?>" target="_blank"
                                        class="btn btn-outline-primary btn-sm btn-github <?= ($proj['link_github'] == '#' ? 'disabled' : '') ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                                            <path d="M9 18c-4.51 2-5-2-7-2" />
                                        </svg>
                                        <?= ($proj['link_github'] == '#' ? 'Em breve' : 'Ver no GitHub') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 100;
                    endforeach;
                    ?>
                </div>

                <!-- Call to action: GitHub link direct -->
                <div class="mt-5 pt-5 text-center" data-aos="zoom-in">
                    <p class="text-secondary">Deseja ver mais códigos?</p>
                    <a href="https://github.com/miqueas-cdm" target="_blank"
                        class="btn btn-dark btn-lg px-5 py-3 rounded-pill shadow">
                        Acesse meu GitHub Completo
                    </a>
                </div>
            </div>
        </main>

        <!-- Rodapé -->
        <?php include("include/roda_pe.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>