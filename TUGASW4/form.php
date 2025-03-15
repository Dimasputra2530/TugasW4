<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Usia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
        }
        .result {
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>

    <h2>Form Cek Usia</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" required>
        <br>
        <button type="submit" name="submit">Cek</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = intval($_POST['umur']);

        if ($umur >= 18) {
            $status = "Dewasa";
        } else {
            $status = "Belum Dewasa";
        }

        echo "<p class='result'>Halo, $nama! Anda termasuk: <strong>$status</strong></p>";
    }
    ?>

</body>
</html>
