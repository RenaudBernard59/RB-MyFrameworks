<?php
///////////////////////
$_GET['nom']; //Texte
$_GET['pass']; //Texte
$_GET['longtext']; //Texte
///////////////////////
$_GET['mail']; //Mail
$_GET['lien']; //URL
$_GET['phone']; //tel
$_GET['age']; //INT[1-120]
$_GET['position']; //INT 0, 20, 40, 60, 80, 100
$_GET['couleur']; // hexa
$_GET['recherche']; //Texte
///////////////////////
$_GET['birthdate']; //date renvoie aaa-mm-jj
$_GET['lever']; //time hh:mm ou hh:mm:ss.nn
$_GET['semaine']; // aaaaWss
$_GET['lemois']; // aaa-mm
$_GET['heureailleurs']; // aaa-mm-jj-Thh:mmZ ou aaa-mm-jj-Thh:mm:ss.nnZ
$_GET['heurelocale']; // aaa-mm-jj-Thh:mm ou aaa-mm-jj-Thh:mm:ss.nn
///////////////////////
$_GET[array('voyellea', 'voyellee', 'voyelley')]; //checked 1-n
$_GET['voyelleunique']; //checked 1
$_GET['pays']; //checked 1
$_GET['france']; //checked 1
$_GET['payscontinent']; //checked 1
///////////////////////

//Filtres
<?php

$options = array(
    'nom' => FILTER_SANITIZE_STRING,
    'pass' => FILTER_SANITIZE_STRING,
	'longtext' => FILTER_SANITIZE_STRING,
    'mail' => FILTER_VALIDATE_EMAIL,
	'lien' => FILTER_VALIDATE_URL,
	'phone' => (?),
	'position' => FILTER_VALIDATE_INT,
	'couleur' => FILTER_FLAG_ALLOW_HEX,
	'recherche' => (?), FILTER_SANITIZE_STRING,

	'age' => (?),
	'age' => (?),
	'age' => (?),
    'age' => (?), 
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
    'age' => (?), 
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
    'age' => (?), 
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
    'age' => (?), 
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
	'age' => (?),
);



function telValidator($numeroTelephone) {

	function nettoyerNumero($numeroTelephone) {
    //Enlever tous les caractères non numériques.
    $numeroTelephone = preg_replace('`[^0-9]`', '', $numeroTelephone);
    //Ajout de zéros si besoin.
    $numeroTelephone = str_pad($numeroTelephone, 10, '0', STR_PAD_LEFT);
    return $numeroTelephone;
	}

	var_dump(filter_var($numeroTelephone, FILTER_CALLBACK, array('options' => 'nettoyerNumero')));

	function validerNumero($numberPhoneTest) {
		//Retourne le numéro s'il est valide, sinon false.
		return preg_match('`^0[1-9]([-. ]?[0-9]{2}){4}$`', $numberPhoneTest) ? $numberPhoneTest : false;
	}
	$filtreTel = array(
		'numero' => array(
		    'filter' => FILTER_CALLBACK,
		    'options' => 'numberPhoneTest'

		)
	);
	$resultatFiltreTel = filter_input_array(INPUT_GET, $filtreTel);
	if($resultatFiltreTel['numeroTelephone'] !== false) {
		echo 'Le numéro est valide.';
	}
}//END telValidator









