# Application-CV

Interface #1
Simple interface/fenêtre qui contient un champ pour saisir l’adresse mail de l’utilisateur. Cette adresse mail nous sert à identifier si l’utilisateur a déjà créé son CV ou pas.

Interface #2
Une interface web qui permet de saisir toutes les informations de l’utilisateur pour construire son CV. Si l’utilisateur a déjà rempli ses informations, on passe directement à l’interface #

Interface #3
Une interface web qui présente le CV de l’utilisateur. On peut être rediriger vers cette page depuis l’interface #1 ou l’interface #2.

La partie serveur doit gère 3 services web.
Un service web qui permet de vérifier la présence des informations reliées à une adresse mail. (Voir interface 1).
Un (ou plusieurs) services web qui permettent l’enregistrement des données dans la base de données. (Voir interface 2).
Un (ou plusieurs) services web qui permettent de récupérer les informations depuis la base de données. (Voir interface 3).
