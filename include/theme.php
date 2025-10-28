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
    .card, .rounded-3.border {
        background-color: var(--card-bg);
        color: var(--text-primary);
        border-color: var(--border-color);
    }

    /* Navbar */
    .navbar {
        background-color: var(--bg-secondary) !important;
    }

    .navbar-brand, .nav-link {
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

    /* Botão flutuante de tema */
    .theme-toggle {
        position: fixed;
        bottom: 30px;
        left: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--btn-primary-bg), var(--btn-secondary-bg));
        border: 3px solid var(--border-color);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px var(--shadow-color);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .theme-toggle:hover {
        transform: scale(1.1) rotate(10deg);
        box-shadow: 0 6px 20px var(--shadow-color);
    }

    .theme-toggle svg {
        width: 30px;
        height: 30px;
        fill: var(--text-primary);
        transition: transform 0.3s ease;
    }

    .theme-toggle:active svg {
        transform: rotate(180deg);
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
    [data-theme="dark"] span{
        color: #f8f8f2;
    }

    [data-theme="dark"] .fw-normal {
        color: #ff79c6;
    }

    [data-theme="dark"] .display-4 {
        color: #50fa7b;
    }

    /* Imagens - ajuste de brilho no tema dark */
    [data-theme="dark"] img {
        opacity: 0.9;
    }

    [data-theme="dark"] img:hover {
        opacity: 1;
    }
</style>

<!-- Botão flutuante de alternância de tema -->
<button class="theme-toggle" id="themeToggle" aria-label="Alternar tema">
    <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="5"/>
        <line x1="12" y1="1" x2="12" y2="3" stroke="currentColor" stroke-width="2"/>
        <line x1="12" y1="21" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" stroke="currentColor" stroke-width="2"/>
        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" stroke="currentColor" stroke-width="2"/>
        <line x1="1" y1="12" x2="3" y2="12" stroke="currentColor" stroke-width="2"/>
        <line x1="21" y1="12" x2="23" y2="12" stroke="currentColor" stroke-width="2"/>
        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" stroke="currentColor" stroke-width="2"/>
        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" stroke="currentColor" stroke-width="2"/>
    </svg>
    <svg id="moonIcon" style="display: none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
    </svg>
</button>

<script>
    // Sistema de tema
    const themeToggle = document.getElementById('themeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
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
        
        if (theme === 'dark') {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        } else {
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        }
    }

    // Alternar tema
    function toggleTheme() {
        const currentTheme = htmlElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    }

    // Inicializar tema ao carregar a página
    setTheme(getPreferredTheme());

    // Event listener para o botão
    themeToggle.addEventListener('click', toggleTheme);

    // Detectar mudanças na preferência do sistema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });
</script>