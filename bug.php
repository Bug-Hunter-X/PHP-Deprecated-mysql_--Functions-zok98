This code uses the `mysql_*` functions, which are deprecated and have been removed from PHP 7.0.  Attempting to use them will result in errors.

```php
$conn = mysql_connect("localhost", "user", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}

mysql_select_db("database", $conn);
```