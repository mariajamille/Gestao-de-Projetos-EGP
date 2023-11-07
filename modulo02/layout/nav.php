<!-- NAV  -->
<!-- coloquei um id pra chamar la no js --jayron-- -->
<nav class="navbar shadow-sm" id="navmenu">
    <div class="container-fluid">

        <!-- RESPONSIVIDADE -->

        <!-- MENU HAMBURGUER -->
        <button class="btn" id="btn_menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-2"></i></button>
        <!-- FIM DO MENU HAMBURGUER -->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel"><a href="https://www.egp.ce.gov.br/"
                        target="_blank"><img src="imgs/logoEGP2.png" alt="logo" id="img_logo"></a>
                </h5>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <!-- CONTEÚDO DO MENU LATERAL RESPONSIVO -->
                <nav class="menulateral-responsivo">
                    <!-- os topicos começam aqui  -->
                    <ul>
                        <li class="menu">
                            <a href="index.php">
                                <span class="icon "><i class="bi bi-person-workspace"></i></span>
                                <span class="txt">Apresentação</span>
                            </a>
                        </li>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico01.php">
                                    <span class="icon space"><i class="bi bi-1-circle"></i></span>
                                    <span class="txt">Administração Estratégica</span>
                                    <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico01.php">
                                <i class="bi bi-journals circulo"></i>Início</a>
                            <a href="#item01.2">
                                <i class="bi bi-journals circulo"></i>01.2 - O Planejamento Estratégico</a>
                            <a href="#item01.3">
                                <i class="bi bi-journals circulo"></i>01.3 - Missão e Visão</a>
                            <a href="#item01.4">
                                <i class="bi bi-journals circulo"></i>01.4 - Projetos como Viabilizadores de Mudanças
                                nas
                                Organizações</a>
                        </div>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico02.php">
                                    <span class="icon space"><i class="bi bi-2-circle"></i></span>
                                    <span class="txt">Conceitos e Ciclo de Vida do Projeto</span>
                                    <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico02.php">
                                <i class="bi bi-journals circulo"></i>Início</a>
                            <a href="#item02.2">
                                <i class="bi bi-journals circulo"></i>02.2 - Diferença entre Projeto e Programas</a>
                            <a href="#item02.3">
                                <i class="bi bi-journals circulo"></i>02.3 -
                                Os Ciclos de um Projeto</a>
                            <a href="#item02.4">
                                <i class="bi bi-journals circulo"></i>02.4 - Ciclo de Vida de Projeto</a>
                            <a href="#item02.5">
                                <i class="bi bi-journals circulo"></i>02.5 - Origem de Projetos</a>
                        </div>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico03.php">
                                    <span class="icon space"><i class="bi bi-3-circle"></i></span>
                                    <span class="txt">Elaboração de Projeto</span>
                                    <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico03.php">
                                <i class="bi bi-journals circulo"></i>Início</a>
                            <a href="#item03.2">
                                <i class="bi bi-journals circulo"></i>03.2 - Definição das Atividades e da Estrutura
                                Analítica do
                                Projeto – EAP</a>
                            <a href="#item03.3">
                                <i class="bi bi-journals circulo"></i>03.3 -
                                Definição das Precedências das Atividades</a>
                            <a href="#item03.4">
                                <i class="bi bi-journals circulo"></i>03.4 - Cronograma e Diagrama de Dependências</a>
                        </div>

                        <li class="menu">
                            <a href="topico04.php">
                                <span class="icon space"><i class="bi bi-4-circle"></i></span>
                                <span class="txt">A Importância da Gestão de Projetos na Administração Pública</span>
                            </a>
                        </li>


                        <li class="menu">
                            <a href="referencias.php">
                                <span class="icon"><i class="bi bi-book-half"></i></span>
                                <span class="txt">Referências</span>
                            </a>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- FIM DA RESPONSIVIDADE -->

        <!-- CONTEÚDO DA NAV -->
        <a class="navbar-brand"></a>
        <form class="form" role="search">
            <a class="nav-link active nonedec me-3" aria-current="page" href="#">Nome_Completo</a>

            <button type="button" class="btn btn-outline-success" id="moodle">Ir para o Moodle</button>

            <!--BOTÃO MODO ESCURO -->
            <button type="button" id="btn_tema">
                <div id="icone"></div>
                <div id="txtBtn"> Mudar Tema</div>
            </button>
            <!--BOTÃO MODO ESCURO -->

        </form>
    </div>
</nav>
<!-- FIM DA NAV -->