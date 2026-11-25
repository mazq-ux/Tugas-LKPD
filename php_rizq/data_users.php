
<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pengguna Sistem</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #1a237e;
            color: white;
        }
    </style>
</head>

<body>

    <h2>Daftar Pengguna Sistem RPL</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
        </tr>

        <?php
            $query = "SELECT * FROM users";

            $hasil = mysqli_query($koneksi, $query);

            while ($baris = mysqli_fetch_assoc($hasil)) {
        ?>

        <tr>
            <td><?php echo $baris['id_user']; ?></td>
            <td><?php echo $baris['Username']; ?></td>
            <td><?php echo $baris['Role']; ?></td>
        </tr>

        <?php
            }
        ?>

    </table>

</body>

</html>
