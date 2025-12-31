<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih PHP</h1>
    <?php
    
    $fullName = "Ditto Adiansyah";
    $usia = 42;

    echo "Nama : $fullName <br>"; // cara pertama
    echo "Usia : " . $usia . "<br><br><br>"; // cara kedua

    echo "<h2>Contoh</h2>";
    echo "<h4> - Lorem Ipsum Hello World</h4>";
    $kalimat1 = "Lorem Ipsum Hello World";
    echo "Kalimat 1 : $kalimat1 <br>";
    echo "Panjang String Kalimat 1 : " . strlen($kalimat1) . "<br>";
    echo "Jumlah Kata Kalimat 1 : " . str_word_count($kalimat1) . "<br><br><br>";

    echo "<h2>Soal 1</h2>";
    echo "<h4> - PHP Is Never Old</h4>";
    $string = "PHP Is Never Old";
    echo "Panjang String : " . strlen($string) . "<br>";
    echo "Jumlah Kata : " . str_word_count($string) . "<br><br>";

    echo "<h4> - Hello PHP</h4>";
    $first_sentence = "Hello PHP";
    echo "Panjang String : " . strlen($first_sentence) . "<br>";
    echo "Jumlah Kata : " . str_word_count($first_sentence) . "<br><br>";

    echo "<h4> - I'm Ready For The Challenges</h4>";
    $second_sentence = "I'm Ready For The Challenges";
    echo "Panjang Kata = " . strlen($second_sentence) . "<br>";
    echo "Jumlah Kata = " . str_word_count($second_sentence) . "<br><br><br>";

    echo "<h2>Soal 2</h2>";
    echo "<h4> - I Love PHP</h4>";
    $string2 = "I Love PHP";
    echo "Kata Pertama : " . substr($string2, 0, 1) . "<br>";
    echo "Kata Kedua : " . substr($string2, 2, 4) . "<br>";
    echo "Kata Ketiga : " . substr($string2, 7) . "<br><br><br>";

    echo "<h2>Soal 3</h2>";
    $string3 = "PHP is old but sexy!";

    echo "Kalimat : <br> $string3 <br><br>";
    echo "Mengubah Kata Sexy Menjadi Awesome : <br>" . str_replace("sexy", "awesome", $string3); 






    ?>
</body>
</html>