
<style>

body {
    width: 80%;
    margin: auto;
}

.mygtukai {
    display: flex;
    padding: 20px;
}

button {
    display: inline-block;
    text-decoration: none;
    border: 2px solid grey;
    border-radius: 15px;
    padding: 10px 5px;
    transition-duration: 0.4s;
    background-color: white;
    margin: 2px;
}

button:hover {
    color: black;
    background-color: #ededed;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    cursor: pointer;
}

table, th, td {
    border: 1px solid brown;
    padding: 5px;
    border-collapse: collapse;
    
}

th, td {
    text-align: center;
}

</style>

<?php 
// Užduotis "Knygų biblioteka"

// 1. Sukurti ir sustilizuotį tokią lentelę pagal pavyzdį:
// https://codepen.io/motiejus1/pen/rNyWPey
// 2. Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, bei knygos priklausančios kategorijai.
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, kurios turi nuo 5 iki 15 knygų.
// Pavyzdinė informacija apie knygą: pavadinimas, autorius, puslapių skaičius, kategorija
// 3. Virš sukurtos lentelės atvaizduoti tiek mygtukų, kiek yra kategorijų masyve, mygtuko pavadinimas - kategorijos pavadinimas. Mygtukai turi būti atvaizduoti su PHP pagal masyvą. Taip pat sukurti mygtuką "Rodyti visas knygas".
// 4. Masyvo informaciją atvaizduoti lentelėje.
// 5. Sukurti mygtukai turi išfiltruoti knygas. T.y. paspaudus kategorijos mygtuką, lentelėje turi būti rodomos tik tos knygos, kurios priklauso tai kategorijai. Paspaudus mygtuką "Rodyti visas knygas", atvaizduojamos visos knygos.  

echo '<div class="mygtukai">';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="visos">Visos kategorijos</button>
</form>';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="fantastika">Fantastika</button>
</form>';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="detektyvai">Detektyvai</button>
</form>';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="trileriai">Trileriai</button>
</form>';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="klasika">Klasika</button>
</form>';
echo '<form action="knygu_biblioteka.php" method="post"><button type="submit" name="poezija">Poezija</button>
</form>';
echo '</div>';

$knyguKolekcija = array(
    array(
        'pavadinimas' => 'Robotų pasakos',
        'autorius' => 'Stanisław Lem',
        'puslapiuSk' => '200',
        'kategorija' => 'fantastika',
        'kaina' => '19,09 €'

    ),
    array(
        'pavadinimas' => 'Šviesos valdovas',
        'autorius' => 'Roger Zelazny',
        'puslapiuSk' => '320',
        'kategorija' => 'fantastika',
        'kaina' => '12,23 €'

    ),
    array(
        'pavadinimas' => 'Kopa',
        'autorius' => 'Frank Herbert',
        'puslapiuSk' => '728',
        'kategorija' => 'fantastika',
        'kaina' => '18,97 €'

    ),
    array(
        'pavadinimas' => 'MARSIETIS',
        'autorius' => 'Andy Weir',
        'puslapiuSk' => '416',
        'kategorija' => 'fantastika',
        'kaina' => '10,99 €'

    ),
    array(
        'pavadinimas' => 'Trijų kūnų problema',
        'autorius' => 'Liu Cixin',
        'puslapiuSk' => '360',
        'kategorija' => 'fantastika',
        'kaina' => '12,46 €'

    ),

    array(
        'pavadinimas' => 'Fondas ir Imperija',
        'autorius' => 'Isaac Asimov',
        'puslapiuSk' => '328',
        'kategorija' => 'fantastika',
        'kaina' => '11,08 €'

    ),

    array('pavadinimas' => 'Vėjai Kamino saloje', 'autorius' => 'John Grisham', 'puslapiuSk' => '336', 'kategorija' => 'detektyvai', 'kaina' => '11,89 €' ),
    array('pavadinimas' => 'Manęs nebeišvysi', 'autorius' => 'Lesley Pearse', 'puslapiuSk' => '352', 'kategorija' => 'detektyvai', 'kaina' => '11,89 €' ),
    array('pavadinimas' => 'Šešėliuose', 'autorius' => 'Sharon Sala', 'puslapiuSk' => '352', 'kategorija' => 'detektyvai', 'kaina' => '7,19 €' ),
    array('pavadinimas' => 'Psichoterapeutas', 'autorius' => 'B. A. Paris', 'puslapiuSk' => '408', 'kategorija' => 'detektyvai', 'kaina' => '13,86 €' ),
    array('pavadinimas' => 'Bendrininkai', 'autorius' => 'Sandra Brown', 'puslapiuSk' => '400', 'kategorija' => 'detektyvai', 'kaina' => '15,25 €' ),
    array('pavadinimas' => 'Pasirink mane', 'autorius' => 'Tess Gerritsen, Gary Braver', 'puslapiuSk' => '336', 'kategorija' => 'detektyvai', 'kaina' => '9,79 €' ),
    array('pavadinimas' => 'MERGINA TRAUKINY', 'autorius' => 'Paula Hawkins', 'puslapiuSk' => '376', 'kategorija' => 'detektyvai', 'kaina' => '12,59 €' ),
    array('pavadinimas' => 'Metas žudyti', 'autorius' => 'Mason Cross', 'puslapiuSk' => '416', 'kategorija' => 'detektyvai', 'kaina' => '12,95 €' ),

    array('pavadinimas' => 'Melo pokeris
    ', 'autorius' => 'Rachel Abbott', 'puslapiuSk' => '384', 'kategorija' => 'trileriai', 'kaina' => '12,39 €' ),
    array('pavadinimas' => 'Paskutinis atodūsis', 'autorius' => 'Robert Bryndza', 'puslapiuSk' => '336', 'kategorija' => 'trileriai', 'kaina' => '11,89 €' ),
    array('pavadinimas' => 'Apgaulė ', 'autorius' => 'C.L. Taylor', 'puslapiuSk' => '400', 'kategorija' => 'trileriai', 'kaina' => '12,39 €' ),
    

    array('pavadinimas' => 'Ponia Bovari', 'autorius' => 'Gustave Flaubert', 'puslapiuSk' => '416', 'kategorija' => 'klasika', 'kaina' => '13,60 €' ),
    array('pavadinimas' => 'Moterų laimė', 'autorius' => 'Ėmile Zola', 'puslapiuSk' => '416', 'kategorija' => 'klasika', 'kaina' => '16,79 €' ),
    array('pavadinimas' => 'Stouneris', 'autorius' => 'John Williams', 'puslapiuSk' => '416', 'kategorija' => 'klasika', 'kaina' => '11,98 €' ),
    

    array('pavadinimas' => 'Mirabo tiltas', 'autorius' => 'Guillaume Apollinaire', 'puslapiuSk' => '22', 'kategorija' => 'poezija', 'kaina' => '11,19 €' ),
    array('pavadinimas' => 'Reiškiniai', 'autorius' => 'Aratas', 'puslapiuSk' => '310', 'kategorija' => 'poezija', 'kaina' => '12,95 €' ),
    array('pavadinimas' => 'Poetinė Eda', 'autorius' => 'G. Neckel', 'puslapiuSk' => '400', 'kategorija' => 'poezija', 'kaina' => '8,63 €' ),
    array('pavadinimas' => 'Eilėraščiai', 'autorius' => 'Friedrich Holderlin', 'puslapiuSk' => '233', 'kategorija' => 'poezija', 'kaina' => '12,95 €' ),
    


);

$kategorija = 'visos';

if(isset($_POST['visos'])) {
     braizykLenteleVisos($knyguKolekcija);
} else if(isset($_POST['fantastika'])){
    $kategorija = 'fantastika';
    braizykLentele($kategorija, $knyguKolekcija);
} else if(isset($_POST['detektyvai'])){
    $kategorija = 'detektyvai';
    braizykLentele($kategorija, $knyguKolekcija);
  }  else if(isset($_POST['trileriai'])){
        $kategorija = 'trileriai';
        braizykLentele($kategorija, $knyguKolekcija);
    }  else if(isset($_POST['klasika'])){
        $kategorija = 'klasika';
        braizykLentele($kategorija, $knyguKolekcija);
    }  else if(isset($_POST['poezija'])){
        $kategorija = 'poezija';
        braizykLentele($kategorija, $knyguKolekcija);
    } else {
        braizykLenteleVisos($knyguKolekcija);
    }
    
function braizykLentele($kategorija, $knyguKolekcija) {
    $index=1;
    echo '<table>';
    echo '<caption>';
    echo 'Knygų biblioteka';
    echo '</caption>';
    echo '<tr>';
    echo '<th>';
    echo 'Nr.';
    echo '</th>';
    echo '<th>';
    echo 'Pavadinimas';
    echo '</th>';
    echo '<th>';
    echo 'Autorius';
    echo '</th>';
    echo '<th>';
    echo 'Puslapių skaičius';
    echo '</th>';
    echo '<th>';
    echo 'Kategorija';
    echo '</th>';
    echo '<th>';
    echo 'Kaina';
    echo '</th>';
     echo '</tr>';
    foreach($knyguKolekcija as $element) {
        if($element['kategorija']==$kategorija){
            echo '<tr>';
            echo '<td>';
            echo $index;
            echo '</td>';
            echo '<td>';
            echo $element['pavadinimas'];
            echo '</td>';
            echo '<td>';
            echo $element['autorius'];
            echo '</td>';
            echo '<td>';
            echo $element['puslapiuSk'];
            echo '</td>';
            echo '<td>';
            echo $element['kategorija'];
            echo '</td>';
            echo '<td>';
            echo $element['kaina'];
            echo '</td>';
            echo '</tr>';
            $index++;
        }
            
            
        }
        
    echo '</table>';
    }


    function braizykLenteleVisos($knyguKolekcija) {
        $index=1;
        echo '<table>';
        echo '<caption>';
        echo 'Knygų biblioteka';
        echo '</caption>';
        echo '<tr>';
        echo '<th>';
        echo 'Nr.';
        echo '</th>';
        echo '<th>';
        echo 'Pavadinimas';
        echo '</th>';
        echo '<th>';
        echo 'Autorius';
        echo '</th>';
        echo '<th>';
        echo 'Puslapių skaičius';
        echo '</th>';
        echo '<th>';
        echo 'Kategorija';
        echo '</th>';
        echo '<th>';
        echo 'Kaina';
        echo '</th>';
         echo '</tr>';
        foreach($knyguKolekcija as $element) {
                echo '<tr>';
                echo '<td>';
                echo $index;
                echo '</td>';
                echo '<td>';
                echo $element['pavadinimas'];
                echo '</td>';
                echo '<td>';
                echo $element['autorius'];
                echo '</td>';
                echo '<td>';
                echo $element['puslapiuSk'];
                echo '</td>';
                echo '<td>';
                echo $element['kategorija'];
                echo '</td>';
                echo '<td>';
                echo $element['kaina'];
                echo '</td>';
                echo '</tr>';
                $index++;
            }
                
                
            
            
        echo '</table>';
        }




?>




