<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Contact Us</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>

    <div class="contactus-main">
        <div class="contactus-left">
            <h1>Contact Us</h1>
            <p>If you have any enquires, please don’t hesitate to contact us. You’ll hear from us shortly. <br>
                Thank you for your patience.</p>
            <br />
            <form action="sendmsg.php">
                <label for="email">E-mail:</label><br>
                <input type="text" id="email" name="email" placeholder="Enter your E- mail here.." required><br>
                <label for="message">Messages:</label><br>
                <input type="text" id="message" name="message" placeholder="Enter your message here.." required><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="contactus-right">
            <div class="contactus-container">
                <img src="./img/Contact Us/Email Icon.png">
                <p>salesnservices@footwear.com <br>
                We'll reply within one business day</p>
            </div>
            <div class="contactus-container">
                <img src="./img/Contact Us/Smartphone Icon.png">
                <img src="./img/Contact Us/Whatsapp Icon.png">
                <p>012-345 6789 <br>
                24 hours a day, 7 days a week</p>
            </div>
            <div class="contactus-container">
                <img src="./img/Contact Us/Pinpoint Icon.png">
                <p>Lot 1-23, Jalan Bukit Bintang, 55100,<br>
                Kuala Lumpur, Wilayah Persekutuan <br>
                Kuala Lumpur. <br>
                Operation Hour: 10am - 9pm <br>
                (Monday - Sunday)</p>
            </div>
        </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body>
</html>