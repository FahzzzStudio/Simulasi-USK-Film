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
        <form action="login.php" class="form">
            <h2>Form Registrasi</h2>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username">

            <label for="password">Password</label>
            <input type="password" id="passwod" name="password" placeholder="Masukkan password">

            <label for="password2">Konfirmasi Password</label>
            <input type="password" id="password2" name="password2" placeholder="Konfirmasi password">

            <button type="submit">Registrasi</button>
        </form>
    </div>
</body>
</html>