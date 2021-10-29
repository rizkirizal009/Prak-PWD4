<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM user ");
?>
<html>

<head>
    <title>Halaman Utama</title>
</head>

<body>
    <table width='80%' border=1>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Website</th>
            <th>Comment</th>
            <th>Gender</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['Nama'] . "</td>";
            echo "<td>" . $user_data['Email'] . "</td>";
            echo "<td>" . $user_data['Website'] . "</td>";
            echo "<td>" . $user_data['Komentar'] . "</td>";
            echo "<td>" . $user_data['Gender'] . "</td>";
        }
        ?>
    </table>
</body>

</html>