<?php $current_year = date('Y'); ?>
<!-- Rodapé -->
<div class="b-example-divider"></div>
<div class="container-xxl">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">
                &copy; <?php echo $current_year; ?> Miqueas Tavares. Todos os direitos reservados.
            </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex align-items-center mb-0">
            <li class="ms-4">
                <a class="text-body-secondary social-icon-link" href="https://github.com/miqueas-cdm" target="_blank"
                    aria-label="GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                        <path d="M9 18c-4.51 2-5-2-7-2" />
                    </svg>
                </a>
            </li>
            <li class="ms-4">
                <a class="text-body-secondary social-icon-link"
                    href="https://www.linkedin.com/in/miqueas-silva-tavares-51a5a71a6/" target="_blank"
                    aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                        <rect width="4" height="12" x="2" y="9" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>
            </li>
            <li class="ms-4">
                <a class="text-body-secondary social-icon-link" href="https://www.instagram.com/miqueastavares_admin/"
                    target="_blank" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg>
                </a>
            </li>
        </ul>
    </footer>
</div>

<style>
    .social-icon-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background-color: transparent;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: var(--text-secondary) !important;
    }

    .social-icon-link:hover {
        background-color: var(--bg-secondary);
        color: var(--btn-primary-bg) !important;
        transform: translateY(-3px);
    }

    .social-icon-link svg {
        transition: transform 0.3s ease;
    }

    [data-theme="dark"] .social-icon-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Garantir que o rodapé não seja obstruído por botões flutuantes se necessário */
    footer {
        padding-bottom: 20px;
    }
</style>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inicializar animações após o carregamento do DOM
    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out',
            offset: 100
        });
    });
</script>