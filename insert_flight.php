<?php
include 'db_connect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flight_number = $_POST['flight_number'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $price = $_POST['price'];

    // SQL query to insert data
    $sql = "INSERT INTO flights (flight_number, origin, destination, departure_time, arrival_time, price) 
            VALUES ('$flight_number', '$origin', '$destination', '$departure_time', '$arrival_time', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Flight added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
