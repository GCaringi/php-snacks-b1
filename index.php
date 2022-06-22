<?php

/*-------------
     Snack 1 
--------------*/
// header('Content-type: text/plain');
echo "Snack-1\n";
$day = [
    [
        "home" => "Celtics",
        "away" => "Lakers",
        "pt_home" => "110",
        "pt_away" => "84",
    ],
    [
        "home" => "Bulls",
        "away" => "Pistons",
        "pt_home" => "98",
        "pt_away" => "95",
    ],
    [
        "home" => "Warriors",
        "away" => "Jazz",
        "pt_home" => "132",
        "pt_away" => "81",
    ],
    [
        "home" => "Nets",
        "away" => "Hawks",
        "pt_home" => "54",
        "pt_away" => "73",
    ],
    [
        "home" => "Bucks",
        "away" => "Raptors",
        "pt_home" => "102",
        "pt_away" => "101",
    ],
];

for ($i = 0; $i < count($day); $i++){
    echo $day[$i]['home'] ." - " .$day[$i]['away'] ." | " .$day[$i]['pt_home'] ." - " .$day[$i]['pt_away'] ."\n";

}


/*-------------
     Snack 2 
--------------*/
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$name_pattern = "/^([a-z])[a-z]+([a-z])$/i";
$mail_pattern = "/^(\w+)@{1}(\w+)\.{1}(\D{2,3}$)/i";
$age_pattern = "/^[1]*[1-9]{0,1}[0-9]$/";

if (preg_match($name_pattern, $name) && preg_match($mail_pattern, $mail) && preg_match($age_pattern, $age)){
    echo "Accesso Riuscito";
}else{
    echo "Accesso Negato";
}

?>