<?php 
ob_start(); // Start output buffering
session_start(); // Start the session at the very top

include('header.php'); 
include('navbar.php'); 
?>
<div class="container">
    <div class="margin-top">
        <div class="row">	
            <div class="span12">
                <div class="sti">
                    <img src="../LMS/headerLMSai.gif" class="img-rounded" alt="Header Image">
                </div>
                <div class="login">
                    <div class="log_txt">
                        <p><strong>Please Enter the Details Below..</strong></p>
                    </div>
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Username</label>
                            <div class="controls">
                                <input type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password</label>
                            <div class="controls">
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button id="login" name="submit" type="submit" class="btn">
                                    <i class="icon-signin icon-large"></i>&nbsp;Submit
                                </button>
                            </div>
                        </div>

                        <?php
                        // Database connection parameters
                        $servername = "localhost";
                        $dbUsername = "root"; // Replace with your database username
                        $dbPassword = ""; // Replace with your database password
                        $database = "eb_lms";

                        // Create a connection
                        $db = new mysqli($servername, $dbUsername, $dbPassword, $database);

                        // Check connection
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);
                        }

                        // Retrieve the username and password from POST
                        if (isset($_POST['submit'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            // Prepare the SQL statement to prevent SQL injection
                            $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
                            $stmt->bind_param("ss", $username, $password);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Check if any rows are returned
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $_SESSION['id'] = $row['user_id'];
                                header('Location: dashboard.php');
                                exit();
                            } else {
                                echo '<div class="alert alert-danger">Access Denied: Invalid username or password</div>';
                            }

                            // Close connections
                            $stmt->close();
                            $db->close();
                        }
                        ?>
                    </form>
                </div>
            </div>		
        </div>
    </div>
</div>
<?php include('footer.php'); ?> 
<?php ob_end_flush(); // Flush the output buffer ?>
