<?php
include "data.php";

$randomIdx = array_rand($data);

if (isset($_POST["btn"])) {
    if ($_POST["btn"] == $data[$randomIdx]["name"]) {
        echo "correct";
    } else {
        echo "wrong";
    }
}


print '<pre>';
print_r($_POST);
print '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the country</title>
    <link rel="stylesheet" href="btn.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }
        main {
            font-family: monospace;
            display: grid;
            background-color: #F2EBE3;

            margin: auto auto;
            width: 80vh;
            height: 80vh;

            text-align: center;
        }

        section {
            &:first-child {
                h2 {
                    margin-bottom: 2rem;
                }
                text-align: center;

            }

            &:last-child {
                display: grid;
                gap: 2rem;
                text-align: center;


            }
        }

        img {
            height: 500px;
            width: 500px;
            border-radius: 2rem;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <h2>Guess the Country</h2>
            <img src="<? echo $data[$randomIdx]["url"]; ?>" alt="">
        </section>

        <h2>Info: </h2>
        <pre>
            <? echo $data[$randomIdx]["id"] . "\n" ?>
            <? echo $data[$randomIdx]["name"] ?>
        </pre>
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