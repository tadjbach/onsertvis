/*
 Plugin Name: France regions map
 Plugin URI: http://blog.comersis.com/articles/SVG-Raphael-map/
 Description: France departements map.
 Version: fr-reg-1.0215
 Author: S.Marmion ©2015
 Author URI: http://www.cmap.comersis.com
 License: non-comercial
 */
var mapfill = "#FFF";		// Couleur de remplissage des régions
var maphover_fill = "#007F6A";	// Couleur de survol au passage de la souris
var mapstroke = "#007F6A";		// Couleur des lignes de séparation des régions
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
            url: "/demande/region/grand-est"
        },
        Z2: {
            title: "Aquitaine-Limousin-Poitou-Charentes",
            url: "/demande/region/nouvelle-aquitaine"
        },
        Z3: {
            title: "Auvergne-Rhône-Alpes",
            url: "/demande/region/auvergne-rhone-alpes"
        },
        Z4: {
            title: "Bourgogne-Franche-Comté",
            url: "/demande/region/bourgogne-franche-comte"
        },
        Z5: {
            title: "Bretagne",
            url: "/demande/region/bretagne"
        },
        Z6: {
            title: "Centre",
            url: "/demande/region/centre-val-de-loire"
        },
        Z7: {
            title: "Corse",
            url: "/demande/region/corse"
        },
        Z8: {
            title: "Languedoc-Roussillon-Midi-Pyrénées",
            url: "/demande/region/occitanie"
        },
        Z9: {
            title: "Ile-de-France",
            url: "/demande/region/ile-de-france"
        },
        Z10: {
            title: "Nord-Pas-de-Calais-Picardie",
            url: "/demande/region/hauts-de-france"
        },
        Z11: {
            title: "Normandie",
            url: "/demande/region/normandie"
        },
        Z12: {
            title: "Pays-de-la-Loire",
            url: "/demande/region/pays-de-la-loire"
        },
        Z13: {
            title: "Provence-Alpes-Côte-d-Azur",
            url: "/demande/region/provence-alpes-cote-dazur"
        }
    }

