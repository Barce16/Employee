<?php

$servername = "localhost";
$username = "root";
$password = ""; 

$database_name = "db_tes";


$conn = new mysqli($servername, $username, $password, $database_name);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$value = $_POST['search'];// data that connect to function search.js

$sql = "SELECT * FROM register";
$result = $conn->query($sql); //connected to search.js

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>
        <!-- database -->
        <tr>
            <td style="text-align : center;">
                <?= $row['ID'] ?>
            </td>
            <td>
                <?= $row['LName'] ?>
            </td>
        <!-- database -->

        <!-- Buttons -->
            <td class="d-grid">
                <button type="button" class="btn btn-sm btn-block
            btn-link" data-bs-toggle="modal" data-bs-target="#show-details">
                    show detail</button>
            </td>
        <!-- Buttons -->   
        
        <!-- database -->
        </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>