﻿# ECF-A-RENDRE-JUILLET-

 Pour la visualisation du site en cours de développement il faut se placer dans le dossier phpECF et lancer le serveur symfony avec la commande: 
 symfont serve ou symfony server:start.

 Si tous les packages sont installés sur le poste l'adresse en local 127.0.0.1:8000 renvoie sur la page d'accueil de symfony qui est en fait une page d'erreur 404.

 Ensuite et pour acceder au site réalisé pour le garage il faut se rendre sur la page d'accueil qui se trouve à l'adresse:
 127.0.0.1:8000/post

 Le site apparaitra avec une barre de navigation peremttant de se rendre sur les autres pages: Nos services 127.0.0.1:8000/services, Nos voitures d'occasions 127.0.0.1:8000/occasions, Nos horaires 127.0.0.1:8000/horaires, Nous contacter 127.0.0.1:8000/post ainsi que la page de connexion pour l'extranet127.0.0.1:8000/connexionx

 Les principaux éléments se trouvents dans les dossiers templates pour acceder à l'interface crée avec twig, src/controller et dans assets.

 Attention lorsque le navigateur renvoie une page d'erreur indiquant que le site n'est pas accessible il faut relancer le serveur en le stoppant par la commande symfony server:stop Puis le relancer à nouveau.
