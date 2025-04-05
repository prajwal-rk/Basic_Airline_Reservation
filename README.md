 ✈️ Basic Airline Reservation System

A simple web-based Airline Reservation System built using **PHP**, **MySQL**, **HTML**, and **CSS**, designed to manage flight schedules and bookings efficiently.

 📌 Features

- Add new flights with detailed information (flight number, origin, destination, timings, price).
- Book tickets by selecting available flights and entering passenger details.
- View all booked tickets in a tabular format.
- View available flights with all key details.
- Clean, responsive UI with modern CSS and button hover effects.

 🛠️ Tech Stack

- Frontend: HTML, CSS  
- Backend: PHP  
- Database: MySQL  
- Server: WAMP (Windows, Apache, MySQL, PHP)

 📂 Folder Structure

```
Airline/
├── index.php
├── add_flight.php
├── insert_flight.php
├── view_flights.php
├── book_flight.php
├── insert_booking.php
├── view_bookings.php
├── db_connect.php
├── create_database.php
├── create_tables.php
├── buttons.css
├── style.css
└── images/
    └── aeroplane.jpg
```

 ⚙️ Setup Instructions

1. Install WAMP Server and ensure Apache and MySQL are running.
2. Place the project folder inside `C:\wamp64\www\Airline\`.
3. Launch phpMyAdmin at `http://localhost/phpmyadmin`.
4. Run `create_database.php` and `create_tables.php` to set up the database and tables.
5. Access the project in your browser at `http://localhost/Airline/index.php`.

 🧾 Notes

- No authentication system is used — the interface is open for learning/demo purposes.
- Make sure `db_connect.php` has correct credentials matching your local MySQL setup.
- Ensure image paths and CSS file links are correctly set relative to your directory.

 📸 Preview

![Flight Booking UI](images/aeroplane.jpg)
