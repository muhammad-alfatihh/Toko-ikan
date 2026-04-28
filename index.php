<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="create.php" method="POST">
        <label for="nama_ikan">Nama Ikan:</label>
        <input type="text" name="nama_ikan" id="nama_ikan"> <br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga"> <br>

        <label for="stok">Stok:</label>
        <input type="text" name="stok" id="stok"> <br>

        <label for="kategori">Kategori:</label>
        <select name="kategori" id="kategori">
            <option value="Hias Air Tawar">Hias Air Tawar</option>
            <option value="Konsumsi Air Tawar">Konsumsi Air Tawar</option>
            <option value="Hias Air Laut">Hias Air Laut</option>
            <option value="Konsumsi Air Laut">Konsumsi Air Laut</option>
        </select> <br>

        <button type="submit">Add</button>
    </form>

</body>
</html>