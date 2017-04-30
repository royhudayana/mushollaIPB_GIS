<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  </head><body>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jamu Webserver">
  <meta name="author" content="Royan Hudayana">

  <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fields.css">

  <!--Font-->
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- SCRIPT
  ============================================================-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fields.js"></script>

  <!-- autocomplete
  ============================================================-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/ac/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/ac/jquery.autocomplete.js"></script>
  <script type="text/javascript" src="js/ac/plants.js"></script>
  <script type="text/javascript" src="js/ac/demo.js"></script>

  <!-- labelauty -->
  <script type="text/javascript" src="js/jquery-labelauty.js"></script>
  <link rel="stylesheet" href="css/jquery-labelauty.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.css">

  <script>
    $(document).ready(function(){
    $(":radio, :checkbox").labelauty({
    development: false,
    class: "labelauty",
    label: true,
    separator: "|",
    checked_label: "Checked",
    unchecked_label: "Unchecked",
    minimum_width: "200px",
    same_width: true,
    });
    });
  </script>

  <!-- ladda button -->
  <link rel="stylesheet" href="js/dist/ladda.min.css">

  <link rel="stylesheet" href="http://localhost:8080/geoserver/openlayers3/ol.css">
  <script src="http://localhost:8080/geoserver/openlayers3/ol.js"></script>
</head>
<body>
<!--HEADER ROW-->
<div id="header-row">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-sm-3 col-md-3">
              <a class="navbar navbar-left" href="index.php"><img src="img/go.png" class="img-responsive"></a>
            </div>
            <!-- /LOGO -->
            <!-- MAIN NAVIGATION -->
            <div class="col-sm-9 col-md-9">
            <div class="navbar navbar-right">
                <div class="navbar-header"><a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-toggle"><span class="glyphicon glyphicon-bar"></span><span class="glyphicon glyphicon-bar"></span><span class="glyphicon glyphicon-bar"></span></a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a>
                        </li>
                          <li class="active"><a href="Data Musala.php">Data</a>
                          </li>
                          <li class="active"><a href="Contact.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <!-- MAIN NAVIGATION -->
        </div>
    </div>
</div>
<!-- /HEADER ROW -->

<div class="container">
  <!--   ==================================================-->
  <div class="row" >
      <div class="row feature-box">
          <div class="cnt-title col-sm-12 col-md-12">
           <h1>Geospatial Information System</h1>
            <span>Masjid and Musala Distribution at IPB Dramaga</span><br>
          </div>
      </div>
      <!-- Radio -->

      <div class="col-sm-12">
        <div id="map-canvas">
            <div id="map" style="overflow:hidden; height:370px; width:1200px; max-width:100%;"></div><br>
            <div id="info"></div>

      </div>
      </div>


  <script>
   var baseLayer = new ol.layer.Group({
      'title': 'Base maps',
      layers: [
        new ol.layer.Tile({
        'title': 'OSM',
        'type': 'base',
        source: new ol.source.OSM()
      })]
    });
  
  
  var layer_4000= new ol.layer.Tile({
        title: "Buffer_4000",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:4000', VERSION: '1.1.1'}
        })
      });
    
  var layer_100= new ol.layer.Tile({
        title: "Buffer_100",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:100', VERSION: '1.1.1'}
        })
      });
    
  var layer_150= new ol.layer.Tile({
        title: "Buffer_150",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:150', VERSION: '1.1.1'}
        })
      });
    
  var layer_70= new ol.layer.Tile({
        title: "Buffer_70",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:70', VERSION: '1.1.1'}
        })
      });
    
  var layer_50= new ol.layer.Tile({
        title: "Buffer_50",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:50', VERSION: '1.1.1'}
        })
      });
    
  var layer_20= new ol.layer.Tile({
        title: "Buffer_20",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:20', VERSION: '1.1.1'}
        })
      });
    
   var layer_musalaPoint= new ol.layer.Tile({
        title: "Musala",
        source: new ol.source.TileWMS({
          url: 'http://localhost:8080/geoserver/musala/wms',
          params: {LAYERS: 'musala:musalaPoint', VERSION: '1.1.1'}
        })
      });
  
      var map = new ol.Map({
        target: 'map',
        layers: [baseLayer, layer_musalaPoint, layer_20, layer_50, layer_70, layer_100, layer_150, layer_4000],
        view: new ol.View({
          projection: 'EPSG:4326',
          center: [106.727236,-6.556784],
          zoom: 15.5
        }),
        controls: ol.control.defaults().extend([
          new ol.control.ScaleLine()
        ])
      });
 
      map.on('singleclick', function(evt) {
        var info_div = document.getElementById('info');
        var view = map.getView();
        var url = layer_musalaPoint.getSource().getGetFeatureInfoUrl(
            evt.coordinate, view.getResolution(), view.getProjection(),
            {'INFO_FORMAT': 'text/html', 'FEATURE_COUNT': 5}
        );
        if (url) {
          info_div.innerHTML = '<iframe seamless src="' + url + '" style="overflow-x:hidden; height:80px; width:1200px; max-width:100%;"></iframe>';
        }
      });
    </script>

  </div>
            <br><br>      <br>
</div>

<!--Footer
==========================-->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">Copyright Ilkom IPB | by <a href="http://cs.ipb.ac.id/" target="_blank">Ilmu Komputer IPB</a><br>
        <small>Biofarmaca Research Center</small>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="social pull-right">
                <a href="http://cs.ipb.ac.id/" target="_blank"><img src="img/social/googleplus.png" alt=""></a>
                <a href="https://twitter.com/ilmukomputerIPB" target="_blank"><img src="img/social/twitter.png" alt=""></a>
            </div>
        </div>
      </div>
    </div>
</footer>
<!--/.Footer-->
</body>
</html>
