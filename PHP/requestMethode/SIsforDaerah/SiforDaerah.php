<?php
// Memulai sesi PHP untuk menyimpan dan mengakses data antar halaman.
session_start(); 

// Array yang berisi daftar kota/kabupaten
$wil = ["Kota Pekalongan", "Kabupaten Pekalongan", "Kabupaten Batang"];

// Mengecek apakah session 'data' sudah ada. Jika belum ada, maka inisialisasi data kecamatan berdasarkan kota/kabupaten.
if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = [
        "Kota Pekalongan" => [
            "Pekalongan Selatan", "Pekalongan Utara", "Pekalongan Barat", "Pekalongan Timur"
        ],
        "Kabupaten Pekalongan" => [
            "Kedungwuni", "Wonopringgo", "Karnganyar", "Kajen", "Kesesi", "Bojong", "Wiradesa", "dsb (19 kecamatan)"
        ],
        "Kabupaten Batang" => [
            "Limpung", "Pecalungan", "Bandar", "Blado", "Banyuputih", "Gringsing", "Kandeman", "dsb (15 kecamatan)"
        ]
    ];
}

//Mengambil data kecamatan dari session dan menyimpannya ke variabel $data.
$data = $_SESSION['data']; 

// Logika untuk logout
if (isset($_GET['logout'])) {
    session_destroy(); // Hapus semua data session
    header("Location: index.php "); // Redirect ke halaman ini setelah logout
    exit();
}

// Mengecek apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Jika pengguna memilih kota/kabupaten, maka sistem akan mencari daftar kecamatannya dari $data.
    if (isset($_POST["pilihan"])) {
        $pilihan = $_POST["pilihan"];
        // Mengecek apakah pilihan ada dalam array data
        if (array_key_exists($pilihan, $data)) {
            // Mengambil data kecamatan berdasarkan pilihan
            $selectData = $data[$pilihan];
        } else {
            // Jika tidak ada, maka set sebagai array kosong
            $selectData = [];
        }
    }

    // Logika untuk menghapus data kecamatan
    if (isset($_POST["delete"])) {
        //Jika ada request delete, maka sistem akan menghapus kecamatan berdasarkan indeks ($indexToDelete).
        $indexToDelete = $_POST["delete"];
        $pilihan = $_POST["pilihan"];
        if (array_key_exists($pilihan, $data)) { //menghapus elemen dari array.
            // Hapus data kecamatan berdasarkan indeks
            array_splice($data[$pilihan], $indexToDelete, 1);
            $_SESSION['data'] = $data; // Simpan perubahan ke session
            $selectData = $data[$pilihan]; // Perbarui data yang ditampilkan
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kecamatan</title>
    <link rel="stylesheet" href="sisfor.css">
</head>
<body>
    <header class="header">
        <h1>Selamat Datang di Data Kecamatan</h1>
        
    </header>
    <main class="container">
        <!-- Form untuk memilih kota/kabupaten -->
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="formulir">
            <select name="pilihan" id="">
                <option value="">Pilih Kota/Kabupaten</option>
                <!-- Looping untuk menampilkan pilihan kota/kabupaten -->
                <?php foreach ($wil as $value) : ?>
                    <option value="<?= $value; ?>" <?= (isset($pilihan) && $pilihan == $value) ? 'selected' : ''; ?>><?= $value; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Tampilkan</button>
        </form>

        <!-- Tabel untuk menampilkan daftar kecamatan -->
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Daftar Kecamatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan data kecamatan jika tersedia -->
                <?php if (!empty($selectData)) : ?>
                    <!-- Jika ada data kecamatan, maka akan ditampilkan nomor, nama kecamatan, dan tombol hapus. -->
                    <?php foreach ($selectData as $s => $value) : ?>
                        
                        <tr>
                            <td><?= $s + 1; ?></td>
                            <td><?= $value; ?></td>
                            <td>
                                <!-- Setiap baris memiliki tombol "Hapus Data" yang akan mengirimkan request POST untuk menghapus kecamatan tertentu. -->
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
                                    <input type="hidden" name="delete" value="<?= $s; ?>">
                                    <input type="hidden" name="pilihan" value="<?= $pilihan; ?>">
                                    <button type="submit" class="delete">Hapus Data</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <!-- Jika tidak ada data yang ditemukan -->
                    <tr>
                        <td colspan="3">Data tidak ditemukan!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <!-- Tombol Logout -->
        <a href="?logout=1" class="logout-button">Logout</a>
    </main>
</body>
</html>