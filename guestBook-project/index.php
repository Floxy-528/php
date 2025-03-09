<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floxy GuestBook Registry</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<form action="messages.php" method="post" >
        <button type="submit" class="entries"> View All >> </button>
    </form>

    <h2>Guestbook Registry</h2>
    <h4 class="welcome">Welcome! Please enter your name and message 🤗</h4>

    <form action="data.php" method="POST" id="form" target="feedback">
        <label for="name">Name:</label> 
        <input type="text" name="name" class="name"> <br> 

        <label for="message">Message:</label>
        <textarea rows="4" cols="30" name="message" class="message" placeholder="Type your message..."></textarea> <br>

        <input type="submit" class="submit" name="submit">
    </form>

    <!-- iframe an HTML element that lets you embed another web page inside the current pag. Embedding confirm.php into index.php, to avoid new page -->
    <iframe name="feedback" class ="feedback" style="width: 100%; height: 150px; border: none;"></iframe>  


</body>
</html>



<!-- <! Project Overview

Goal:
Create a guestbook where visitors can enter their name and a message. 
The application will save these entries in a JSON file and display them on the page.

Key Features:

1.⁠ ⁠A form to submit a name and message.
2.⁠ ⁠Server-side validation and sanitization.
3.⁠ ⁠Saving guest entries to a JSON file.
4.⁠ ⁠⁠Displaying all guestbook entries, with the latest at the top.
5.⁠ ⁠Basic styling with CSS.  -->