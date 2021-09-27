<!-- Author : Abdul Yamin
Title  : Tugas 4 - Membuat Program Sederhana -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Program Sederhana</title>
</head>
<body>
    <form method="post">
        <label>Jumlah Bintang = </label><input type="number" name="jumlah" placeholder="Masukkan Jumlah"> <br>
        <button name="tampilkan" type="submit">Kirim</button>
    </form>

    <?php
    // Aksi ketika Tombol kirim di klik
    if (isset($_POST['tampilkan'])) {
        $jumlah = $_POST['jumlah']; // variable untuk menampung nilai yg dinputkan pada inputan jumlah
        for ($jmlData = 0; $jmlData <=$jumlah ; $jmlData++) { // perulangan untuk jumlah angka yg dinputkan melalui form inputan
            for ($bintang=1; $bintang <=$jmlData ; $bintang++) { // perulangan untuk manipulasi jumlah bintang yang akan ditampilkan berdasakan jumlah dari variable $jmlData
                echo '*'; //tampilkan simbol bintang dialayar sebanyak jumlah yg inputkan user 
            }
            echo '<br>'; //tag ini digunakan untuk membuat baris baru apabila jumlah yng diinputkan lebih dari 1
        }
    }
    
    ?>

    
</body>
</html>