<?php
include 'database.php';

// Create SELECT query
$query = 'SELECT * FROM chatbox';
$result = mysqli_query($con, $query);

?>

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
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <li class="message"><span><?= $row['post_time'] ?> - </span><strong><?= $row['user'] ?></strong>: <?= $row['content'] ?></li>
                <?php endwhile; ?>
            </ul>
        </div>

        <div id="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?= $_GET['error'] ?></div>
            <?php endif; ?>
            
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="message" placeholder="Enter A Message">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>