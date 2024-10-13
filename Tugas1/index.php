<?php
include 'koneksi.php';

$sql = "SELECT judul, penulis, penerbit, tahun_terbit FROM buku";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }
        h2 {
            color: #343a40;
        }
        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #007bff;
            color: black;
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        td {
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        tr{
            background-color: #d86ce6;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        footer {
            background-color: #c8a5cf;
            color: white;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- <div class="container mt-5"> -->
    <h2 class="text-center mb-4">Daftar Buku</h2>
    <table class="table table-bordered border-primary">
        <thead class="table-Light">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row["judul"] . "</td>";
                    echo "<td>" . $row["penulis"] . "</td>";
                    echo "<td>" . $row["penerbit"] . "</td>";
                    echo "<td>" . $row["tahun_terbit"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>Tidak ada data buku</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
<!-- </div> -->

<footer class="text-center mt-5 mb-3">
    <p>&copy; 2024 Daniel Satya Ramadhan</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>