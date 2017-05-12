/*
 Plugin Name: France regions map
 Plugin URI: http://blog.comersis.com/articles/SVG-Raphael-map/
 Description: France departements map.
 Version: fr-reg-1.0215
 Author: S.Marmion ©2015
 Author URI: http://www.cmap.comersis.com
 License: non-comercial
 */
var mapfill = "#fff";		// Couleur de remplissage des régions
var maphover_fill = "#E5DF16";	// Couleur de survol au passage de la souris
var mapstroke = "#2A0540";		// Couleur des lignes de séparation des régions
var mapstroke_width = 1.2;		// Epaisseur des lignes de séparation des régions (en points)
var mapWidth=550;				// Largeur de la carte en pixels
var mapHeight=550;				// Hauteur de la carte en pixels (facultatif)


/*
 Modifiez ci-dessous les 2 variables pour chaque région :

 title:	" Texte associé à la région ";

 url:	" Lien vers la page ou le site souhaité ";

 */
var paths = {
        Z1: {
            title: "Alsace-Champagne-Ardenne-Lorraine",
            url: "/annonces-en-cours?region=6"
        },
        Z2: {
            title: "Aquitaine-Limousin-Poitou-Charentes",
            url: "/annonces-en-cours?region=10"
        },
        Z3: {
            title: "Auvergne-Rhône-Alpes",
            url: "/annonces-en-cours?region=1"
        },
        Z4: {
            title: "Bourgogne-Franche-Comté",
            url: "/annonces-en-cours?region=2"
        },
        Z5: {
            title: "Bretagne",
            url: "/annonces-en-cours?region=3"
        },
        Z6: {
            title: "Centre",
            url: "/annonces-en-cours?region=4"
        },
        Z7: {
            title: "Corse",
            url: "/annonces-en-cours?region=5"
        },
        Z8: {
            title: "Languedoc-Roussillon-Midi-Pyrénées",
            url: "/annonces-en-cours?region=11"
        },
        Z9: {
            title: "Ile-de-France",
            url: "/annonces-en-cours?region=8"
        },
        Z10: {
            title: "Nord-Pas-de-Calais-Picardie",
            url: "/annonces-en-cours?region=7"
        },
        Z11: {
            title: "Normandie",
            url: "/annonces-en-cours?region=9"
        },
        Z12: {
            title: "Pays-de-la-Loire",
            url: "/annonces-en-cours?region=12"
        },
        Z13: {
            title: "Provence-Alpes-Côte-d-Azur",
            url: "/annonces-en-cours?region=13"
        }
    }
