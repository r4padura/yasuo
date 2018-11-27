
<!doctype html>
<html lang="pt_br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Página do Administrador</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"> 

    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content ="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#options" ).accordion({collapsible: true, autoHeight: false, active: false});
        } );
    </script>
</head>
<body>
    <header class="adminer">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php">Yasuo Pizzaria</a>
            </div>
            <nav class="adminer">
                <div class="dropdown">
                    <button onclick="document.getElementById('id01').style.display='block'"><?php echo $_SESSION['nome'] ?></button>
                    <div class="dropdown-content">
                        <form action="back/controlador.php" method="get">
                            <button type="submit" name="acao" value="logout">Sair</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>