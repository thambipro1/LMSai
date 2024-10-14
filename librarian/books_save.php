<?php 
include('dbcon.php'); // Assuming dbcon.php contains the connection setup using $db

if (isset($_POST['submit'])){
    $book_title = $_POST['book_title'];
    $category_id = $_POST['category_id'];
    $author = $_POST['author'];
    $book_copies = $_POST['book_copies'];
    $book_pub = $_POST['book_pub'];
    $publisher_name = $_POST['publisher_name'];
    $isbn = $_POST['isbn'];
    $copyright_year = $_POST['copyright_year'];
    $status = $_POST['status'];

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $db->prepare("INSERT INTO book (book_title, category_id, author, book_copies, book_pub, publisher_name, isbn, copyright_year, date_added, status) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)");

    // Bind parameters to the SQL query
    $stmt->bind_param('sisisssss', $book_title, $category_id, $author, $book_copies, $book_pub, $publisher_name, $isbn, $copyright_year, $status);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to books page on success
        header('location:books.php');
    } else {
        // Handle error if query fails
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $db->close();
}
?>
