<?php



$registration = array(
    'Complete_Name' => "'" . $_POST['Complete_Name'] . "'",
    'Age' => "'" . $_POST['Age'] . "'",
    'Gender' => "'" . $_POST['Gender'] . "'",
    'Contact' => "'" . $_POST['Contact'] . "'",
    'Birth_date' => "'" . $_POST['Birth_date'] . "'",
    'Birth_place' => "'" . $_POST['Birth_place'] . "'",
    'Status' => "'" . $_POST['Status'] . "'",
    'Gmail' => "'" . $_POST['Gmail'] . "'",
    'Password' => "'" . $_POST['Password'] . "'",
);
save($registration);
function save($data)
{

    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO employee ($attributes) VALUES ($values)";


     if ($conn->query($query) === TRUE) {
        header("location: /Employee/profile.php?success");
    } else {
        header("location: /Employee/registration.php?invalid");
     }

    $conn->close(); 

}
