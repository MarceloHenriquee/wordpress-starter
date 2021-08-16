<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= THEME_URI . '/assets/css/app.css'; ?> ">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Página de Exemplo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Olá Mundo</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Item 1</a>
                                <a class="dropdown-item" href="#">Item 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Item 3</a>
                            </div>
                        </li>
                    </ul>
                    <form action="<?= get_site_url(); ?>" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" name="s" type="search" placeholder="Digite sua busca..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <h2>HEADER</h2>
        </div>
    </header>