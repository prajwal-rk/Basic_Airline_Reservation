<?php
include 'db_connect.php'; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Flights</title>

    <!-- Link External CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buttons.css">

    <style>
        /* Styling for Table */
        .table-container {
            width: 85%;
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
            padding: 12px;
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

    <h2 style="color: white;">Available Flights</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Flight Number</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Price</th>
            </tr>

            <?php
            $sql = "SELECT * FROM flights";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['flight_number']}</td>
                            <td>{$row['origin']}</td>
                            <td>{$row['destination']}</td>
                            <td>{$row['departure_time']}</td>
                            <td>{$row['arrival_time']}</td>
                            <td>\${$row['price']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No flights found.</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>

</body>
</html>
