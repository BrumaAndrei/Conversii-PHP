<?php 

        echo 'Rezultatul este :' .((12 + 5) * (32 - 25) - (55 + 28));  // 36
        echo "</br>";
        echo 'Rezultatul este :' . (11 * ((25 - 14) + (2 + 3) - (8 + 2)));  // 66
        echo "</br>";
        echo 'Rezultatul este :' . 12 / (3 + 1);   // 3
        echo "</br>";
        echo 'Rezultatul este :' . (12 / 3) + 5 - 3;  // 6
        echo "</br>";
        echo 'Rezultatul este :' . pow(4,2);  // 16
        echo "</br>";
        echo 'Rezultatul este :' . 4 * pow(3,3) + 7;   // 115
        echo "</br>";
        echo 'Rezultatul este :' . ((10 / 2) +  (7 % 4) * (5 % 2)); // 8
        echo "</br>";
        echo 'Rezultatul este :' . number_format((12 * pow(3,4) + pow(2,2) + (6 / 3 )));  // 978


        
        echo  "</br>";

        echo  'Rezultatul este : ' . number_format(6.1230);
       
        echo  "</br>";

        echo number_format(426095.4729, 2, ".", ",");  
         /* acesta este un exemplu pentru functia number_format care contine toti parametrii. Numarul va fi formatat la mii cu virgula; dupa punct adica separatorul de zecimale va contine exact 2 zecimale cat am si specificat. 
          */

        echo  "</br>";

        /* String-uri => text */

     //   Exemple de afisare a textului

        // 1 . Adaugand o variabila

        $name = "Andrei";
        echo $name; // afisam Andrei => Putem folosi atat ghilimele duble cat si simple, dar nu COMBINATE!, ca produce o eroare fatala
        echo  "</br>";
         echo  "</br>";

        // 2. Adaugand 2 variabile si folosind simbolul .= ( punct si egal )
        $name_1 = "Andrei";
        $name_2 = "Hello! ";

      echo  $name_2 . $name_1;  // va afisa Hello! Andrei
      echo  "</br>";
       echo  $name_2;
       echo  "</br>";

        // 2 Varianta 2 de la aceasta metoda utilizand doar . ( simbolul unirii )
        echo  "</br>";
         echo  "</br>";
        $n = "Hey!";
        $b = "Andrei";

        echo $n . " " . $b;
        echo  "</br>";
        echo  "</br>";

        // Utilizarea Heredoc


echo <<< Deyu
Utilizand aceasta metoda putem afisa un string adica prin Heredoc
afara ploua
un alt rand de text
Deyu;
   

// Newdoc

echo  "</br>";
echo  "</br>";

echo <<< 'Andrei'
Textul la Newdoc, diferenta dintre acestea este ca la Heredoc nu se folosesc ghilimele, dar la Newdoc se folosesc
alt rand nou
Andrei;

echo  "</br>";
echo  "</br>";

        // ARRAY Asociativ

        $member = [
            'id'=> 1,
            'name'=>'Andrei',
            'city'=>'Bistrita',
            'occupation' =>'programmer',

        ];

        // ID => Key  => ( operator de asociere )
        // 1 => Valoare


        // Pentru a afisa putem folosi un foreach, dar momentan nu am trecut asa ca utilizam echo

        // afisare
        echo  'Numele este :' .$member['name']; // afisam Numele intre paranteze patrate punem key ( name ) => intre ghilimele
        echo  "</br>";
        echo   'Provine din  : '. $member['city']; // afisam Tara de origine intre paranteze patrate punem key ( country )=> intre ghilimele
         echo  "</br>";
        echo   'Ocupatie  : '. $member['occupation'];
        echo  "</br>";

    // Array indexat

        // lista de cumparaturi
        echo  "</br>";

        $list = ['Ciuperci','Zahar','Lapte','Unt' , 'Lamai']; // 3 elemente in lista !! ( totul incepe de la 0 nu de la 1 )

        echo $list[0]; 
        echo  "</br>";
        echo $list[3]; 
        echo  "</br>";

        echo "<pre>"; // am afisat mai frumos
      

        var_dump($list); // am afisat cu var_dump => keya si valoarea


    // Array in array
        echo  "</br>";

    $lista_masini = array(
        array('Model' => 'BMW', 'TOYOTA'),
        array('Model' => 'SEAT', 'AUDI'),
        array('Model' => 'BMW', 'ford', 'lexus', 'vw', 'honda', 'sub_array' => array('roti' => 4, 'stergatoare' => 3), 'sub_sub_array' => array('usi' => 5))
);

echo $lista_masini[2]['Model']; //  BMW 
echo "<br>";
echo $lista_masini[1]['Model']; // SEAT
echo "<br>";
echo $lista_masini[1][0]; // AUDI
echo "<br>";
echo $lista_masini[2]['sub_array']['stergatoare']; // 3
echo "<br>";
echo $lista_masini[2]['sub_array']['roti']; // 4 
echo "<br>";
echo $lista_masini[2]['sub_sub_array']['usi']; // 5
echo "<br>";
echo "<br>";

    // Actualizarea unui array + adaugare unei noi valori

    $famili = array('Mama','Tata');
    echo $famili[0]; // afisam Mama
    echo "<br>";
    echo $famili[0] = "Sora"; // actualizam Mama cu Sora
    echo "<br>";
    echo $famili[2] = "fratele mic";
    echo "<br>";
    echo $famili[3] = "sora mai mare";
    echo "<br>";
        echo "<pre>";
        var_dump($famili);




echo "<br>";
echo "<br>";


// Aici vom face o conversie din Celsius in  Fahrenheit cu formula data: F = (C * 1.8) + 32. Convertim 24 de grade Celsius in Fahrenheit: 

$conversie = (25 * 1.8) + 32;
echo 'Rezultatul conversiei 24 de grade Celsius in Fahrenheit este: ' . $conversie;

echo "<br>";
echo "<br>";

// In acest exercitiu vom calcula cat la suta din 500 reprezinta numarul 125. Stim ca x % din y = x / 100 * y;

$procent = 125 / 100 * 500;
echo 'Rezultatul calculului cat la suta din 500 reprezinta numarul 125 este: ' . $procent;

echo "<br>";
echo "<br>";

// In acest exercitiu pentru a calcula adunarea acelor stringuri vom folosi functia intval() pentru a converti stringul la valoare numerica.
// Altfel acele stringuri nu le putem aduna decat sa le concatenam.

$adunare = intval("2023") + intval("douamidouazecisitrei") + intval("36star3");
echo 'Rezultatul adunarii "2023" + "douamidouazecisitrei" + "36star3" este: ' . $adunare;