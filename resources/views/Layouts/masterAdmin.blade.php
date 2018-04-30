<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/masterAdmin.css">
    <script src="js/app.js" async></script>
<title></title>
</head>
<body>
    {{-- Menu sur les pages Admin --}}
    <div class="container-fluid d-flex flex-md-nowrap">
            <header class="d-inline flex-row">
                <img src="img/Logo.png" class="logo" alt="logo">
            </header>
    </div>   
    <div class="button">
        <button type="button" class="btn btn-danger ">Base de données</button>
        <button type="button" class="btn btn-danger ">Gestion des Jeux</button>
        <button type="button" class="btn btn-danger ">Fin du Marathon</button>
    </div>     
        
            {{-- Contenu de la page Admin --}}
    @yield('contenuAdmin')
    
</body>
</html>