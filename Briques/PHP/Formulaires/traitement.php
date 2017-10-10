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

//=================================
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
//=================================

$date = '04/26/2002';
 
if (!strptime($date, "d.m.Y"))
{
    // pas bon
}
//=================================
$a = 0;

if(filter_var($a, FILTER_VALIDATE_INT)) { //Ne jamais valider comme ceci !
    echo 'La variable est un entier valide !';
}
//=================================
$a = 12.4;


if(filter_var($a, FILTER_VALIDATE_FLOAT) !== false) { //Validation d'un nombre réel.

    echo 'La variable est un nombre réel valide !';

}
//=================================
$a = 'petitzero@siteduzero.com';


if(filter_var($a, FILTER_VALIDATE_EMAIL) !== false) { //Validation d'une adresse de messagerie.

    echo 'La variable est une adresse de messagerie valide !';

}
//=================================
$a = 'http://www.siteduzero.com/';


if(filter_var($a, FILTER_VALIDATE_URL) !== false) { //Validation d'un lien.

    echo 'La variable est un lien valide !';

}
//=================================
$a = '127.0.0.1';
$a = '2001:0db8:0000:85a3:0000:0000:ac1f:8001';

if(filter_var($a, FILTER_VALIDATE_IP) !== false) { //Validation d'une adresse IP.

    echo 'La variable est une adresse IP valide !';

}
//=================================
$a = '64';

$options = array(
    'options' => array(
        'min_range' => 0,
        'max_range' => 100
    )
);

if(filter_var($a, FILTER_VALIDATE_INT, $options) !== false) { //Validation d'un entier.
    echo 'La variable est un nombre entier valide (compris entre 0 et 100) !';
}
//=================================
$a = '0x64';

$a = '064';

$options = array(

    'flags' => FILTER_FLAG_ALLOW_HEX | FILTER_FLAG_ALLOW_OCTAL

);


if(filter_var($a, FILTER_VALIDATE_INT, $options)) {

    echo 'L\'entier est valide.';

}
//=================================
$resultat = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);


if($resultat === null) { //Si la variable $_GET['age'] n'existe pas.

    echo 'La variable $_GET[\'age\'] n\'existe pas.';

}

elseif($resultat !== false) { //Si elle est valide.

    echo 'La variable $_GET[\'age\'] est un entier valide !';

}

else {

    echo 'La variable $_GET[\'age\'] n\'est pas valide.';

}
//=================================
$resultat = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);


if($resultat === null) { //Si la variable $_GET['age'] n'existe pas.

    echo 'La variable $_GET[\'age\'] n\'existe pas.';

}

elseif($resultat !== false) { //Si elle est valide.

    echo 'La variable $_GET[\'age\'] est un entier valide !';

}

else {

    echo 'La variable $_GET[\'age\'] n\'est pas valide.';

}
//=================================
$valeur = '<strong>Texte en gras</strong>';

$valeurNettoyee = filter_var($valeur, FILTER_SANITIZE_STRING); //Supprimer les balises.

echo $valeurNettoyee;
//=================================
echo filter_input(INPUT_GET, 'texte', FILTER_SANITIZE_STRING);
//=================================

echo filter_input(INPUT_GET, 'texte', FILTER_SANITIZE_SPECIAL_CHARS);
>>> &#60;strong&#62;gras&#60;/strong&#62;
//=================================
if($resultat != null) { //Si le formulaire a bien été posté.
    //Enregistrer des messages d'erreur perso.
    $messageErreur = array(
        'email' => 'L\'adresse de messagerie n\'est pas valide.',
        'age' => 'Veuillez entrer un nombre entier positif pour votre âge.'
    );
    
    $nbrErreurs = 0;

    foreach($options as $cle => $valeur) { //Parcourir tous les champs voulus.
        if(empty($_POST[$cle])) { //Si le champ est vide.
            echo 'Veuillez remplir le champ ' . $cle . '.<br/>';
            $nbrErreurs++;
        }
        elseif($resultat[$cle] === false) { //S'il n'est pas valide.
            echo $messageErreur[$cle] . '<br/>';
            $nbrErreurs++;
        }
    }

    if($nbrErreurs == 0) {
        echo 'Bonjour ' . $resultat['prenom'] . ' !<br/>Ton adresse de messagerie est bien ' . $resultat['email'] . ' ?<br/>';
        echo 'Tu as ' . $resultat['age'] . ' ans ? Tu as bien grandi !';
    }
}
else {
    echo 'Vous n\'avez rien posté.';
}

//=================================
function validerNumero($telATester) {
    //Retourne le numéro s'il est valide, sinon false.
    return preg_match('`^0[1-9]([-. ]?[0-9]{2}){4}$`', $telATester) ? $telATester : false;
}
//=================================
$filtres = array(

    'numero' => array(

        'filter' => FILTER_CALLBACK,

        'options' => 'validerNumero'

    )

);


$resultats = filter_input_array(INPUT_GET, $filtres);


if($resultats['numero'] !== false) {

    echo 'Le numéro est valide.';

}
//=================================
function nettoyerNumero($telANettoyer) {

    //Enlever tous les caractères non numériques.

    $telANettoyer = preg_replace('`[^0-9]`', '', $telANettoyer);

    

    //Ajout de zéros si besoin.

    $telANettoyer = str_pad($telANettoyer, 10, '0', STR_PAD_LEFT);

    

    return $telANettoyer;
}
//=================================

//=================================

//=================================




