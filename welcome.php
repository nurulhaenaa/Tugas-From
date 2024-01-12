<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <h3>Anda telah bergabung sebagai: </h3>
    <?php
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $namaLengkap = $firstName . " " . $lastName;
    echo "<p>Nama Lengkap: $namaLengkap</p>";
    ?>

    <br><?php $gender = $_POST["gender"];
        echo "<p>jenis Kelamin: $gender</p>";
    ?>


    <br><?php  $nationality = $_POST["nationality"];
        echo "<p>Kewarganegaraan: $nationality</p>";
      ?>

    <br><?php $bahasa = $_POST['languange'];
        echo "<p>Bahasa yang dikuasai:" . implode(", ", $bahasa) . "</p>";
    ?>

    <br><?php $bio = $_POST["bio"];
        echo "<p>Bio : $bio</p>";
    ?>
</body>
</html>