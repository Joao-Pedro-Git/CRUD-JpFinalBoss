<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jp FinalBoss</title>
    <link rel="stylesheet" href="style.css">

    <!-- Link do CSS do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link do CSS do AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo !isset($_REQUEST['page']) ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(atual)</span></a>
                    </li>
                    <li
                        class="nav-item <?php echo (isset($_REQUEST['page']) && $_REQUEST['page'] == 'novo') ? 'active' : ''; ?>">
                        <a class="nav-link" href="?page=novo">Novo Usuario</a>
                    </li>
                    <li
                        class="nav-item <?php echo (isset($_REQUEST['page']) && $_REQUEST['page'] == 'listar') ? 'active' : ''; ?>">
                        <a class="nav-link" href="?page=listar">Listar Usuarios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");

                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                // Verifica se 'page' está definido antes de usá-lo
                if (isset($_REQUEST['page'])) {
                    switch ($_REQUEST['page']) {
                        case 'novo':
                            include('novo-usuario.php');
                            break;

                        case 'listar':
                            include('listar-usuario.php');
                            break;

                        case 'salvar':
                            include('salvar-usuario.php');
                            break;

                        case 'editar':
                            include('editar-usuario.php');
                            break;

                        default:
                            print '<h1>Boas Vindas</h1>';
                    }
                } else {
                    print '<h1>Boas Vindas</h1>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    <script>
        // Inicializa o AOS
        AOS.init();

        // Muda a cor de fundo da navbar ao rolar
        window.onscroll = function () {
            const navbar = document.querySelector('.navbar');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
    </script>
</body>

</html>