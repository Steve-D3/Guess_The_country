<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'guess_the_country';
$db_port = 8889;

try {
    $db = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br />";
    die();
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);


$data = getData();
print '<pre>';
print_r($data);
echo get_random_index($data);
print '</pre>';



function get_random_index(array $data){
    $length = count($data);
    return random_int(0, $length-1);
}

function getData(): array
{
    global $db;
    $sql = "SELECT photos.id, photos.url, country.name FROM photos
    LEFT JOIN country
    on photos.country_id = country.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


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
        <img src="<?echo $data[get_random_index($data)]["url"];?>" alt="">
    </section>

    <h2>test</h2>

</body>

</html>