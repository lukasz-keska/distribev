<?php
/**
 * @var $contacts Contact[]
 */
$this->pageTitle = $model->title;

?>


    


<style type="text/css">


.content-grey {
    background: #c8c8c8; /* Old browsers */
    background: -moz-linear-gradient(left, #c8c8c8 0%, #f9fdff 33%, #f9fdff 67%, #c8c8c8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c8c8c8', endColorstr='#c8c8c8',GradientType=1 ); /* IE6-9 */
}

.blue-box {
    border-radius: 0px 95px;
}

.blue-box-area {
	color: #fff;
}

.white-blue-box {
    margin-top: -40px;
    box-shadow: 0px 0px 0px 25px #FFF;
    border:1px solid #fff;
    background: #003b7e;
    background: -moz-linear-gradient(left, #003b7e 0%, #e35f71 49%, #e35f71 51%, #003b7e 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #003b7e 0%,#e35f71 49%,#e35f71 51%,#003b7e 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #003b7e 0%,#e35f71 49%,#e35f71 51%,#003b7e 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003b7e', endColorstr='#003b7e',GradientType=1 ); /* IE6-9 */
    border-radius: 95px 0px;
}

.white-box {
	background: #FFF;
	box-shadow:0px 0px 0px 25px #003b7e inset;
	border-radius: 0px 95px;
	margin-top: 100px;
	margin-left: -80px;
	margin-bottom: 80px;
}


.white-blue-box-area, .white-blue-box-area a {
	color: #FFF;
}

#map {
    width: 400px;
    height:300px;
}

/* CSS du�ej mapki */

#bigmap {
    height:630px;
}

.map-fluid {
max-width:100%;
height:auto
}

.btn-subm {
	background-color: #002f53;
	text-transform: uppercase;
}

.content-p {
    font-size: 20px;
    font-weight: 500;
}

.breadcrumbs {
    padding: 0;
}

.breadcrumbs li {
    list-style: none;
    font-size: 14px;
    margin: 20px 10px 20px 0;
}

.breadcrumbs li a {
    color: #000;
}

.content-h2 {
    font-size: 40px;
}

.contact-main-description {
    font-size: 22px;
}

.contacts-container{
    margin-bottom:30px;
}

@media (max-width:600px){
    .bbx-top{
        margin-left: 0.5rem !important;
        margin-top: 0.5rem !important;
    }
}

@media (max-width:600px){
    .bbx-top{
        margin-left:  -1.5rem !important;
        margin-top: -0.5rem !important;
    }
}

@media (max-width:450px){
    .wb-bot{
        margin-left: 4.3rem !important;
        width: 75%;
    }
}

@media (max-width:380px){
    .wb-bot{
        margin-left: 2.3rem !important;
        width: 75%;
    }
}

</style>


<div>
    <div class="container">
        <div>
            
            <ul class="d-flex breadcrumbs">
                    <li><a href="#">Strona główna</a></li>
                    <li>></li>
                    <li>Kontakt</li>
            </ul>

            <h2 class="content-h2 mt-2 mb-2">
                    <strong><?=$model->title?></strong>
            </h2>

            <div>
                <div class="pt-3 contact-main-description"><?=$model->content?></div>

                    <div class="row pt-5 contacts-container">

                            <div class="col-sm-6 col-12 mb-0">

                                <?php 

                                foreach($elements['contact'] as &$contact){
                                    $contact['content'] = str_replace(['<p>','</p>'],['<span>','</span>'],$contact['content']);
                                }

                                ?>


                                
                                </div>
                                
                                
                                
                            </div>

                          
                    </div>
            </div>
        </div>
    </div>



<div class="row">
        <div class="col-sm-12 col-12">
                <div id="bigmap" class="map-fluid"></div>
        </div>
</div>

<script src="/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script defer>
    
function initMap() {

    $('#bigmap').gmap3({
            map: {
                    options: {
                            center: [51.9887323, 19.5569930],
                            zoom: 6.5,
                            mapTypeId: 'custom_style',
                            mapTypeControl: false,
                            fullscreenControl: false,
                            panControl: false,
                            zoomControl: false,
                            streetViewControl: false,
                    }
            },
            marker: {
                    values:[{
                            latLng: [52.4614717, 17.7805925],
                            data: 'Biuro Zarządu'
                    }],
     options: {icon: new google.maps.MarkerImage('/gfx/mark2.png', new google.maps.Size(30, 40, "px", "px"))
            },
                    events:{
                            click: function(marker, event, context) {
                                    var map = $(this).gmap3('get'),
                                    infowindow = $(this).gmap3({get:{name:'infowindow'}});
                                    if (infowindow) {
                                            infowindow.open(map, marker);
                                            infowindow.setContent(context.data);
                                    } else {
                                            $(this).gmap3({
                                                    infowindow: {
                                                            anchor: marker,
                                                            options: {content: context.data}
                                                    }
                                            });
                                    }
                            }
                    }
            },

            styledmaptype: {
                    id: 'custom_style',
                    options: {
                            name: 'Mapa2'
                    },
                    styles: [{
                    "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
        {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#ffffff"
          },
          {
            "saturation": 100
          },
          {
            "lightness": 100
          }
        ]
      },
      {
                            "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#a6a6a6"
          },
          {
            "visibility": "on"
          },
          {
            "weight": 1.5
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
          {
            "lightness": 25
          },
          {
            "visibility": "on"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#e8e8e8"
          },
          {
            "visibility": "on"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
                            }
                            ]
                    }
                    ]
            }
    });

}
</script>
