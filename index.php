<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<title>nomophobie-questionnaire</title>
</head>
<body>

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
    	<input id="q1" type="number" name="r1" min="1" max="20" required="">
    </label>

    <br>

    <label for="q2">2. Je me sentirais agacé si je ne pouvais pas consulter de l’information sur mon téléphone quand bon me semble.
    	<input id="q2" type="number" name="r2" min="1" max="20" required="">
    </label>

    <br>

    <label for="q3">3. Je me sentirais nerveux si je ne pouvais pas m’informer (actualité, météo, etc.) sur mon téléphone.
    	<input id="q3" type="number" name="r3" min="1" max="20" required="">
    </label>

    <br>

	<ol>
	<li>Je me sentirais agacé si je ne pouvais pas utiliser mon téléphone ou ses fonctionnalités quand bon me semble.</li>
	<li>Manquer de batterie pour mon cellulaire me ferait peur.</li>
	<li>Si j’atteignais la limite de mon plan de données, je paniquerais.</li>
	<li>Si je n’avais pas de signal ou de connexion wifi, je vérifierais constamment mon téléphone pour voir si le signal revenait.</li>
	<li>Si je ne pouvais pas utiliser mon téléphone, j’aurais peur de rester pris quelque part.</li>
	<li>Si je ne pouvais pas vérifier mon téléphone pendant quelque temps, je sentirais le besoin de le faire.</li>
	<p><strong>Si je n’avais pas mon téléphone avec moi :</strong></p>
	<li>10. Je serais inquiet de ne pas pouvoir communiquer avec mes amis ou ma famille instantanément.</li>
	<li>Je serais inquiet de ne pas pouvoir être joint par mes amis ou ma famille.</li>
	<li>Je serais inquiet de ne pas pouvoir recevoir de messages texte ni d’appels.</li>
	<li>Je me sentirais anxieux de ne pas pouvoir garder le contact avec ma famille ou mes amis.</li>
	<li>Je serais inquiet de ne pas savoir si quelqu’un essaie de me rejoindre.</li>
	<li>Je me sentirais anxieux de savoir que ma connexion constante avec mes amis et ma famille est interrompue.</li>
	<li>Je serais inquiet d’être déconnecté de mon identité en ligne.</li>
	<li>Je serais mal à l’aise de ne pas pouvoir rester à jour dans l’actualité de mes réseaux sociaux.</li>
	<li>Je serais mal à l’aise de ne pas pouvoir recevoir les notifications de mes connexions et de mes réseaux en ligne.</li>
	<li>Je me sentirais anxieux de ne pas pouvoir vérifier ma boîte de courriels.</li>
	<li>Je me sentirais bizarre parce que je ne saurais pas quoi faire.</li>
	</ol>
	<p><strong>Alors, qu’est-ce que ça donne?</strong></p>

    <button type="submit" class="pure-button pure-button-primary">Votre réponse</button>

    </fieldset>

</form>

<?php
	echo $_POST["r1"];
	echo $_POST["r2"];
	echo $_POST["r3"];
?>

</body>
</html>