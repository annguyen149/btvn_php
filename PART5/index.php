<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI TẬP PHẦN 5</title>
</head>

<body>
    <?php
    // Bài tập silde 6

    $dbh = mysqli_connect('localhost', 'root', '', 'melodyjj');
    // Connect to MySQL server

    if (!$dbh) {
        die("Unable to connect to MySQL: " . mysqli_connect_error());
    }

    if (!mysqli_select_db($dbh, 'melodyjj')) {
        die("Unable to select database: " . mysqli_error($dbh));
    }

    // SELECT statement
    $sql_stmt = "SELECT * FROM my_contacts";
    $result = mysqli_query($dbh, $sql_stmt);

    if (!$result) {
        die("Database access failed: " . mysqli_error($dbh));
    }

    $rows = mysqli_num_rows($result);

    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Full Names: ' . $row['full_names'] . '<br>';
            echo 'Gender: ' . $row['gender'] . '<br>';
            echo 'Contact No: ' . $row['contact_no'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>'. '<br>';
        }
    }

    // INSERT statement
    $sql_stmt = "INSERT INTO my_contacts (full_names, gender, contact_no, email) ";
    $sql_stmt .= "VALUES ('AJĐJCNCJD', 'Mail', '541', 'gffsdfd@sea.oc')";

    $result = mysqli_query($dbh, $sql_stmt);

    if (!$result) {
        die("Adding record failed: " . mysqli_error($dbh));
    } else {
        echo "<br> AJĐJCNCJD has been successfully added to your contacts list<br>";
    }

    // UPDATE statement
    $sql_stmt = "UPDATE my_contacts SET contact_no = '785', email = 'dfdcdc@ocean.oc' ";
    $sql_stmt .= "WHERE id = 9";

    $result = mysqli_query($dbh, $sql_stmt);

    if (!$result) {
        die("Updating record failed: " . mysqli_error($dbh));
    } else {
        echo "<br> ID number 9 has been successfully updated<br>";
    }

    // DELETE statement
    $id = 5;
    $sql_stmt = "DELETE FROM my_contacts WHERE id = $id";

    $result = mysqli_query($dbh, $sql_stmt);

    if (!$result) {
        die("Deleting record failed: " . mysqli_error($dbh));
    } else {
        echo "<br> ID number $id has been successfully deleted<br>";
    }

    mysqli_close($dbh);

    ?>
</body>

</html>