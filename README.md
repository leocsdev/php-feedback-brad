# PHP Feedback App

### Database and Feedback Table Setup

**Create Database**

On PhpMyAdmin click on New > Database.
Fill out Database name and click on Create button.

**Create Table**
Fill out Table name as `feedback`, and number of columns to `5`.

Table Columns
| Name | Type | Length | Default | Auto Increment |
| ---- | ---- | ------ | ------- | -------------- |
| id | INT | 11 | None | Yes |
| name | VARCHAR | 255 | None | |
| email | VARCHAR | 255 | None | |
| body | TEXT | | None | |
| date | DATETIME | | CURRENT_TIME | |

Click on Save button

Click on the `Insert` tab to create the first record for testing

id : LEAVE IT BLANK

name : John Doe

email : john@example.com

body : Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsum nemo omnis minus! Ex consectetur modi, nisi illo dolorum dolor aspernatur ad consequuntur tempora quia in adipisci alias fugit ut.

date : LEAVE IT BLANK

### Connection to MySQL

**Create `database.php`**

Create a `config` folder into the root dir and create `database.php`

```php
// config/database.php

<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php-feedback-brad');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';
```

Include `database.php` to `header.php`

```php
// inc/header.php

<?php include 'config/database.php'; ?>

<!DOCTYPE html>
```
