<?php

include "data.php";

$randomIdx = array_rand($data);

if ($_POST["btn"] == $data[$randomIdx]["name"]){
    echo "correct ----- ";
}
else {
    echo "wrong";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the country</title>
    <link rel="stylesheet" href="btn.css">
    <style>
        main {
            font-family: monospace;
            display: grid;
            background-color: #F2EBE3;

            width: 80wh;
            height: 80vh;
        }
        section {
            &:nth-child(1){
                text-align: center;

            }

            &:last-child{
                display: grid;
                text-align: center;

            
            }
        }
        img {
            height: 500px;
            width: 500px;
        }
    </style>
</head>

<body>
    <main>
        <section>
        <h2>Guess the Country</h2>
            <img src="<? echo $data[$randomIdx]["url"]; ?>" alt="">
        </section>

        <h2>Index ---> <? echo $randomIdx ?></h2>
        <section>
            <form method="post">
                <button type="submit" name="btn" value="Peru" class="button-28">Peru</button>
                <button type="submit" name="btn" value="Mongolia" class="button-28">Mongolia</button>
                <button type="submit" name="btn" value="Afghanistan" class="button-28">Afghanistan</button>
                <button type="submit" name="btn" value="India" class="button-28">India</button>
            </form>
        </section>
    </main>

</body>

</html>