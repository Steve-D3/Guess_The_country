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
echo $data[0]["url"];
print '</pre>';





function getData(): array
{
    global $db;
    $sql = "SELECT * FROM photos WHERE country_id = 4";
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
    <title>Document</title>
</head>

<body>


    <ul>
        <? foreach ($data as $country): ?>
            <li><img src="<?echo $country["url"]; ?>" alt=""></li>
            <p><?echo $country["id"]; ?></p>
        <? endforeach; ?>
    </ul>
    <h2>test</h2>

</body>

</html>