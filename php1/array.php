<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih Array</h1> <br>
    <?php
    echo "<h2>Contoh 1</h2>";
    $trainer = ["Rezky", "Abdul", "Thio", "Fikri", "Abduh", "Marta", "Budi", "Joko"];
    print_r($trainer);
    echo "<br><br><br>";


    echo "<h2>Contoh 2</h2>";
    echo "Total Trainer : " .count($trainer);

    echo "<ol>";
    echo "<li> " . $trainer[0] ."</li>";
    echo "<li> " . $trainer[1] ."</li>";
    echo "<li> " . $trainer[2] ."</li>";
    echo "<li> " . $trainer[3] ."</li>";
    echo "<li> " . $trainer[4] ."</li>";
    echo "<li> " . $trainer[5] ."</li>";
    echo "<li> " . $trainer[6] ."</li>";
    echo "<li> " . $trainer[7] ."</li>";
    echo "</ol>";
    echo "<br><br>";

    echo "<h2>Contoh 3</h2>";
    $bioTrainer = [
        ["id" => "001", "Nama" => "Rezky", "Keahlian" => "Laravel"],
        ["id" => "002", "Nama" =>  "Iqbal", "Keahlian" =>  "VueJS"],
        ["id" => "003", "Nama" =>  "Abdul", "Keahlian" =>  "Golang"],
        ["id" => "004", "Nama" =>  "Abduh", "Keahlian" =>  "NodeJS"],
        ["id" => "005", "Nama" =>  "Fikri", "Keahlian" =>  "Digital Marketing"],
        ["id" => "006", "Nama" =>  "Asep", "Keahlian" =>  "Wordpress"],
    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";
    echo "<br>";

    echo "<h4>Contoh Menampilkan Nama Abduh</h4>";
    echo $bioTrainer[3]["Nama"];
    echo "<h4>Contoh Menampilkan Keahlian Fikri</h4>";
    echo $bioTrainer[4]["Keahlian"];
    echo "<br><br><br><br>";


    echo "<h2>Soal 1</h2>";
    echo "<h4>Menampilkan Array Kelompok Kids</h4>";
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    print_r($kids);
    echo "<br><br>";

    echo "<h4>Menampilkan Array Kelompok Adults</h4>";
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    print_r($adults);
    echo "<br><br><br>";

    echo "<h2>Soal 2</h2>";
    echo "<h4>Cast Stranger Things: </h4>";
    echo "<h4>Menampilkan Panjang Array Dari Kids</h4>";
    echo " - Total Kids: "; // Berapa panjang array kids
    echo "<ol>";
    echo "<li> " . $kids[0] ."</li>";
    echo "<li> " . $kids[1] ."</li>";
    echo "<li> " . $kids[2] ."</li>";
    echo "<li> " . $kids[3] ."</li>";
    echo "<li> " . $kids[4] ."</li>";
    echo "<li> " . $kids[5] ."</li>";
    echo "</ol>";
    echo "<br>";

    echo "<h4>Menampilkan Panjang Array Dari Adults</h4>";
    echo " - Total Adults: ";
    echo "<ol>";
    echo "<li> " . $adults[0] ."</li>";
    echo "<li> " . $adults[1] ."</li>";
    echo "<li> " . $adults[2] ."</li>";
    echo "<li> " . $adults[3] ."</li>";
    echo "<li> " . $adults[4] ."</li>";
    echo "</ol>";
    echo "<br><br>";

    echo "<h2>Soal 3</h2>";
    echo "<h4>Menyusun data-data dalam bentuk Asosiatif Array di dalam Array Multidimensi</h4>";
        $bioTrainer = [
        ["Name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"],
        ["Name" =>  "Mike Wheeler", "Age" => "12", "Aliases" =>  "Dungeon Master", "Status" => "Alive"],
        ["Name" =>  "Jim Hopper", "Age" => "43", "Aliases" =>  "Chief Hopper",  "Status" => "Deceased"],
        ["Name" =>  "Eleven", "Age" => "12", "Aliases" =>  "El",  "Status" => "Alive"],

    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";
    echo "<br>";

    echo "<br><br><br>";
    ?>
</body>
</html>