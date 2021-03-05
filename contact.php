<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/components.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "./styles/contact.css">
    <link rel="icon" href="./img/web_iconMain.png" type="image/x-icon">
    <title>Contact Us</title>
</head>

<body>
    <?php include "./component/header.php"; ?>
    <?php include "./component/navigator.php"; ?>

<div class="contactus-main" style="margin-left:50px">
    <div class="left">
        <h1 class="contactus-heading">Contact Us</h1>
        <p>If you have any enquires, please don’t hesitate to contact us. You’ll hear from us shortly. Thank you for your patience.</p>
        <br/>

        <form>
            <label for = "email">E-mail:<br/></label>
            <input type = "text" id = "email" name = "email" placeholder = "Enter your E- mail here.."> 
            <br/>
            <label for = "message">Messages:<br/></label>
            <input type = "text" id = "message" name = "message" placeholder = "Enter your message here..">
            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="right" style = "margin-top: 3em">
    
        <div class = "contactus-container">
            <div style = "text-align:right">
                <img style = "margin: 0 0 15px 0;" src = "./img/Contact Us/Email Icon.png" width="75" height="50">
            </div>
                <p class = "right"><b>salesnservices@footwear.com</b><br/>
                We'll reply within one business day<br/>
                </p>
        </div>

        <div class = "contactus-container">
        <div style = "text-align:right">
            <img style = "margin: 0 0 15px 0;" src = "./img/Contact Us/Smartphone Icon.png" width="75" height="75">
            <img style = "margin: 0 0 15px 0;" src = "./img/Contact Us/Whatsapp Icon.png" width="75" height="75">
        </div>
            <p class = "right"><b>012-345 6789</b><br/>
            24 hours a day, 7 days a week<br/>
            </p>
        </div>

        <div class = "contactus-container">
            <div style = "text-align:right">
                <img style = "margin: 0 0 15px 0;" src = "./img/Contact Us/Pinpoint Icon.png" width="70" height="70">
            </div>
                <p class = "right"><b>Lot 1-23, Jalan Bukit Bintang, 55100,<br/>
                Kuala Lumpur, Wilayah Persekutuan<br/>
                Kuala Lumpur.</b><br/>
                Operation Hour: 10am - 9pm<br/>
                (Monday - Sunday)<br/>
                </p>
        </div>
    </div>
</div>

    <?php include "./component/footer.php"; ?>
</body>

</html>