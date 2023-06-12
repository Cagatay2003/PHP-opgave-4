<?php 

//opdracht 1

for ($num = 0; $num <= 50; $num++) {
    echo $num . "\n";
}

//opdracht 2


$klasgenoten = array(
  "Toei",
  "Kevin",
  "nourdinne",
  "mohammed karimi",
  "Sofyan",
  "amrabat",
  "amine",
  "Jules",
  "safa",
  "viza"
);

foreach ($klasgenoten as $naam) {
  echo $naam . "<br>";
}


//opdracht 3

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

echo 'Maand 1 is '.$maanden[0].'.<br />';
echo 'Maand 2 is '.$maanden[1].'.<br />';
echo 'Maand 3 is '.$maanden[2].'.<br />';
echo 'Maand 4 is '.$maanden[3].'.<br />';
echo 'Maand 5 is '.$maanden[4].'.<br />';
echo 'Maand 6 is '.$maanden[5].'.<br />';
echo 'Maand 7 is '.$maanden[6].'.<br />';
echo 'Maand 8 is '.$maanden[7].'.<br />';
echo 'Maand 9 is '.$maanden[8].'.<br />';
echo 'Maand 10 is '.$maanden[9].'.<br />';
echo 'Maand 11 is '.$maanden[10].'.<br />';
echo 'Maand 12 is '.$maanden[11].'.<br />';

foreach ($maanden as $maand) {
    echo $maand;
}

?>