<?php
/**
 * Elgg AgoraMap Maps Api plugin
 * @package amap_maps_api 
 */

$language = array(

	'amap_maps_api:menu' => 'Carte',
    'amap_maps_api:search:radius:meters' => 'distance à la ronde en mètres',
    'amap_maps_api:search:radius:km' => 'distance à la ronde en km',
    'amap_maps_api:search:radius:miles' => 'distance à la ronde en miles',
    'amap_maps_api:search:meters' => 'm',
    'amap_maps_api:search:km' => 'km',
    'amap_maps_api:search:miles' => 'miles', 
    'amap_maps_api:all' => 'Global Map',
    'amap_maps_api:members' => 'Membres',
    'amap_maps_api:groups' => 'Groupes',
    'amap_maps_api:agora' => 'Petites Annonces',

    // settings
    'amap_maps_api:settings:google_maps' => 'Paramètres Google Maps',
    'amap_maps_api:settings:google_api_key' => 'Renseigner la clé Google API',
    'amap_maps_api:settings:google_api_key:clickhere' => 'Rejoindre <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> poiur obtenir votre "Google API key". <br />(<strong>NB : </strong> la clé de l\'API n\'est PAS OBLIGATOIRE. La clé est nécessaire uniquement pour gérer les statistiques de votre API ou si vous utilisez un compte API payant.)',
    'amap_maps_api:settings:defaultzoom' => 'Zoom de la carte par défaut',     
    'amap_maps_api:settings:defaultzoom:note' => 'Indiquer le niveau de zomm (valeur numérique)', 
    'amap_maps_api:settings:map_width' => 'Largeur de la carte',
    'amap_maps_api:settings:map_width:how' => 'Valeur numérique (ex : 500) ou % (ex : 100%)',
    'amap_maps_api:settings:map_height' => 'Hauteur de la carte',
    'amap_maps_api:settings:map_height:how' => 'Valeur numérique (ex : 500)', 
	'amap_maps_api:settings:defaultlocation' => 'Adresse de localisation par défaut',     
    'amap_maps_api:settings:defaultlocation:note' => 'Indiquer une adresse correcte (adresse postale ou code postal ou commune ou pays. Ex : 67000 Strasbourg, France)', 
    'amap_maps_api:settings:defaultzoom:note' => 'Indiquer un niveau de zoom avec une valeur numérique.',    
    'amap_maps_api:settings:cluster' => 'Utiliser les paramètres Google Maps de regroupement des  marqueurs', 
    'amap_maps_api:settings:cluster:no' => 'Non', 
    'amap_maps_api:settings:cluster:yes' => 'Oui', 
    'amap_maps_api:settings:cluster:note' => 'Choisir Oui pour regrouper, sur la carte, les marqueurs aux alentours.', 
    'amap_maps_api:settings:no' => 'Non', 
    'amap_maps_api:settings:yes' => 'Oui',    
    'amap_maps_api:settings:unitmeas' => 'Unité de mesure de distance', 
    'amap_maps_api:settings:unitmeas:meters' => 'Mètres', 
    'amap_maps_api:settings:unitmeas:km' => 'Kilomètres', 
    'amap_maps_api:settings:unitmeas:miles' => 'Miles',
    'amap_maps_api:settings:unitmeas:note' => 'Choisir l\'unité de mesure utilisée pour la recherche.',  
    
    'amap_maps_api:settings:maponmenu' => 'Activer la recherche sur tous les objets géolocalisés cartographiés',
    'amap_maps_api:settings:maponmenu:note' => 'Choisir Oui pour activer la recherche sur tous les types d\'objets géolocalisés cartographiés',
    'amap_maps_api:settings:entities:notenabled' => 'Aucun des plugins qui utilise la cartographie n\'est activé.',
    'amap_maps_api:settings:entities' => 'Choisir les objets à cartographier',
    'amap_maps_api:settings:membersmap' => 'Cartographier les Membres',
    'amap_maps_api:settings:membersmap:note' => 'Choisir Oui pour cartographier les Membres du site.',
    'amap_maps_api:settings:groupsmap' => 'Cartographier les Groupes',
    'amap_maps_api:settings:groupsmap:note' => 'Choisir Oui pour cartographier les Groupes du site',
	'amap_maps_api:settings:agora' => 'Cartographier les Petites Annonces',
    'amap_maps_api:settings:agora:note' => 'Choisir Oui pour cartographier les Petites Annonces du site',
    'amap_maps_api:settings:gm_init' => 'Mise en route de la cartographie',
    'amap_maps_api:settings:gm_init:note' => 'Choisir les paramètres ci-dessous pour indiquer les objets à cartographier quand la carte est chargée la première fois. Assurez-vous que les objets et leur nombre n\'engendrent aucune surcharge qui ralentirait le fontionnement du site.',
    'amap_maps_api:settings:gm_default_loc' => 'Lacalisation par défaut',
    'amap_maps_api:settings:gm_default_loc:note' => 'Choisir un lieu par défaut pour permettre aux visiteurs d\'effectuer leur première recherche ou pour renseigner par défaut l\'emplacement.',
    'amap_maps_api:settings:gm_distance' => 'Distance à la ronde',
    'amap_maps_api:settings:gm_distance:note' => 'Choisir la distance à la ronde (km). Valeur numérique.',    
    'amap_maps_api:settings:gm_entities_no' => 'Nombre d\'objets',
    'amap_maps_api:settings:gm_entities_no:note' => 'Choisir le nombre de chaque objet à afficher. Valeur numérique. Indiquer 0 pour nombre illimité (déconseillé).',
	'admin:settings:amap_maps_api' => 'AgoraMap Maps API',
	'amap_maps_api:settings:save:ok' => 'Paramètres correctement enregistrés',
	'amap_maps_api:settings:tabs:general_options' => 'General Maps Options',
	'amap_maps_api:settings:tabs:global_options' => 'Global Map Options',
	'amap_maps_api:settings:gm_cluster' => 'Utiliser la fonction cartographique de regroupement', 
    'amap_maps_api:settings:gm_cluster:note' => 'Choisir Oui pour regrouper, sur la carte, les marqueurs aux alentours. Si cette fonction est désactivée, un tableau récapitulatif attenant vous permettra d\'afficher ou de masquer les objets', 
    
    //search 
    'amap_maps_api:search' => 'Recherche par emplacement',
    'amap_maps_api:search:location' => 'emplacement',
    'amap_maps_api:search:radius' => 'distance à la ronde en mètres',
    'amap_maps_api:search:radius:meters' => 'distance à la ronde en mètres',
    'amap_maps_api:search:radius:km' => 'distance à la ronde en km',
    'amap_maps_api:search:radius:miles' => 'distance à la ronde en miles',
    'amap_maps_api:search:meters' => 'm',
    'amap_maps_api:search:km' => 'km',
    'amap_maps_api:search:miles' => 'miles',    
    'amap_maps_api:search:showradius' => 'Afficher l\'aire de recherche',
    'amap_maps_api:search:submit' => 'Recherche',
    'amap_maps_api:searchnearby' => 'Recherche aux alentours',
    'amap_maps_api:mylocationsis' => 'Mon emplacement est : ',
    'amap_maps_api:searchbyname' => 'Recherche par nom',
    'amap_maps_api:search:name' => 'nom',
    'amap_maps_api:search:searchname' => 'Recherche pour %s et alentours',
    'amap_maps_api:search:usernotfound' => 'Aucun objet trouvé',
    'amap_maps_api:search:usersfound' => 'Objets trouvés',
    'amap_maps_api:search:around' => 'Objets trouvés aux alentours en lien avec des membres',
    'amap_maps_api:showhideentities' => 'Afficher / Masquer les objets',
);

add_translation('fr', $language);
