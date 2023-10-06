<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-800">
    

<div class="grid place-content-center h-screen">
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST" class="flex flex-col gap-2 bg-zinc-900 w-[420px] h-[320px] p-10 items-center justify-center rounded-xl">
        <h1 class="text-2xl font-bold text-white">
            Iniciar Sesion
        </h1>
        <input name="email" type="text" placeholder="Ingrese su email">
        <input name="password" type="password" placeholder="Ingrese su contraseña">
        <button class="bg-orange-400 p-2 rounded-md">
            Iniciar Sesion
        </button>

        <p class="text-white">
            o tambien puedes
        </p>

        <a href="register.php" class="text-orange-400">
            Registrarse
        </a>
    </form>
</div>
</body>
</html>