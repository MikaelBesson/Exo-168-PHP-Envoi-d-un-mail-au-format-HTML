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
    'besson.mikael04@gmail.com',
];
$subject ="test envoie mail";



$html = "
    <html lang='fr'>
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
            Lors d'une interview pour la chaîne 'Good Morning America', le réalisateur Jon Favreau a donné plus
             d'informations sur la suite des aventures de Boba Fett sur Disney+. 
  
            </div>
        </body>
    </html>
";

mail($to, $subject, $html);
if (mail($to, $subject, $html))
{
    echo "Message envoyé avec succès !";
}
else
{
    echo "Erreur. Le message ne peut pas être envoyé.";
}


