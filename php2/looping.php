<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP Looping</h1> <br>
    <?php
    echo "<h2>Contoh 1</h2>";
    echo "<h4>LOOPING PERTAMA</h4>";
    echo "<h4>Looping Ganjil 1a</h4>";
    $i = 1;
    do {
        echo "$i - Angka Ganjil <br>";
        $i+=2;
    } while ($i <= 19);

    echo "<h4>Looping Ganjil 1b</h4>";
    for ($a=19; $a >= 1 ; $a-=2) { 
        echo "$a Angka Ganjil <br>";
    }
    echo "<br><br><br>";
    
    echo "<h2>Contoh 2</h2>";
    $random = [23, 50, 70, 66, 100, 124];

    echo "Angka : ";
    print_r($random);
    echo "<br><br>";

    echo "Sisa Bagi 3 : ";
    foreach($random as $r){
        $item[] = $r % 3;
    }
    print_r($item);
    echo "<br><br><br>";

    echo "<h2>Contoh 3</h2>";
    $biodata = [
        ["001", "Rezky", "Laravel"],
        ["002", "Budi", "ReactJS"],
        ["003", "Putra", "VueJS"],
        ["004", "Ardit", "Digital Marketing"],
        ["005", "Musa", "Golang"],
        ["006", "Rahmat", "Laravel"],
        ["007", "Dwi", "ReactJS"],
    ];

    foreach($biodata as $iarray){
        $output = [
            "id" => $iarray[0],
            "nama" => $iarray[1],
            "kelas" => $iarray[2],
        ];

        print_r($output);
        echo "<br>";
    }
    echo "<br><br><br>";

    echo "<h2>Contoh 4</h2>";
    // J = 1
    // K = J (Nilai ambil dari J)
    for ($j=1; $j <=6; $j++) { 
        for ($k=$j; $k <= 6; $k++) { 
            echo $k;# code...
        }
        echo"<br>";
    }

    echo "<br><br><br>";

    /* 

    Soal No 1 

    Looping I Love PHP

    Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 

    dan Looping yang ke dua menurun (Descending).             
    Output: 

    LOOPING PERTAMA

    2 - I Love PHP
    4 - I Love PHP
    6 - I Love PHP
    8 - I Love PHP
    10 - I Love PHP
    12 - I Love PHP
    14 - I Love PHP
    16 - I Love PHP
    18 - I Love PHP
    20- I Love PHP

    LOOPING KEDUA
    20 - I Love PHP
    18 - I Love PHP
    16 - I Love PHP
    14 - I Love PHP
    12 - I Love PHP
    10 - I Love PHP
    8 - I Love PHP
    6 - I Love PHP
    4 - I Love PHP
    2 - I Love PHP

    */ 

    // Jawaban Looping Pertama
    echo "<h2>Soal No 1 - Looping</h2>";
    echo "<h3>I Love PHP - Ascending (meningkat)</h3>";

    $lovePhp = 2;
    do {
        echo "$lovePhp - I Love PHP <br>";
        $lovePhp+=2;
    } while ($lovePhp <= 20);

    echo "<br>";

    //  Jawaban Looping Kedua
    echo "<h3>I Love PHP - Descending (menurun)</h3>";
    for ($lovePhp2=20; $lovePhp2 >= 1 ; $lovePhp2-=2) { 
        echo "$lovePhp2 I Love PHP <br>";
    }
    echo "<br><br><br>";

    /* 

    Soal No 2

    Looping Array Module

    Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.

    Tampung ke dalam array baru bernama $rest 

    */        

    echo "<h2>Soal No 2 - Looping</h2>";
    echo "<h3>Array Modulo</h3>";
    $numbers = [18, 45, 29, 61, 47, 34];

    echo "array numbers: ";
    print_r($numbers);

    // Lakukan Looping di sini        
    echo "<br>";

    echo "Array sisa baginya adalah:  ";
        foreach($numbers as $k){
        $sisaBagi[] = $k % 5;
    }
    print_r($sisaBagi);

    echo "<br>";       
    
    echo "<br><br><br>";


        /* 

            Soal No 3

            Loop Associative Array

            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 

            Setiap item memiliki key yaitu : id, name, price, description, source. 

            

            Output: 

            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 

            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 

            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 

            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )             
        Jangan ubah variabel $items        */

    echo "<h2>Soal No 3 - Looping</h2>";
    echo "<h3>Asociative Array</h3>";

        $items = [

            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 

            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

        ];
        // Output: 
            foreach($items as $karray){
        $output = [
            "id" => $karray[0],
            "nama" => $karray[1],
            "price" => $karray[2],
            "description" => $karray[3],
            "source" => $karray[4],
        ];

        print_r($output);
        echo "<br>";

    }       
    echo "<br><br><br>";






    echo "<h2>Soal No 4 Asterix </h2>";
        /* 

            Soal No 4

            Asterix 5x5

            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 

            Output: 

            * 

            * * 

            * * * 

            * * * * 

            * * * * *

        */
        for ($j=1; $j <=5; $j++) { 
            for ($k=1; $k <= $j; $k++) { 
                echo "*";
        }
        echo "<br>";  
    }

    ?>
</body>
</html> 