<?php
// include/db.php
$dbPath = __DIR__ . '/../database/portfolio.sqlite';

try {
    $pdo = new PDO("sqlite:" . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Criar tabelas se não existirem
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        usuario TEXT UNIQUE NOT NULL,
        senha TEXT NOT NULL
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS configuracoes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        chave TEXT UNIQUE NOT NULL,
        valor TEXT
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS experiencias (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT NOT NULL,
        subtitulo TEXT,
        descricao TEXT,
        imagem TEXT,
        ordem INTEGER DEFAULT 0
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS certificacoes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT NOT NULL,
        descricao TEXT,
        instituicao TEXT,
        data_obtencao TEXT,
        ordem INTEGER DEFAULT 0
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS projetos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT NOT NULL,
        descricao TEXT,
        tecnologias TEXT,
        link_github TEXT,
        status TEXT,
        ordem INTEGER DEFAULT 0
    )");

    // Sincronizar com include/dados.php
    if (file_exists(__DIR__ . '/dados.php')) {
        require_once(__DIR__ . '/dados.php');

        // Sincronizar Configurações
        if (isset($dados['configuracoes'])) {
            foreach ($dados['configuracoes'] as $chave => $valor) {
                $stmt = $pdo->prepare("INSERT INTO configuracoes (chave, valor) VALUES (?, ?) ON CONFLICT(chave) DO UPDATE SET valor = excluded.valor");
                $stmt->execute([$chave, $valor]);
            }
        }

        // Sincronizar Experiências
        if (isset($dados['experiencias'])) {
            $pdo->exec("DELETE FROM experiencias");
            foreach ($dados['experiencias'] as $exp) {
                $stmt = $pdo->prepare("INSERT INTO experiencias (titulo, subtitulo, descricao, imagem, ordem) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$exp['titulo'], $exp['subtitulo'], $exp['descricao'], $exp['imagem'], $exp['ordem']]);
            }
        }

        // Sincronizar Certificações
        if (isset($dados['certificacoes'])) {
            $pdo->exec("DELETE FROM certificacoes");
            foreach ($dados['certificacoes'] as $cert) {
                $stmt = $pdo->prepare("INSERT INTO certificacoes (titulo, descricao, instituicao, data_obtencao, ordem) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$cert['titulo'], $cert['descricao'], $cert['instituicao'], $cert['data_obtencao'], $cert['ordem']]);
            }
        }

        // Sincronizar Projetos
        if (isset($dados['projetos'])) {
            $pdo->exec("DELETE FROM projetos");
            foreach ($dados['projetos'] as $proj) {
                $stmt = $pdo->prepare("INSERT INTO projetos (titulo, descricao, tecnologias, link_github, status, ordem) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$proj['titulo'], $proj['descricao'], $proj['tecnologias'], $proj['link_github'], $proj['status'], $proj['ordem']]);
            }
        }
    }

} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>