<?php

include_once("../koneksi/koneksi.php");

if (isset($_POST['update'])) {
    $id = $_GET['ProdukID'];

    $namaproduk = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $result = mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$namaproduk', Harga='$harga', stok='$stok' WHERE ProdukID=$id");

    header("Location: index.php?page=stok-brg");
    echo "<script>alert('Berhasil')</script>";
}

$id = $_GET['ProdukID'];

$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID=$id");

while ($barang_data = mysqli_fetch_array($result1)) {
    $namaproduk = $barang_data['NamaProduk'];
    $harga = $barang_data['Harga'];
    $stok = $barang_data['Stok'];
}
?>

<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <div class="card-header">
                <h3 class="">Update barang</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="NamaProduk" value="<?php echo $namaproduk; ?>" placeholder="Masukkan Nama" name="NamaProduk">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="Harga" value="<?php echo $harga; ?>" placeholder="Masukkan Harga" name="Harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok:</label>
                        <input type="text" class="form-control" id="Stok" value="<?php echo $stok; ?>" placeholder="Masukkan Stok" name="Stok">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>