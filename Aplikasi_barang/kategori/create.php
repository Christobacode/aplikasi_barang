<?php
    require_once('../inc/require.php');

    if(isset($_POST["submit"]))
    {
        $nama = $_POST["nama"];
        $ket = $_POST["keterangan"];

        if(!empty($nama)){
            //SQL :INSERT DATA
            $stmt = $conn->prepare("INSERT INTO tb_kategori(nama, keterangan)
            VALUES (:nama, :keterangan)");
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':keterangan', $ket);
            $result = $stmt->execute();

            if($result)
            {
                //BERHASIL
                $_SESSION["SUCCESS"] = "Data Berhasil Disimpan";
                //redirect
                redirect("create.php");
            }else{
                //GAGAL
                $_SESSION["ERROR"] = "Data Gagal Disimpan";
                redirect("create.php");
            }
        }
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecreate.css">
    <title>Aplikasi stok barang</title>
    
</head>
<body>
   
    <div class="container">
        <form action="" method="POST">
            <h1>Tambah Kategori</h1>
            <?php
                echo successMessage();
                echo errorMessage();
            ?>
            <div>
                <label for="nama">Nama Kategori</label><br>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama kategori">
                <br><br>

                <label for="">Keterangan Kategori</label><br>
                <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan keterangan kategori">
                <br><br>

                <div class="button">
            <button type="submit" name="submit">Simpan</button>
            </div>
            </div>
        </form>
    </div>
 
</body>
</html>