This code uses MySQLi, a modern and supported extension for interacting with MySQL databases.

```php
<?php
$conn = new mysqli("localhost", "user", "password", "database");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// ... rest of your database interactions using MySQLi
?>
```