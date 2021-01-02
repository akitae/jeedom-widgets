L'objectif de ce github est uniquement de stocker des widgets (récupérés à divers endroits ou fabriqués/modifiés). 

Lorsque j'utilise les idées ou du code provenant d'un site, celui-ci est cité dans la colonne source. Dans le cas où l'une des sources citées ne souhaite pas être affichée, je retirerais la partie
le concernant.

# Composant

|Nom| widgets | Rendu | Source
|------------|-------------|-----| ----
|Reveil | [reveil](#reveil) | ![box](images/reveil.png) |[ca-sert-a-quoi.com](https://www.ca-sert-a-quoi.com/articles/domotique/tuto-creez-votre-reveil-domotique-et-scenarisez-votre-saut-du-lit/)

### Reveil
|Fichier(s) | Paramètre | Type | Sub-type| Rendu | Source |
|------------|-------------|---|---|------|----|
|aucun |  | |  | ![ToggleSwitchOn](images/images/ToggleCircle_OFF.png) ![ToggleSwitchOff](images/images/ToggleCircle_ON.png)|[images.jeedom.com](https://images.jeedom.com/archives/widget/)
|box.html | bg-color; color | action| other | ![box](images/widget/box.png)|
|cmd.action.slider.timebutton.html|name_display|action|slider|![timeButton](images/widget/timeButton.png)|[images.jeedom.com](https://images.jeedom.com/archives/widget/)
|cmd.action.slider.checkbox.html| |action| slider| ![slider-checkbox](images/widget/slider-checkbox.png)
|[reveil.php](images/scenario/reveil.php)| | scenario (bloc code à adapter selon le nom des composants)| | Met à jour la variable wake-up (0 ou 1) en fonction de l'heure et du jour indiqué)
