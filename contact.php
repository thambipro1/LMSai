<?php 
include('navbar_contactus.php'); 
include('header.php'); 

// PHP: Handle the form submission and send email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vishvaparamasivam1@gmail.com";
    $subject = "New Contact Form Submission";
    $firstName = htmlspecialchars($_POST['fname']);
    $lastName = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success'>Your message has been sent successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Sorry, there was an error sending your message. Please try again later.</div>";
    }
}
?>

<div class="container">
    <div class="margin-top">
        <div class="row">
            <?php include('head.php'); ?>
            
            <div class="col-main">
                <div class="cms">
                    <div class="loader_success"></div>
                    <div class="contact_add" style="float: right"></div>
                    <h2>Other Way to Contact Us</h2>
                    
                    <!-- HTML: Contact Form -->
                    <form method="post" action="" class="contact-form">
                        <div class="personal_info">
                            <p>
                                <label for="fname">First Name:</label><br />
                                <input type="text" id="fname" name="fname" class="email_text" required />
                            </p>
                            <p>
                                <label for="lname">Last Name:</label><br />
                                <input type="text" id="lname" name="lname" class="email_text" required />
                            </p>
                            <p>
                                <label for="email">Your Email Address:</label><br />
                                <input type="email" id="email" name="email" class="email_text" required />
                            </p>
                            <p>
                                <label for="message">Message:</label><br />
                                <textarea id="message" name="message" class="email_text" style="width: 100%; height: 150px;" required></textarea>
                            </p>
                            <p>
                                <button type="submit" class="send btn btn-primary"><span>Send</span></button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

<!-- CSS: Add to your stylesheet or in a <style> tag -->
<style>
.contact-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.contact-form p {
    margin-bottom: 15px;
}

.contact-form label {
    font-weight: bold;
    color: #333;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.contact-form .send {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.contact-form .send:hover {
    background-color: #0056b3;
}
</style>
