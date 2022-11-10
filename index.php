<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Chatbox</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Chatbox</h1>
        </header>

        <div id="chatbox">
            <ul>
                <li class="message"><span>10:15 PM - </span>Jonny: Yo. What's cracking?</li>
                <li class="message"><span>10:15 PM - </span>Jonny: Yo. What's cracking?</li>
                <li class="message"><span>10:15 PM - </span>Jonny: Yo. What's cracking?</li>
                <li class="message"><span>10:15 PM - </span>Jonny: Yo. What's cracking?</li>
            </ul>
        </div>

        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="message" placeholder="Enter A Message">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>