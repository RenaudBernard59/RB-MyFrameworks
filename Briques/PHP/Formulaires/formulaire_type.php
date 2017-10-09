<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <meta name="description" content="">
     </head>
    <body>
     	<form method="post" action="traitement.php">
			<fieldset>
				<legend>Basic</legend>
				<p><label for="nom">Votre nom*</label> : <input type="text" name="nom" id="nom" placeholder="Ton nom" size="50"autofocus required/></p>
				<p><label for="pass">Votre mot de passe*:</label><input type="password" name="pass" id="pass" required /></p>
		   <p><label for="longtext">Un long texte :</label><br /><textarea name="longtext" id="longtext" rows="50" cols="100">Un long texte ici oui un long texte.</textarea></p>
			</fieldset>
			<fieldset>
				<legend>Avancer</legend>
				<p><label for="mail">Votre mail*</label><input type="email" name="mail" id="mail" placeholder="Ton email" required/></p>
				<p><label for="lien">Votre lien</label><input type="url" name="lien" id="lien" placeholder="Ton lien"/></p>
				<p><label for="phone">Votre téléphone</label><input type="tel" name="phone" id="phone" placeholder="Ton Téléphone"/></p>
				<p><label for="age">Votre age</label><input type="number" name="age" id="age" placeholder="Ton age" min="1" max="120" step="1"/></p>
				<p><label for="position">Tu portes à droite ou à gauche ?</label><input type="range" name="position" id="position" min="0" max="100" step="20"/></p>
				<p><label for="couleur">Votre couleur</label><input type="color" name="couleur" id="couleur" /></p>
				<p><label for="recherche">Votre recherche</label><input type="search" name="recherche" id="recherche" placeholder="Je veux savoir"/></p>
			</fieldset>
			<fieldset>
				<legend>Dates</legend>
				<p><label for="birthdate">Votre Date de naissance</label><input type="date" name="birthdate" id="birthdate" /></p>
				<p><label for="lever">Heure de lever</label><input type="time" name="lever" id="lever" /></p>
				<p><label for="semaine">Votre semaine de liberte</label><input type="week" name="semaine" id="semaine" /></p>
				<p><label for="lemois">Votre mois de bonheur</label><input type="month" name="lemois" id="lemois" /></p>
				<p><label for="heureailleurs">On est quand ailleurs</label><input type="datetime" name="heureailleurs" id="heureailleurs" /></p>
				<p><label for="heurelocale">On est quand ici (décalage horaire)</label><input type="datetime-local" name="heurelocale" id="heurelocale" /></p>
			</fieldset>
			<fieldset>
				<legend>Checklists</legend>
			   <p>
			   Tes voyelles préférée :<br />
			   <input type="checkbox" name="voyellea" id="voyellea" /> <label for="voyellea">a</label><br />
			   <input type="checkbox" name="voyellee" id="voyellee" checked /> <label for="voyellee">e</label><br />
			   <input type="checkbox" name="voyellei" id="voyellei" /> <label for="voyellei">i</label><br />
			   <input type="checkbox" name="voyelleo" id="voyelleo" /> <label for="voyelleo">o</label><br />
			   <input type="checkbox" name="voyelleu" id="voyelleu" /> <label for="voyelleu">u</label><br />
			   <input type="checkbox" name="voyelley" id="voyelley" checked /> <label for="voyelley">y</label><br />

		   </p>
			
		   <p>
			   Ta voyelle préférée :<br />
			   <input type="radio" name="voyelleunique" id="voyelleunea" /> <label for="voyelleunea">a</label><br />
			   <input type="radio" name="voyelleunique" id="voyelleunee" checked /> <label for="voyelleunee">e</label><br />
			   <input type="radio" name="voyelleunique" id="voyelleunei" /> <label for="voyelleunei">i</label><br />
			   <input type="radio" name="voyelleunique" id="voyelleuneo" /> <label for="voyelleuneo">o</label><br />
			   <input type="radio" name="voyelleunique" id="voyelleuneu" /> <label for="voyelleuneu">u</label><br />
			   <input type="radio" name="voyelleunique" id="voyelleuney" /> <label for="voyelleuney">y</label><br />
		   </p>
			<p>
			   <label for="pays">Dans quel pays habitez-vous ?</label><br />
			   <select name="pays" id="pays">
				   <option value="france" selected>France</option>
				   <option value="espagne">Espagne</option>
				   <option value="italie">Italie</option>
				   <option value="royaume-uni">Royaume-Uni</option>
				   <option value="canada">Canada</option>
				   <option value="etats-unis">États-Unis</option>
				   <option value="chine">Chine</option>
				   <option value="japon">Japon</option>
			   </select>
			</p>
			<p>
			   <label for="payscontinent">Dans quel pays de quel continent habitez-vous ?</label><br />
			   <select name="payscontinent" id="payscontinent">
				   <optgroup label="Europe">
				       <option value="france">France</option>
				       <option value="espagne">Espagne</option>
				       <option value="italie">Italie</option>
				       <option value="royaume-uni">Royaume-Uni</option>
				   </optgroup>
				   <optgroup label="Amérique">
				       <option value="canada">Canada</option>
				       <option value="etats-unis">Etats-Unis</option>
				   </optgroup>
				   <optgroup label="Asie">
				       <option value="chine">Chine</option>
				       <option value="japon">Japon</option>
				   </optgroup>
			   </select>
			</p>
			</fieldset>
			<fieldset>
			<legend>Bouttons</legend>
			<p><input type="submit" value="Envoyer" /></p>
			<p><input type="reset" value="Effacer" /></p>
			<p><input type="image" src="img/boutton.png"value="Un logo perso" /></p>
			<p><input type="button" value="Coucou" /></p>
		</form>
    </body>
</html>
