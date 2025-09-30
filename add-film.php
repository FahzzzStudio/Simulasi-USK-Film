<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="list-film.php" class="form-add">
            <h2>Tambahkan Film</h2>

            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" placeholder="Masukkan judul film">

            <label for="genre">Genre</label>
            <select name="genre" id="genre">
                <option value="" required>Pilih genre</option>
                <option value="">Action</option>
                <option value="">Advanture</option>
                <option value="">Animation</option>
                <option value="">Comdey</option>
                <option value="">Crime</option>
                <option value="">Documentary</option>
                <option value="">Drama</option>
                <option value="">Family</option> 
                <option value="">History</option> 
                <option value="">Horror</option> 
                <option value="">Sport</option>
            </select>
            
            <label for="tahun">Tahun Produksi</label>
            <input type="number" name="tahun" id="tahun" placeholder="Masukkan tahun produksi">

            <label for="sinopsis">Sinopsis</label>
            <textarea id="sinopsis" name="sinopsis" placeholder="Masukkan sinopsis"></textarea>

            <label for="poster">Poster</label>
            <input type="file" name="poster" id="poster">

            <label for="durasi">Durasi</label>
            <input type="number" id="durasi" name="durasi" placeholder="Masukkan durasi (Menit)">

            <label for="aktor">Aktor 1</label>
            <input type="text" id="aktor" name="aktor" placeholder="Masukkan nama aktor">
            
            <label for="aktor">Aktor 2</label>
            <input type="text" id="aktor" name="aktor" placeholder="Masukkan nama aktor">

            <label for="aktor">Aktor 3</label>
            <input type="text" id="aktor" name="aktor" placeholder="Masukkan nama aktor">

            <label for="rating">Rating</label>
            
            <button type="submit">Tambah Film</button>
        </form>
    </div>
</body>
</html>