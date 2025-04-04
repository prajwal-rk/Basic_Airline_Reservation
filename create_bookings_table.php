<?php
include 'db_connect.php'; // Include database connection

// Create Bookings Table
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    seat_no VARCHAR(10) NOT NULL,
    flight_no VARCHAR(10) NOT NULL,
    passenger_name VARCHAR(100) NOT NULL,
    aadhar_id CHAR(12) NOT NULL UNIQUE,
    travel_date DATE NOT NULL,
    source VARCHAR(50) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    FOREIGN KEY (flight_no) REFERENCES flights(flight_number) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
    echo "Bookings table created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
