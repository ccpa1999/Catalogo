<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <script src="public/js/bootstrap.js" defer></script>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/scripts.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link  text-white" href="login.php" id="navbarDropdown">
                                Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container shadow mt-4">
        <div class="row">
            <h3>Bienvenid@ al Catalogo</h3>
            <h6>Nuestros productos</h6>
        </div>
        <div id="content" class="w-100">
            <div id="productos"></div>
        </div>
    </div>
</body>