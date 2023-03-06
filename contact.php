<?php
include_once('header.php');
?>
<div class="body-image3">
    <!doctype html>
    <html lang="en">

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <title>Contact Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <style>
            form {
                height: 50%;
                width: 50%;
                margin: 0 auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                font-family: 'Lucida Grande', monospace;


            }
        </style>
    </head>

    <body>


        <form id="contactForm" method="POST" enctype="multipart/form-data">
            <br>
            <p>We'r open for any suggestions or just to have a chat </p>
            <br>
            Name:<br>
            <input type="text" size="19" name="name"><br><br>
            Email:<br>
            <input type="email" name="email"><br><br>
            Message:<br>
            <textarea name="message" rows="6″ cols=" 20″>
    </textarea><br><br>
            <input type="hidden" name="form-submitted" value="1">

            <button type="submit" value="Submit">Send</button>



            <h3>Follow us here</h3>
            <p>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </p>

        </form>



    </body>

    </html>

    <script>


        $(document).ready(function () {
            $('#contactForm').submit(function (event) {
                // Prevent form from submitting
                event.preventDefault();
                // Submit form data to PHP script
                $.ajax({
                    url: 'send-email.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        // Show success or error message
                        if (response == 'success') {
                            $('#form-message-success').html('Your message was sent, thank you!').show();
                            $('#form-message-warning').hide();
                            $('#contactForm')[0].reset();
                        } else {
                            $('#form-message-warning').html('Sorry, there was an error sending your message. Please try again later.').show();
                            $('#form-message-success').hide();
                        }
                    }
                });
            });
        });



    </script>