<?php

include "data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the country</title>
    <style>
        img {
            height: 500px;
            width: 500px;
        }
    </style>
</head>

<body>

    <section>
        <img src="<? echo $data[$randomIdx]["url"]; ?>" alt="">
    </section>

    <h2>Index ---> <?echo $randomIdx?></h2>
    <form method="post">
        <button type="submit" name="btn" value="Peru">Peru</button>
        <button type="submit" name="btn" value="Mongolia">Mongolia</button>
        <button type="submit" name="btn" value="Afghanistan">Afghanistan</button>
        <button type="submit" name="btn" value="India">India</button>
    </form>

</body>

</html>