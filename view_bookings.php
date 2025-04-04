<?php
include 'db_connect.php'; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booked Tickets</title>

    <!-- Link External CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buttons.css">

    <style>
        /* Styling for Table */
        .table-container {
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: linear-gradient(45deg, #5C2129, #943C47, #CC5765, #E0827B, #F5ADA1);
            color: white;
            font-weight: bold;
        }

        /* Alternating Row Colors */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h2 style="color: white;">Booked Tickets</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Seat No</th>
                <th>Flight No</th>
                <th>Passenger Name</th>
                <th>Aadhar ID</th>
                <th>Travel Date</th>
                <th>Source</th>
                <th>Destination</th>
            </tr>

            <?php
            $sql = "SELECT id, seat_no, flight_no, passenger_name, aadhar_id, travel_date, source, destination FROM bookings";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['seat_no']}</td>
                            <td>{$row['flight_no']}</td>
                            <td>{$row['passenger_name']}</td>
                            <td>{$row['aadhar_id']}</td>
                            <td>{$row['travel_date']}</td>
                            <td>{$row['source']}</td>
                            <td>{$row['destination']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No bookings found.</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>

</body>
</html>
