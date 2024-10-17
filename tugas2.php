<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f0f0f0;
        }
        h2 {
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        label, input, button {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        input {
            padding: 10px;
            font-size: 16px;
            border-radius: 15px;
        }
        button {
            background-color: blue;
            color: red;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #4CAF50;
            border-radius: 10px;
        }
    

        
    </style>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <div class="container">
        <form method="post" action="">
            <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
            <input type="number" id="nilai1" name="nilai1" min="0" max="100" required>

            <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
            <input type="number" id="nilai2" name="nilai2" min="0" max="100" required>

            <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
            <input type="number" id="nilai3" name="nilai3" min="0" max="100" required>

            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Ambil nilai dari form
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $nilai3 = $_POST['nilai3'];

            // Hitung nilai rata-rata
            $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

            // Tentukan status kelulusan
            $status = $rata_rata >= 60 ? "Lulus" : "Tidak Lulus";

            // Tampilkan hasil
            echo "<div class='result'>";
            echo "<h3>Hasil Penilaian</h3>";
            echo "<p><strong>Nilai Rata-Rata: </strong>" . number_format($rata_rata, 2) . "</p>";
            echo "<p><strong>Status Kelulusan: </strong>" . $status . "</p>";
            echo "</div>";
        }

        
        ?>
    </div>
</body>
</html>