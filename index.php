<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'oliolive02@hotmail.fr'
];
$subject = "Mes actualités";
$header = array(
    'Reply-to' => 'olivier.peuchet02@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mime-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf8'
);

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                je me suis lever en retard se matin voila voila !!
            </div>
        </body>
    </html>
';

if (mail($to, $subject, $html)){
    echo "les mail sont envoyer";
}
else {
    echo "echec des envoies";
}