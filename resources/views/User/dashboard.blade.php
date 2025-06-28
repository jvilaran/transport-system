<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <style>
        
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>Inicio</li>
            <li>Perfil</li>
            <li>Servicios</li>
            <li>Cerrar sesión</li>
        </ul>
    </nav>

    <div>
        <h1>Hola, <?= $user['name']; ?></h1>
        <h2>Bienvenido al sistema de transporte</h2>
        <p>Este es el dashboard del usuario.</p>
    </div>
    

</body>
</html>



