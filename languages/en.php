<?php
/**
 * Elgg AgoraMap Maps Api plugin
 * @package amap_maps_api 
 */

$language = array(

    'amap_maps_api:menu' => 'Map',
    'amap_maps_api:location' => 'Location: %s', 
    'amap_maps_api:search:radius:meters' => 'radius (meters)',	
    'amap_maps_api:search:radius:km' => 'radius (km)',
    'amap_maps_api:search:radius:miles' => 'radius (miles)',
    'amap_maps_api:search:meters' => 'meters',
    'amap_maps_api:search:km' => 'km',
    'amap_maps_api:search:miles' => 'miles', 
    'amap_maps_api:all' => 'Global Map',
    'amap_maps_api:members' => 'Members',
    'amap_maps_api:groups' => 'Groups',
    'amap_maps_api:agora' => 'Classifieds',
    'amap_maps_api:pages' => 'Pages',
    'amap_maps_api:disabled' => 'The AgoraMap Maps Api plugin is not enabled',
    'amap_maps_api:user:logged_out' => 'You have to sign in for viewing this page',
    'amap_maps_api:user:coords_not_set' => 'Your location is not specified. Please edit your profile.',
    'amap_maps_api:search:error:location_empty' => 'Search location is not specified',
    'amap_maps_api:search:error:radius_invalid' => 'Radius must be numeric',
    'amap_maps_api:search:error:action_undefined' => 'Seach action is undefined',
    'amap_maps_api:input:map:title' => 'Location map',
    'amap_maps_api:input:autocomplete:title' => 'Autocomplete location',
    'amap_maps_api:form:location' => 'Location', 
    'amap_maps_api:form:setlocation' => 'Location', 
    'amap_maps_api:form:search' => 'Search', 
    'amap_maps_api:form:latlon' => 'Lat/Lon: ',     

    // settings
    'amap_maps_api:settings:google_maps' => 'Google Maps settings',
    'amap_maps_api:settings:map_options' => 'Map options',
    'amap_maps_api:settings:search_options' => 'Search options',
    'amap_maps_api:settings:api_keys:title' => 'Providers API Keys',
    'amap_maps_api:settings:google_api_key' => 'Enter your Google API key',
    'amap_maps_api:settings:google_api_key:help' => 'Go to <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> to get your "Google API key".',
    'amap_maps_api:settings:google_server_key' => 'Enter your Google Server API key',
    'amap_maps_api:settings:google_server_key:help' => 'If enable the <strong>Update user timezone</strong> option, you need to have a server key grom Google API. Go to <a target="_blank" href="https://developers.google.com/maps/faq">https://developers.google.com/maps/faq</a> for more information". You will have also to enable the Google Maps Time Zone API on API account.<br />(<strong>Note:</strong> the Server API key is NOT required. Only if you want stats on your api usage or if you have a paid API account, the server key is needed)',
    'amap_maps_api:settings:mapquest_api_key' => 'Enter your Mapquest API key',
    'amap_maps_api:settings:mapquest_api_key:help' => 'Go to <a target="_blank" href="https://developer.mapquest.com/">https://developer.mapquest.com/</a> to get your "Mapquest API key". This is required only if you want to use Mapquest for geocoding location.',
    'amap_maps_api:settings:defaultzoom' => 'Default map zoom',     
    'amap_maps_api:settings:defaultzoom:note' => 'Enter a numeric value for zoom', 
    'amap_maps_api:settings:map_width' => 'Width of map',
    'amap_maps_api:settings:map_width:note' => 'Numeric value (e.g. 500) or % (e.g. 100%)',
    'amap_maps_api:settings:map_height' => 'Height of map',
    'amap_maps_api:settings:map_height:note' => 'Numeric value (e.g. 500)', 
    'amap_maps_api:settings:defaultlocation' => 'Default location address',     
    'amap_maps_api:settings:defaultlocation:note' => 'Enter a valid location address (postal address or postal code or city or country... e.g. 73100, Greece)', 
    'amap_maps_api:settings:defaultzoom:note' => 'Enter a numeric value for zoom',    
    'amap_maps_api:settings:cluster' => 'Use cluster feature for markers', 
    'amap_maps_api:settings:cluster:no' => 'No', 
    'amap_maps_api:settings:cluster:yes' => 'Yes', 
    'amap_maps_api:settings:cluster:note' => 'Select Yes for clustering nearby entities on map.', 
    'amap_maps_api:settings:update_timezone' => 'Update user timezone', 
    'amap_maps_api:settings:update_timezone:help' => 'If yes, when user updates location on his profile, the user\'s timezone will be updated ("timezone" field is required on user\'s profile or user\'s settings).', 
    'amap_maps_api:settings:no' => 'No', 
    'amap_maps_api:settings:yes' => 'Yes',    
    'amap_maps_api:settings:unitmeas' => 'Distance Unit of Measurement', 
    'amap_maps_api:settings:unitmeas:meters' => 'Meters', 
    'amap_maps_api:settings:unitmeas:km' => 'Kilometers', 
    'amap_maps_api:settings:unitmeas:miles' => 'Miles',
    'amap_maps_api:settings:unitmeas:note' => 'Select Unit of Measurement will be used in searching.',  
    'amap_maps_api:settings:default_radius' => 'Default radius',
    'amap_maps_api:settings:default_radius:note' => 'Determine the default radius on personalized map searches in <strong>%s</strong> (as was set in General Maps Options).',    
    'amap_maps_api:settings:maponmenu' => 'Enable Global Entities Map and Search',
    'amap_maps_api:settings:maponmenu:note' => 'Select Yes if you want to enable global map search on all entities with geolocation',
    'amap_maps_api:settings:personalizedmap' => 'Enable personalized Map and Search',
    'amap_maps_api:settings:personalizedmap:note' => 'Select Yes if you want to enable a personalized map for users, so you can search entities close to each user.',
    'amap_maps_api:settings:geolocation:title' => 'Select entities for personalized services',
    'amap_maps_api:settings:geolocation:description' => 'Select the entities you wish to display on personalized searches on map',
    'amap_maps_api:settings:entities:notenabled' => 'None of map plugins are enabled',
    'amap_maps_api:settings:entities' => 'Select Entities to Include on Map',
    'amap_maps_api:settings:membersmap' => 'Include Members',
    'amap_maps_api:settings:membersmap:note' => 'Select Yes if you want to include members on global entities map ',
    'amap_maps_api:settings:groupsmap' => 'Include Groups',
    'amap_maps_api:settings:groupsmap:note' => 'Select Yes if you want to include groups on global entities map ',
    'amap_maps_api:settings:agora' => 'Include Classifieds',
    'amap_maps_api:settings:agora:note' => 'Select Yes if you want to include classifieds on global entities map ',
    'amap_maps_api:settings:pagesmap' => 'Include Pages',
    'amap_maps_api:settings:pagesmap:note' => 'Select Yes if you want to include Pages on global entities map ',    
    'amap_maps_api:settings:gm_init' => 'Map Initialization',
    'amap_maps_api:settings:gm_init:note' => 'Select parameters below to determine entities to display when map is loading first time. Depending on the amount of entities, you should choose these parameters carefully for not allowing website to be overloaded and slow down.',
    'amap_maps_api:settings:gm_default_loc' => 'Default Location',
    'amap_maps_api:settings:gm_default_loc:note' => 'Select default location for initial search for guests or for members without location determined.',
    'amap_maps_api:settings:gm_distance' => 'Distance Radius',
    'amap_maps_api:settings:gm_distance:note' => 'Select radius distance in km. Value must be numeric.',    
    'amap_maps_api:settings:gm_entities_no' => 'No of Entities',
    'amap_maps_api:settings:gm_entities_no:note' => 'Select no of each entity to display. Value must be numeric. Enter 0 for unlimited (not recommended).',
    'admin:settings:amap_maps_api' => 'AgoraMap Maps API',
    'amap_maps_api:settings:save:ok' => 'Settings were successfully saved',
    'amap_maps_api:settings:tabs:general_options' => 'General Maps Options',
    'amap_maps_api:settings:tabs:global_options' => 'Global Map Options',
    'amap_maps_api:settings:tabs:personalized_options' => 'Personalized Map Options',
    'amap_maps_api:settings:gm_cluster' => 'Use cluster feature on Global Map', 
    'amap_maps_api:settings:gm_cluster:note' => 'Select Yes for clustering nearby entities on map. If disabled, an index table will be displayed for showing/hiding entities', 
    'amap_maps_api:settings:layers' => 'Map Layers',
    'amap_maps_api:settings:layers_select' => 'Select which layers will be available on the map. At least one must be checked:',
    'amap_maps_api:settings:default_layer' => 'Select the default layer:',
    'amap_maps_api:settings:roadmap' => 'Google Street Map', 
    'amap_maps_api:settings:terrain' => 'Google Terrain', 
    'amap_maps_api:settings:satellite' => 'Satellite', 
    'amap_maps_api:settings:hybrid' => 'Google Hybrid', 
    'amap_maps_api:settings:OSM' => 'OpenStreetMap', 
    'amap_maps_api:settings:OSM:osm_base' => 'OpenStreetMap Base',
    'amap_maps_api:settings:OSM:osm_base:note' => 'Set the base map for OpenStreetMap',
    'amap_maps_api:settings:tabs:users_geolocation' => 'Users Geolocation', 
    'amap_maps_api:settings:save:ok' => 'Settings were successfully saved', 
    'amap_maps_api:settings:geolocation:results' => 'Geolocation Results',    
	'amap_maps_api:settings:batchusers' => 'Batch Users Geolocation',
    'amap_maps_api:settings:batchusers:start' => 'Start Geolocation',
    'amap_maps_api:settings:batchusers:note' => 'If you have already members on your Elgg site, click on this button for converting users location to coordinates.<br />You have to do it <strong>just once</strong> before start using this plugin.',
    'amap_maps_api:error:request' => 'There was problem during request',
    
    //js alerts
    'amap_maps_api:map:1' => "Please enter a valid default location on admin section",
    'amap_maps_api:map:2' => "No valid search address",
    'amap_maps_api:map:3' => "Geocode was not successful for the following reason",    	
	
    //search 
    'amap_maps_api:search' => 'Search by location',
    'amap_maps_api:search:keyword' => 'keyword',
    'amap_maps_api:search:location' => 'location',
    'amap_maps_api:search:location:select' => 'Select Location',
    'amap_maps_api:search:radius' => 'radius (meters)',
    'amap_maps_api:search:radius:meters' => 'radius (meters)',
    'amap_maps_api:search:radius:km' => 'radius (km)',
    'amap_maps_api:search:radius:miles' => 'Radius (miles)',
    'amap_maps_api:search:meters' => 'meters',
    'amap_maps_api:search:km' => 'km',
    'amap_maps_api:search:miles' => 'miles',    
    'amap_maps_api:search:my_location' => 'My location',
    'amap_maps_api:search:showradius' => 'Show search area',
    'amap_maps_api:search:submit' => 'Search',
    'amap_maps_api:searchnearby' => 'Search nearby',
    'amap_maps_api:mylocationsis' => 'My location is: ',
    'amap_maps_api:searchbyname' => 'Search by name',
    'amap_maps_api:search:name' => 'name',
    'amap_maps_api:search:searchname' => 'Search for %s and nearby',
    'amap_maps_api:search:usernotfound' => 'Entities not found',
    'amap_maps_api:search:usersfound' => 'Entities found',
    'amap_maps_api:search:around' => 'Entities nearby on members found',
    'amap_maps_api:showhideentities' => 'Show / Hide Entities',
    'amap_maps_api:search:personalized:keyword' => 'Keyword: ',
    'amap_maps_api:search:personalized:location' => 'Location search: ',
    'amap_maps_api:search:personalized:radius' => 'Radius search: ',
    'amap_maps_api:search:personalized:empty' => '<h3>No results on maps</h3>',
    'amap_maps_api:search:proximity' => '%2$s km',
    'amap_maps_api:search_types:proximity' => 'Location',    
    
    // geo 
    'amap_maps_api:settings:proximity_search' => 'Enable proximity search in Elgg search results',
    'amap_maps_api:providers:none' => 'Please set up geocoding providers in hypeGeo plugin settings',
    'amap_maps_api:settings:enable' => 'Enable',
    'amap_maps_api:settings:api_key' => 'API Key',
    'amap_maps_api:settings:locale' => 'Locale (optional)',
    'amap_maps_api:settings:region' => 'Region (optional)',
    'amap_maps_api:settings:ssl' => 'Use SSL',
    'amap_maps_api:settings:url' => 'URL',
    'amap_maps_api:settings:toponym' => 'Toponym',
    'amap_maps_api:settings:gmb:client_id' => 'Client ID',
    'amap_maps_api:settings:gmb:private_key' => 'Private Key',
    
    // geo search
    'amap_maps_api:search:proximity' => '%2$s km',
    'search_types:proximity' => 'Location',
    
    // geo more
    'amap_maps_api:postal_address:street_address' => 'Street address',
    'amap_maps_api:postal_address:extended_address' => 'Street address 2',
    'amap_maps_api:postal_address:locality' => 'City',
    'amap_maps_api:postal_address:postal_code' => 'Postal code',
    'amap_maps_api:postal_address:region' => 'State',
    'amap_maps_api:postal_address:country' => 'Country',    
    
    // nearby 
    'amap_maps_api:global:nearby:search' => 'Entities near "%s"', 
    'amap_maps_api:global:newest' => 'Map with %s newest entities', 
);

add_translation('en', $language);
