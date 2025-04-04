<?php
include 'db_connect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seat_no = $_POST['seat_no'];
    $flight_no = $_POST['flight_no'];
    $passenger_name = $_POST['passenger_name'];
    $aadhar_id = $_POST['aadhar_id'];
    $travel_date = $_POST['travel_date'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];

    // SQL query to insert booking data
    $sql = "INSERT INTO bookings (seat_no, flight_no, passenger_name, aadhar_id, travel_date, source, destination) 
            VALUES ('$seat_no', '$flight_no', '$passenger_name', '$aadhar_id', '$travel_date', '$source', '$destination')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
