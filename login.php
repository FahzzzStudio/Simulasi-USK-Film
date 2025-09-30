<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="list-film.php" class="form">
            <h2>Form Login</h2>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password">

            <button type="submit">Login</button>
            
            <a href="register.php">Belum punya akun? Registrasi</a>
        </form>
    </div>
</body>
</html>