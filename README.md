# Projet INFO642 : Gestion d'intervenants experts dans la formation 

# SujetGestion d'intervenants experts dans la formation
    Il s'agit de concevoir et réaliser une application web qui permet de gérer les heures effectuées à l'école par des intervenants experts (internes ou externes) pour les besoins des étudiants. Le processus à l'école est le suivant : 
       - les étudiants remontent leurs besoins en expertise dans un domaine donné à l'enseignant responsable de l'enseignement concerné (CM, TD...) 
       - l'enseignant concerné consulte les demandes, les valide après échanges éventuels avec les étudiants puis propose un ou plusieurs experts à contacter (soit par lui soit par les étudiants) 
       - une information sur l'état d'exécution de la commande est fournie aux différentes parties prenantes (étudiants, enseignants, Service technique...) 
       - lorsqu'un expert accepte de répondre à la demande, les étudiants renseignent le temps qu'il leur aura dédié de même que la nature de l'intervention (explication, TP, ...) 
       - l'enseignant fait remonter au Service de comptabilité les informations sur les heures effectuées par les différents intervenants extérieurs. 
    Nous souhaitons mettre en place un support informatique pour ce processus avec les fonctionnalités attendues suivantes : 
       - la saisie et la mise à jour d'une demande d'intervenant expert (projet identifié, domaine d'expertise, nature de l'intervention, durée...) 
       - l'accessibilité par les différentes parties prenantes (étudiants, enseignants...) 
       - la possibilité d'insérer différents types de documents (rapports, photos...) 
       - visualisation de l'état d'avancement de la demande 
       - la possibilité d'envoyer des mels aux personnes concernées par la demande (enseignants, étudiants, experts) 
       - la possibilité de disposer d'une base de données d'experts identifiés (compétences) avec la possibilité de la faire évoluer 
       - la possibilité d'envoyer des messages vers des personnes potentiellement intéressées 
       - la remontée des informations concernant les heures effectuées par les intervenants experts.



# To install the libraries :
composer install

# To install Composer :
https://getcomposer.org/Composer-Setup.exe

# To lancer son server in local
php -S localhost:8080 -t public