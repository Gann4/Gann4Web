<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <?php include "templates/general-imports.php" ?>
    <title>Contact</title>
</head>
<body>
    <?php include "templates/header.php"; ?>
    <div class="content centered">
        <h1 class="content-title">Contact</h1>
        <form action="" method="post">
<<<<<<< HEAD
            <input type="email" name="email" id="" placeholder="youremail@example.com">
            <input type="subject" name="subject" id="" placeholder="Subject">
            <textarea id="message" name="message" placeholder="Type your message here."></textarea>
=======
            <input type="email" name="email" id="" value="youremail@example.com">
            <input type="text" name="subject" id="" value="Subject">
            <input type="text" name="message" id="" value="Enter your message here.">
>>>>>>> parent of c5e58d1 (Working contact section)
            <input type="submit" value="Send">
        </form>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>