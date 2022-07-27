<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Homework in PHP</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homework II</title>
    </head>

    <body>

        <h2>Variables and Conditions</h2>
        <h4 style="color: green;">-------- I.I. Task --------</h4>
        <!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, 
    gimimo metus ir šiuos metus (nebūtinai tikrus). 
    Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių 
    ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį 
    sakinį : "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->

        <?php
        $name = "Ms";
        $surname = "Noo";
        $birthYear = 2010;
        $currentYear = 2022;
        $age = $currentYear - $birthYear;

        echo "<h4>As esu "
            . $name . " "
            . $surname . ". Man yra "
            . $age . " metai(-u).</h4>"
        ?>

        <h4 style="color: green;">-------- I.II. Task --------</h4>
        <!-- Naudokite funkcija Math.random(). Sukurkite du kintamuosius
    ir naudodamiesi funkcija Math.random() jiems priskirkite 
    atsitiktines reikšmes nuo 0 iki 4 (sveiki skaičiai). 
    Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite 
    rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->

        <?php
        $no1 = rand(0, 4);
        $no2 = rand(0, 4);
        $no3 = 0;
        echo "First number " . $no1 . "<br> Second number " . $no2;
        if ($no1 != NULL && $no2 != Null) {
            if ($no1 > $no2) {
                $no3 = round($no1 / $no2);
            } else if ($no1 < $no2) {
                $no3 = round($no2 / $no1);
            } else {
                $no3 = $no2;
            }
            echo "<br> Result " . $no3;
        } else {
            echo "<br> Dalyba is nulio negalima";
        }
        ?>

        <h4 style="color: green;">-------- I.III. Task --------</h4>
        <!-- Naudokite funkcija Math.random(). 
    Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() 
    jiems priskirkite atsitiktines reikšmes nuo 0 iki 25 
    (sveiki skaičiai). Raskite ir atspausdinkite kintamąjį, turintį 
    vidurinę reikšmę. -->

        <?php
        $no1 = rand(0, 25);
        $no2 = rand(0, 25);
        $no3 = rand(0, 25);

        echo $no1 . "<br>" . $no2 . "<br>" . $no3;

        if (($no1 >= $no2 && $no1 <= $no3) ||
            ($no1 <= $no2 && $no1 >= $no3)
        ) {
            echo "<br>Result: " . $no1;
        } else if (($no2 >= $no1 && $no2 <= $no3) ||
            ($no2 <= $no1 && $no2 >= $no3)
        ) {
            echo "<br>Result: " . $no2;
        } else {
            echo "<br>Result: " . $no3;
        }
        ?>

        <h4 style="color: green;">-------- I.IV. Task --------</h4>
        <!-- Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys 
    kintamieji (naudokite ​Math.random()​ funkcija nuo 1 iki 10)  
    (sveiki skaičiai). Parašykite JavaScript programą, kuri 
    nustatytų, ar galima sudaryti trikampį ir atsakymą 
    atspausdintų.  -->

        <?php
        $a = rand(1, 10);
        $b = rand(1, 10);
        $c = rand(1, 10);
        echo $a . "<br>" . $b . "<br>" . $c . "<br>";

        if ((($a + $b) > $c) &&
            (($a + $c) > $b) &&
            (($b + $c) > $a)
        ) {
            echo "Answer: Wuala Triangle!";
        } else {
            echo "Nope not Triangle";
        }
        ?>

        <h4 style="color: green;">-------- I.V. Task --------</h4>
        <!-- Sukurkite keturis kintamuosius ir ​Math.random()​ funkcija 
    sugeneruokite jiems reikšmes nuo 0 iki 2  (sveiki skaičiai).  
    Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
    (sprendimui masyvo nenaudoti). -->

        <?php
        $no1 = rand(0, 2);
        $no2 = rand(0, 2);
        $no3 = rand(0, 2);
        $no4 = rand(0, 2);
        $total0 = 0;
        $total1 = 0;
        $total2 = 0;

        echo $no1 . "<br>" .
            $no2 . "<br>" .
            $no3 . "<br>" .
            $no4 . "<br>";

        if ($no1 == 0) {
            $total0++;
        }
        if ($no2 == 0) {
            $total0++;
        }
        if ($no3 == 0) {
            $total0++;
        }
        if ($no4 == 0) {
            $total0++;
        }
        if ($no1 == 1) {
            $total1++;
        }
        if ($no2 == 1) {
            $total1++;
        }
        if ($no3 == 1) {
            $total1++;
        }
        if ($no4 == 1) {
            $total1++;
        }
        if ($no1 == 2) {
            $total2++;
        }
        if ($no2 == 2) {
            $total2++;
        }
        if ($no3 == 2) {
            $total2++;
        }
        if ($no4 == 2) {
            $total2++;
        }

        echo "Total 0: " . $total0 .
            "<br> Total 1: " . $total1 .
            "<br> Total 2: " . $total2;
        ?>

        <h4 style="color: green;">-------- I.VI. Task --------</h4>
        <!-- Naudokite funkcija Math.random(). Atspausdinkite 3 skaičius 
    nuo -10 iki 10  (sveiki skaičiai). Skaičiai mažesni už 0 turi 
    būti  laužtiniuose skliaustuose [], 0 -  (), didesni už 0 {}.  -->

        <?php
        $no1 = rand(-10, 10);
        $no2 = rand(-10, 10);
        $no3 = rand(-10, 10);

        if ($no1 < 0) {
            echo "Number 1: [" . $no1 . "]<br>";
        } else if ($no1 > 0) {
            echo "Number 1: {" . $no1 . "}<br>";
        } else {
            echo "Number 1: <" . $no1 . "><br>";
        }

        if ($no2 < 0) {
            echo "Number 2: [" . $no2 . "]<br>";
        } else if ($no2 > 0) {
            echo "Number 2: {" . $no2 . "}<br>";
        } else {
            echo "Number 2: <" . $no2 . "><br>";
        }

        if ($no3 < 0) {
            echo "Number 3: [" . $no3 . "]<br>";
        } else if ($no3 > 0) {
            echo "Number 3: {" . $no3 . "}<br>";
        } else {
            echo "Number 3: <" . $no3 . "><br>";
        }
        ?>

        <h4 style="color: green;">-------- I.VII. Task --------</h4>
        <!-- Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip 
    už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR 
    - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių 
    kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina 
    perkama. Žvakių kiekį generuokite ​Math.random()​ funkcija 
    nuo 5 iki 3000.  (sveiki skaičiai) -->

        <?php
        $candleTot = rand(5, 3000);
        $startingPrice = $candleTot * 1;
        $price3 = $startingPrice - ($startingPrice * 0.03);
        $price4 = $startingPrice - ($startingPrice * 0.04);

        if ($startingPrice <= 1000) {
            echo "Candles: " . $candleTot .
                ". Price: " . $startingPrice . " Eur";
        } else if ($startingPrice > 1000 && $startingPrice <= 2000) {
            echo "Candles: " . $candleTot .
                ". Price: " . $price3 . " Eur<br>";
        } else {
            echo "Candles: " . $candleTot .
                ". Price: " . $price4 . " Eur<br>";
        }
        ?>

        <h4 style="color: green;">-------- I.VIII. Task --------</h4>
        <!-- Naudokite funkcija Math.random(). Sukurkite tris 
    kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100  
    (sveiki skaičiai). Paskaičiuokite jų aritmetinį vidurkį. 
    Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra 
    mažesnės nei 10 arba didesnės nei 90. Abu vidurkius 
    atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus. -->

        <?php
        $status = 0;
        $no1;
        $no2;
        $no3;
        $result2;
        $result1;
        $result1R;
        $result2R;

        $no1 = rand(0, 100);
        $no2 = rand(0, 100);
        $no3 = rand(0, 100);
        $result1 = (($no1 + $no2 + $no3) / 3);
        $result1R = round($result1);

        echo "Number 1: " . $no1 .
            "<br>Number 2: " . $no2 .
            "<br>Number3: " . $no3 .
            "<br>First result: " . $result1R . "<br>";

        if ($no1 < 10) {
            $no1 = 0;
            $status++;
        }
        if ($no2 < 10) {
            $no2 = 0;
            $status++;
        }
        if ($no3 < 10) {
            $no3 = 0;
            $status++;
        }
        if ($no1 > 90) {
            $no1 = 0;
            $status++;
        }
        if ($no2 > 90) {
            $no2 = 0;
            $status++;
        }
        if ($no3 > 90) {
            $no3 = 0;
            $status++;
        }

        echo "Numbers not to count: " . $status . "<br>";
        $result2 = (($no1 + $no2 + $no3) / (3 - $status));
        $result2R = round($result2);
        echo "Second result: " . $result2R;
        ?>

        <h4 style="color: green;">-------- I.IX. Task --------</h4>
        <!-- Padarykite skaitmeninį laikrodį, rodantį valandas, 
    minutes ir sekundes. Valandom, minutėm ir sekundėm 
    sugeneruoti panaudokite funkciją Math.random(). 
    Sugeneruokite skaičių nuo 0 iki 300  (sveiki skaičiai). 
    Tai papildomos sekundės. Skaičių pridėkite prie jau 
    sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po 
    sekundžių pridėjimo ir pridedamų sekundžių skaičių. -->

        <?php
        $hours;
        $minutes;
        $seconds;
        $newHours;
        $newMinutes;
        $newSeconds;
        $hoursRP;
        $minutesRP;
        $secondsRP;
        $days;
        $extraSeconds;
        $extraSecondsR;
        $kiekPersikelia;
        $kiekPersikelia2;
        $kiekPersikelia3;

        $hours = rand(0, 24);
        $minutes = rand(0, 60);
        $seconds = rand(0, 60);

        echo "<br>Hours: " . $hours . "<br>";
        echo "<br>Minutes: " . $minutes . "<br>";
        echo "<br>Seconds: " . $seconds . "<br>";
        echo "<br>...............<br>";

        if ($hours < 10) {
            $hoursRP = "0" . $hours;
        } else {
            $hoursRP = $hours;
        }

        if ($minutes < 10) {
            $minutesRP = "0" . $minutes;
        } else {
            $minutesRP = $minutes;
        }

        if ($seconds < 10) {
            $secondsRP = "0" . $seconds;
        } else {
            $secondsRP = $seconds;
        }

        echo "<br>" . $hoursRP . ":" . $minutesRP . ":" . $secondsRP . "<br>";

        echo "<br>...............<br>";
        $extraSeconds = rand(0, 300);
        echo "<br>Pridedamos sekundes: " . $extraSeconds . "<br>";

        if (($seconds + $extraSeconds) >= 60) {
            $newSeconds = ($seconds + $extraSeconds) % 60;
            $kiekPersikelia = round(($seconds + $extraSeconds - $newSeconds) / 60);
            $seconds = $newSeconds;
        } else {
            $seconds = $seconds + $extraSeconds;
            $days = 0;
        }

        if (($minutes + $kiekPersikelia) >= 60) {
            $newMinutes = ($minutes + $kiekPersikelia) % 60;
            $kiekPersikelia2 = round(($kiekPersikelia + $minutes - $newMinutes) / 60);
            $minutes = $newMinutes;
        } else {
            $minutes = $minutes + $kiekPersikelia;
            $days = 0;
        }

        if (($hours + $kiekPersikelia2) >= 24) {
            $newHours = ($hours + $kiekPersikelia2) % 24;
            $kiekPersikelia3 = round($kiekPersikelia2 + $hours - $newHours) / 24;
            $days = $kiekPersikelia3;
            $hours = $newHours;
        } else {
            $days = 0;
        }

        if ($hours < 10) {
            $hours = "0" . $hours;
        }

        if ($minutes < 10) {
            $minutes = "0" . $minutes;
        }

        if ($seconds < 10) {
            $seconds = "0" . $seconds;
        }
        if ($days < 10) {
            $days = "0" . $days;
        }

        echo "<br>...............<br>";
        echo $days . ":" . $hours . ":" . $minutes . ":" . $seconds . "<br>";
        ?>

        <h4 style="color: green;">-------- I.X. Task --------</h4>
        <!-- Naudokite funkcija Math.random(). Sugeneruokite 6 kintamuosius 
    su atsitiktinem reikšmėm nuo 1000 iki 9999  (sveiki skaičiai). 
    Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios 
    iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA. -->
        <?php
        $no1 = rand(1000, 9999);
        $no2 = rand(1000, 9999);
        $no3 = rand(1000, 9999);
        $no4 = rand(1000, 9999);
        $no5 = rand(1000, 9999);
        $no6 = rand(1000, 9999);

        // First round
        if ($no1 < $no2) {
            $temp = $no1;
            $no1 = $no2;
            $no2 = $temp;
        }
        if ($no2 < $no3) {
            $temp = $no2;
            $no2 = $no3;
            $no3 = $temp;
        }
        if ($no3 < $no4) {
            $temp = $no3;
            $no3 = $no4;
            $no4 = $temp;
        }
        if ($no4 < $no5) {
            $temp = $no4;
            $no4 = $no5;
            $no5 = $temp;
        }
        if ($no5 < $no6) {
            $temp = $no5;
            $no5 = $no6;
            $no6 = $temp;
        }

        // Second round
        if ($no1 < $no2) {
            $temp = $no1;
            $no1 = $no2;
            $no2 = $temp;
        }
        if ($no2 < $no3) {
            $temp = $no2;
            $no2 = $no3;
            $no3 = $temp;
        }
        if ($no3 < $no4) {
            $temp = $no3;
            $no3 = $no4;
            $no4 = $temp;
        }
        if ($no4 < $no5) {
            $temp = $no4;
            $no4 = $no5;
            $no5 = $temp;
        }

        // Third round
        if ($no1 < $no2) {
            $temp = $no1;
            $no1 = $no2;
            $no2 = $temp;
        }
        if ($no2 < $no3) {
            $temp = $no2;
            $no2 = $no3;
            $no3 = $temp;
        }
        if ($no3 < $no4) {
            $temp = $no3;
            $no3 = $no4;
            $no4 = $temp;
        }

        // Fourth round
        if ($no1 < $no2) {
            $temp = $no1;
            $no1 = $no2;
            $no2 = $temp;
        }
        if ($no2 < $no3) {
            $temp = $no2;
            $no2 = $no3;
            $no3 = $temp;
        }

        // Fith round
        if ($no1 < $no2) {
            $temp = $no1;
            $no1 = $no2;
            $no2 = $temp;
        }

        echo ($no1 . " " .
            $no2 . " " .
            $no3 . " " .
            $no4 . " " .
            $no5 . " " .
            $no6);
        ?>

    </body>

    </html>

</body>

</html>