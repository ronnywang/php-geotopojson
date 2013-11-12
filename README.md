PHP GeoTopoJSON
===============
A PHP library transforms between GeoJSON and TopoJSON.

__USAGE__
```php
include(__DIR__ . '/GeoTopoJSON.php');
$geojsons = GeoTopoJSON::toGeoJSONs(file_get_contnets('some_topojson_file'));
echo json_encode($geojsons['topo_json_id']);
```

__LICENSE__
* BSD License

__TODO__
* GeoTopoJSON::toTopoJSON($geojson)

__SEEALSO__
* http://www.geojson.org/geojson-spec.html
* https://github.com/topojson/topojson-specification
