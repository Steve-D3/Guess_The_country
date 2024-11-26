<?php

include "data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;

        }

        section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <h1>Guess the country !!</h1>

    <section>
        
    </section>
    <section>

        <a> <button type="button"> Peru </button></a> <br>
        <a> <button type="button"> Afghanistan </button></a> <br>
        <a> <button type="button"> India </button></a> <br>
        <a> <button type="button"> Mongolia </button></a> <br>
    </section>

    <section>
        <form action="index.php" methode="post">
            <label for="photo">Country to guess >(°-°)/:</label> <br>



    </section>


    </form>


</body>

</html>