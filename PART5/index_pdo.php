<?php

try {
    // Connect to MySQL using PDO
    $dbh = new PDO('mysql:host=localhost;dbname=melodyjj', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 1. Insert data into the table
    echo "<h3>Inserting data:</h3>";
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email) 
            VALUES (:full_names, :gender, :contact_no, :email)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([
        ':full_names' => 'NJSNXJSXN',
        ':gender' => 'Female',
        ':contact_no' => '541',
        ':email' => 'dffđc@sea.oc'
    ]);
    echo "Successfully added NJSNXJSXN to the contact list.<br>";

    // 2. Update data in the table
    echo "<h3>Updating data:</h3>";
    $sql = "UPDATE my_contacts 
            SET contact_no = :contact_no, email = :email 
            WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([
        ':contact_no' => '785',
        ':email' => 'dhiih@ocean.oc',
        ':id' => 15
    ]);
    echo "Successfully updated ID number 5.<br>";

    // 3. Delete data from the table
    echo "<h3>Deleting data:</h3>";
    $id = 4;
    $sql = "DELETE FROM my_contacts WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':id' => $id]);
    echo "Successfully deleted ID number $id.<br>";

    // 4. Display data from the table
    echo "<h3>Displaying data:</h3>";
    $sql = "SELECT * FROM my_contacts";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br><br>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$dbh = null;

?>