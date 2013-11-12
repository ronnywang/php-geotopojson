<?php

include(__DIR__ . '/GeoTopoJSON.php');

$geojsons = GeoTopoJSON::toGeoJSONs(file_get_contents('sample-topo.json'));
echo json_encode($geojsons['example']);

