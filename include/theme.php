<!-- include/theme.php -->
<style>
    :root {
        /* Tema Light (padrão) */
        --bg-primary: #ffffff;
        --bg-secondary: #f8f9fa;
        --text-primary: #212529;
        --text-secondary: #6c757d;
        --border-color: #dee2e6;
        --shadow-color: rgba(0, 0, 0, 0.15);
        --card-bg: #ffffff;
        --btn-primary-bg: #0d6efd;
        --btn-primary-text: #ffffff;
        --btn-secondary-bg: #6c757d;
        --btn-secondary-text: #ffffff;
    }

    [data-theme="dark"] {
        /* Tema Dracula (VS Code) */
        --bg-primary: #282a36;
        --bg-secondary: #1e1f29;
        --text-primary: #f8f8f2;
        --text-secondary: #6272a4;
        --border-color: #44475a;
        --shadow-color: rgba(0, 0, 0, 0.5);
        --card-bg: #21222c;
        --btn-primary-bg: #bd93f9;
        --btn-primary-text: #282a36;
        --btn-secondary-bg: #6272a4;
        --btn-secondary-text: #f8f8f2;
    }

    /* Aplicar cores do tema */
    body {
        background-color: var(--bg-primary);
        color: var(--text-primary);
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .container-xxl {
        background-color: var(--bg-primary);
    }

    .text-body-emphasis {
        color: var(--text-primary) !important;
    }

    .lead {
        color: var(--text-secondary);
    }

    .border {
        border-color: var(--border-color) !important;
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem var(--shadow-color) !important;
    }

    .rounded-3 {
        background-color: var(--card-bg);
    }

    .bg-body-tertiary {
        background-color: var(--bg-secondary) !important;
    }

    /* Botões */
    .btn-primary {
        background-color: var(--btn-primary-bg);
        border-color: var(--btn-primary-bg);
        color: var(--btn-primary-text);
    }

    .btn-primary:hover {
        background-color: var(--btn-primary-bg);
        opacity: 0.9;
        border-color: var(--btn-primary-bg);
    }

    .btn-secondary {
        background-color: var(--btn-secondary-bg);
        border-color: var(--btn-secondary-bg);
        color: var(--btn-secondary-text);
    }

    .btn-secondary:hover {
        background-color: var(--btn-secondary-bg);
        opacity: 0.9;
        border-color: var(--btn-secondary-bg);
    }

    /* Cards e containers */
    .card,
    .rounded-3.border {
        background-color: var(--card-bg);
        color: var(--text-primary);
        border-color: var(--border-color);
    }

    /* Navbar */
    .navbar {
        background-color: var(--bg-secondary) !important;
    }

    .navbar-brand,
    .nav-link {
        color: var(--text-primary) !important;
    }

    .nav-link:hover {
        color: var(--btn-primary-bg) !important;
    }

    /* Footer */
    footer {
        background-color: var(--bg-secondary);
        color: var(--text-primary);
        border-top: 1px solid var(--border-color);
    }

    footer .text-body-secondary {
        color: var(--text-secondary) !important;
    }

    footer a.text-body-secondary {
        color: var(--text-secondary) !important;
    }

    footer a.text-body-secondary:hover {
        color: var(--btn-primary-bg) !important;
    }

    footer svg {
        fill: var(--text-secondary);
        transition: fill 0.3s ease;
    }

    footer a:hover svg {
        fill: var(--btn-primary-bg);
    }

    /* Botão de tema na Navbar */
    .nav-theme-toggle {
        background: transparent;
        border: 1px solid var(--border-color);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 15px;
        cursor: pointer;
        transition: all 0.2s ease;
        color: var(--text-primary);
    }

    .nav-theme-toggle:hover {
        background-color: var(--bg-secondary);
        transform: scale(1.05);
    }

    .nav-theme-toggle svg {
        width: 18px;
        height: 18px;
    }

    /* Animação de transição */
    * {
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    /* Cores específicas do Dracula para modo dark */
    [data-theme="dark"] h1,
    [data-theme="dark"] h2,
    [data-theme="dark"] h3,
    [data-theme="dark"] h4,
    [data-theme="dark"] h5,
    [data-theme="dark"] h6,
    [data-theme="dark"] span {
        color: #f8f8f2;
    }

    [data-theme="dark"] .fw-normal {
        color: #ff79c6;
    }

    [data-theme="dark"] .display-4 {
        color: #50fa7b;
    }

    /* Imagens - ajuste de brilho no tema dark */
    /* Animação de entrada global */
    body {
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }

    body.loaded {
        opacity: 1;
    }

    [data-theme="dark"] img {
        opacity: 0.9;
        transition: opacity 0.3s ease;
    }

    [data-theme="dark"] img:hover {
        opacity: 1;
    }
</style>

<!-- O botão agora é incluído via topo.php na navbar -->

<script>
    const htmlElement = document.documentElement;

    // Verificar tema salvo ou preferência do sistema
    function getPreferredTheme() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            return savedTheme;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    // Aplicar tema
    function setTheme(theme) {
        htmlElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);

        // Atualizar ícones se eles existirem no DOM
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');

        if (sunIcon && moonIcon) {
            if (theme === 'dark') {
                sunIcon.style.display = 'block';
                moonIcon.style.display = 'none';
            } else {
                sunIcon.style.display = 'none';
                moonIcon.style.display = 'block';
            }
        }
    }

    // Alternar tema
    function toggleTheme() {
        const currentTheme = htmlElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    }

    // Inicializar tema imediatamente para evitar flash
    setTheme(getPreferredTheme());

    // Configurar event listener quando o DOM estiver pronto
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('themeToggle');
        if (themeToggle) {
            themeToggle.addEventListener('click', toggleTheme);
        }
    });

    // Detectar mudanças na preferência do sistema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Mostrar o corpo após o carregamento inicial para evitar flash branco
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });
</script>

</script>