<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>nomophobie-questionnaire</title>
</head>
<body>

<div class="look">

<h1>Souffrez-vous de nomophobie?</h1>
<p>Des chercheurs de l’Université de l’Iowa ont mis au point un test pour savoir si l’on souffre de nomophobie. C’est le résultat du mémoire de maîtrise de Caglar Yildirim qui vient d’être publié dans la revue Computers in Human Behavior.</p>
<h2>Qu’est-ce que la nomophobie?</h2>
<p>La nomophobie est un mal de l’ère moderne. Il s’est développé avec l’augmentation de l’interaction entre l’homme et les technologies mobiles, en particulier le téléphone.</p>
<p>Avez-vous déjà perdu ou oublié votre téléphone quelque part? Pour certains, l’absence de téléphone s’accompagne d’une poussée d’anxiété qui peut s’avérer très grave. C’est dans le but de mesurer cette nomophobie et d’établir son degré de sévérité que ces chercheurs de l’Université de l’Iowa ont élaboré un questionnaire.</p>
<p>L’étude a été menée en deux phases. La première a consisté en l’exploration qualitative de la nomophobie à travers des entrevues avec neuf étudiants. C’est à la suite de cette étape que quatre dimensions ont été définies : l’incapacité à communiquer, la perte de connectivité, l’impossibilité d’accéder à de l’information et l’abandon de la commodité.</p>
<p>À partir de ces réponses, le questionnaire suivant a été élaboré dans la seconde phase de l’étude.</p>
<h1>Le questionnaire de la nomophobie</h1>
<p>Vous devez répondre aux questions suivantes selon une échelle de 1 (fortement en désaccord) à 7 (fortement en accord). Plus votre résultat est élevé, plus le niveau de votre nomophobie est élevé (20 étant le score le moins élevé et 140 étant le score le plus élevé).</p>

<form class="pure-form" action="" method="POST">

	<fieldset>

	<label for="q1">1. Je me sentirais mal à l’aise sans un accès constant à de l’information sur mon téléphone cellulaire.
		<input id="q1" type="number" name="r1" min="1" max="7" required="">
	</label>

	<br>

	<label for="q2">2. Je me sentirais agacé si je ne pouvais pas consulter de l’information sur mon téléphone quand bon me semble.
		<input id="q2" type="number" name="r2" min="1" max="7" required="">
	</label>

	<br>

	<label for="q3">3. Je me sentirais nerveux si je ne pouvais pas m’informer (actualité, météo, etc.) sur mon téléphone.
		<input id="q3" type="number" name="r3" min="1" max="7" required="">
	</label>

	<br>

	<label for="q4">4. Je me sentirais agacé si je ne pouvais pas utiliser mon téléphone ou ses fonctionnalités quand bon me semble.
		<input id="q4" type="number" name="r4" min="1" max="7" required="">
	</label>

	<br>

	<label for="q5">5. Manquer de batterie pour mon cellulaire me ferait peur.
		<input id="q5" type="number" name="r5" min="1" max="7" required="">
	</label>

	<br>

	<label for="q6">6. Si j’atteignais la limite de mon plan de données, je paniquerais.
		<input id="q6" type="number" name="r6" min="1" max="7" required="">
	</label>

	<br>

	<label for="q7">7. Si je n’avais pas de signal ou de connexion wifi, je vérifierais constamment mon téléphone pour voir si le signal revenait.
		<input id="q7" type="number" name="r7" min="1" max="7" required="">
	</label>

	<br>

	<label for="q8">8. Si je ne pouvais pas utiliser mon téléphone, j’aurais peur de rester pris quelque part.
		<input id="q8" type="number" name="r8" min="1" max="7" required="">
	</label>

	<br>

	<label for="q9">9. Si je ne pouvais pas vérifier mon téléphone pendant quelque temps, je sentirais le besoin de le faire.
		<input id="q9" type="number" name="r9" min="1" max="7" required="">
	</label>

	<br>

	<p><strong>Si je n’avais pas mon téléphone avec moi :</strong></p>

	<label for="q10">10. Je serais inquiet de ne pas pouvoir communiquer avec mes amis ou ma famille instantanément.
		<input id="q10" type="number" name="r10" min="1" max="7" required="">
	</label>

	<br>

	<label for="q11">11. Je serais inquiet de ne pas pouvoir être joint par mes amis ou ma famille.
		<input id="q11" type="number" name="r11" min="1" max="7" required="">
	</label>

	<br>

	<label for="q12">12. Je serais inquiet de ne pas pouvoir recevoir de messages texte ni d’appels.
		<input id="q12" type="number" name="r12" min="1" max="7" required="">
	</label>

	<br>

	<label for="q13">13. Je me sentirais anxieux de ne pas pouvoir garder le contact avec ma famille ou mes amis.
		<input id="q13" type="number" name="r13" min="1" max="7" required="">
	</label>

	<br>

	<label for="q14">14. Je serais inquiet de ne pas savoir si quelqu’un essaie de me rejoindre.
		<input id="q14" type="number" name="r14" min="1" max="7" required="">
	</label>

	<br>

	<label for="q15">15. Je me sentirais anxieux de savoir que ma connexion constante avec mes amis et ma famille est interrompue.
		<input id="q15" type="number" name="r15" min="1" max="7" required="">
	</label>

	<br>

	<label for="q16">16. Je serais inquiet d’être déconnecté de mon identité en ligne.
		<input id="q16" type="number" name="r16" min="1" max="7" required="">
	</label>

	<br>

	<label for="q17">17. Je serais mal à l’aise de ne pas pouvoir rester à jour dans l’actualité de mes réseaux sociaux.
		<input id="q17" type="number" name="r17" min="1" max="7" required="">
	</label>

	<br>

	<label for="q18">18. Je serais mal à l’aise de ne pas pouvoir recevoir les notifications de mes connexions et de mes réseaux en ligne.
		<input id="q18" type="number" name="r18" min="1" max="7" required="">
	</label>

	<br>

	<label for="q19">19. Je me sentirais anxieux de ne pas pouvoir vérifier ma boîte de courriels.
		<input id="q19" type="number" name="r19" min="1" max="7" required="">
	</label>

	<br>

	<label for="q20">20. Je me sentirais bizarre parce que je ne saurais pas quoi faire.
		<input id="q20" type="number" name="r20" min="1" max="7" required="">
	</label>

	<br>

	<p><strong>Alors, qu’est-ce que ça donne?</strong></p>

	<button type="submit" class="pure-button pure-button-primary" name="submit">Votre réponse</button>

	</fieldset>

</form>

<p>Votre score est de :
<?php

	$score = $_POST["r1"] + $_POST["r2"] + $_POST["r3"] + $_POST["r4"] + $_POST["r5"] + $_POST["r6"] + $_POST["r7"] + $_POST["r8"] + $_POST["r9"] + $_POST["r10"] + $_POST["r11"] + $_POST["r12"] + $_POST["r13"] + $_POST["r14"] + $_POST["r15"] + $_POST["r16"] + $_POST["r17"] + $_POST["r18"] + $_POST["r19"] + $_POST["r20"];
	echo $score;

?>
, vous êtes
<?php

	if ($score >= 80) {
		echo "nomophobe";
	}else{
		echo "pas nomophobe";
	}

?>
.</p>

</div>

</body>
</html>