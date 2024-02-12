# Bord2Ligne guide d'installation

Vous aurez ci dessous les marches à suivre pour mettre en place votre environement de dev et télécharger tout les outils dont vous aurez besoin.

Prérequis:
  - Visual Studio Code ( c'est notre IDE lien de telechargement: https://code.visualstudio.com/ )
  - Node Js ( Bien faire attention a prendre la version LTS qui est la version la plus stable lien: https://code.visualstudio.com/ )
  - Chocolatey ( Normalement il s'installe avec l'exécutable de Node mais je met le lien au cas ou lien: https://chocolatey.org/install#individual )
  - Yarn ( Il est optionnel mais je conseille quand meme de l'installer ca peut faire gagner du temps lien: https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable )
  - GitHub Desktop ( C'est une version avec interface pour commit et push le code lien: https://desktop.github.com/ )

Par la suite il vous faut aller sur votre téléphonne et télécharger l'application "Expo Go" c'est elle qui va permettre de voir le rendu de l'application.

Paramétrage de VS Code:
  Pour configurer vs code il n'y a rien de bien compliqué. Dans les extentions il faut installer les extenions suuvantes:

    - Django
    - ES7+ React/Redux/React-Native snippets
    - React Native Tools
    - React Native - Full Pack
    - Git History
    - Git Lens
    - Git Extension Pack
    - Python Extension Pack

  Après libre à vous d'ajoute d'autres extentions tel que intelli-code pour aider à la syntaxe.

Maintenant passons à la partie mise en place du projet:
  Pour faire ca il va falloir dans un premier temps dans Github Desktop cloner le repository Bord2Ligne une fois que c'est fait il suffit de cliquer sur ouvrir avec vs code.
  Une fois que c'est fait il y a des commandes à obligatoirement faire je les met dessous je précise aussi que il est préférable d'utiliser le terminal de vs Code pour ca en haut de vs Code il y a un onglet Terminal puis cliquer sur New Terminal.

  1) npm install
  2) npm install react
  3) npm install react-native
  4) yarn add expo
  5) npx expo start

Je précise que pour exécuter la commande 4 il faut au préalable que le téléphone et l'ordinateur de dev soient sur la même connexion internet car sinon cela ne vas pas fonctionner. De plus pour les utilisateur Android il vous faudra dans les paramètres aller dans les parametres de développeurs et activer les Deboguage USB. Pour ceux qui ne saventy pas comment accéder aux parametres développeurs aller dans paramètres et tout en bas aller dans " à propos du telephonne " puis dans " information sur le logiciel " et apres cliquer 5 fois ou plus sur " numero de version " les options de developpement se trouveront tout en bas de paramètre.

Une fois que tout ca est fait que le Telephonne et le PC sont sur la même connexion et que le debogage usb est activé lancez Expo Go sur le telephonne et connectez vous en haut a gauche de l'application. Apres sur le terminal de VS Code tapez la commande 4) et si tout a été respecte dans le precessus il devrait y avoir une page blanche avec quelques mots.
    
