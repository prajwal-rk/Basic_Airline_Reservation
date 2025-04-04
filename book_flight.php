<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Flight</title>

    <!-- Link External CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buttons.css">

    <style>
        /* Centering form */
        .form-container {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: white;
        }

        /* Form Inputs */
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Submit Button Styling */
        .submit-btn {
            background-color: var(--clr-primary);
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

    <h2 style="color: white;">Book Your Flight</h2>

    <div class="form-container">
        <form action="insert_booking.php" method="post">
            <input type="text" name="seat_no" placeholder="Seat Number" required>

            <select name="flight_no" required>
                <option value="">Select Flight</option>
                <?php
                include 'db_connect.php'; // Ensure database connection file is included

                $sql = "SELECT flight_number FROM flights";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['flight_number'] . "'>" . $row['flight_number'] . "</option>";
                    }
                } else {
                    echo "<option value=''>No Flights Available</option>";
                }

                $conn->close();
                ?>
            </select>

            <input type="text" name="passenger_name" placeholder="Passenger Name" required>
            <input type="text" name="aadhar_id" placeholder="12-Digit Aadhar ID" pattern="\d{12}" required>
            <label>Date of Travel:</label>
            <input type="date" name="travel_date" required>
            <input type="text" name="source" placeholder="Source" required>
            <input type="text" name="destination" placeholder="Destination" required>
            <button type="submit" class="submit-btn">Book Flight</button>
        </form>
    </div>

</body>
</html>
