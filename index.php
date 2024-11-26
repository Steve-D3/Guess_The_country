<?php

include "data.php";

if(isset($_POST["button"])){
    echo "success";
} else {
    echo "error";
}

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

            <label for="photo">Country to guess >(°-°)/:</label> <br>
            
            <img src= "<?php $randomIndex = mt_rand(0, count($data) - 1); echo $data[$randomIndex]['image']; ?>" >

    </section>

    <section>
        <form action="index.php" method="post">
            <button type="submit" name="submit" value="Peru" class="btn btn-primary">Peru</button> <br>
            <button type="submit" name="submit" value="Afghanistan" class="btn btn-primary">Afghanistan</button> <br>
            <button type="submit" name="submit" value="India" class="btn btn-primary">India</button> <br>
            <button type="submit" name="submit" value="Mongolia" class="btn btn-primary">Mongolia</button> <br>
         </form>
    </section>



</body>

</html>