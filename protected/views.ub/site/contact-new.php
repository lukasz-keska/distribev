<?php
/**
 * @var $contacts Contact[]
 */
$this->pageTitle = 'Kontakt';

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
	background: #00355d; /* Old browsers */
    background: -moz-linear-gradient(left, #00355d 0%, #0064a0 49%, #0064a0 51%, #00355d 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #00355d 0%,#0064a0 49%,#0064a0 51%,#00355d 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #00355d 0%,#0064a0 49%,#0064a0 51%,#00355d 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00355d', endColorstr='#00355d',GradientType=1 ); /* IE6-9 */
    border-radius: 0px 95px;
}

.blue-box-area {
	color: #fff;
}

.white-box {
	background: #FFF;
	box-shadow:0px 0px 0px 25px #00355d inset;
	border-radius: 0px 95px;
	margin-top: 100px;
	margin-left: -80px;
	margin-bottom: 80px;
}

#map {
    width: 400px;
    height:300px;
}

/* CSS du�ej mapki */

#bigmap {
    height:620px;
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

</style>

<?php

cs()->registerScriptFile('/js/gmap3.min.js');

?>



		<div class="container">
			<div>

				<ul class="d-flex breadcrumbs">
					<li><a href="#">Strona główna</a></li>
					<li>></li>
					<li><a href="#">Kontakt</a></li>
				</ul>

				<h2 class="content-h2 mt-2 mb-2">
					<strong>Kontakt</strong>
				</h2>

				<div>
					<p class="pt-3 contact-main-description">Firma United Beverages jest jednym z największych dystrybutorów alkoholi w Polsce i współpracuje z największymi producentami w kraju i na świecie. Jesteśmy obecni na rynku od ponad 20 lat i będąc równiez jednym z największych importerów win i alkoholi mocnych oraz włascicielem wielu znaków towarowych w różnych kategoriach i segmentach rynku..</p>

					<div class="row pt-5">
						<div class="col-sm-6 col-12 mb-0">
		<div class="blue-box pl-5 pt-5 pb-5">
			<p class="blue-box-area ml-5 mt-4 mb-4">
						<span class="h4 font-weight-bold">Biuro Zarządu</span><br />
						<span>UNITED BEVERAGES S.A.<br />
							ul. Plaska 24-36<br />
						87-100 Toruń</span><br /> <br/>
				
						<span class="h4 font-weight-bold">Sekretariat Biura Zarządu</span><br />
						<span>Izabela Mendyk<br />
							E-mail: izabela.mendyk@unitedbeverages.pl <br />
							Tel.: 695 875 919 <br />
							Fax.: 56 655 03 66</span>
						</p>
				</div>
				<p class="pl-5 pt-5 pb-5 pr-5 ml-5" style="font-size: 13px">
				<span>Zapytania o asortyment i ceny produktów prosimy kierować do hurtowni, sekretariat nie posiada takich informacji.<br />
Numery telefonów znajdują się w zakładce LISTA ODDZIAŁÓW.
<br /> <br />
Sekretariat czynny od poniedziałku do piątku w godz. 8.00-16.00.</span>
</p>
						</div>
						<div class="col-sm-6 col-12">
		<div class="white-box pl-5 pt-5 pb-5">
					
					<p class="ml-5 mt-4 mb-4">
						<span class="h4 font-weight-bold">Centrum operacyjne w Toruniu</span><br />
						<span>UNITED BEVERAGES S.A.<br />
							ul. Plaska 24-36<br />
						87-100 Toruń</span><br />
				<br/ >
						<span class="h4 font-weight-bold">Sekretariat</span><br />
						<span>Izabela Mendyk<br />
							E-mail: izabela.mendyk@unitedbeverages.pl <br />
							Tel.: 695 875 919 <br />
							Fax.: 56 655 03 66</span>
						</p>
				</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		</div>
	</div>
	<div>
		<div class="row">
			<div class="col-sm-6 col-12">
				<div id="bigmap" class="map-fluid"></div>
			</div>
			<div class="col-sm-3 col-12 d-flex flex-column justify-content-center pl-5">
				<h4 class="pt-5 pb-3 font-weight-bold">Formularz kontaktowy</h2>
				<form>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Imię">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="E-mail">
    </div>
  <div class="form-group">
<!--     <input type="textarea" class="form-control" id="formGroupExampleInput3" rows="3" placeholder="Wiadomość"> -->
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Wiadomość"></textarea>
  </div>
  <button type="submit" class="btn btn-secondary btn-block btn-subm">Wyślij</button>
</form>
			</div>
		</div>

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<script>
			$( document ).ready(function() {
				$('#map').gmap3({
					map: {
						options: {
							center: [51.7687323, 19.4569911],
							zoom: 5.2,
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
							latLng: [52.20113, 21.39883],
							data: 'Oddział Warszawa'
						}, {
							latLng: [52.864664, 20.6146912],
							data: 'Oddział Ciechanów'
						}, {
							latLng: [50.1268508, 19.42783],
							data: 'Oddział Chrzanów, '
						}, {
							latLng: [54.30572, 18.5438],
							data: 'Oddział Gdańsk'
						}, {
							latLng: [50.84167, 20.62333],
							data: 'Oddział Kielce'
						}, {
							latLng: [51.2483523, 22.6255872],
							data: 'Oddział Lublin'
						}, {
							latLng: [51.79636, 19.4147904],
							data: 'Oddział Łódź'
						}, {
							latLng: [49.599015, 20.7280975],
							data: 'Oddział Nowy Sącz'
						}, {
							latLng: [52.4236359, 16.9236679],
							data: 'Oddział Poznań'
						}, {
							latLng: [53.3667, 14.4667],
							data: 'Oddział Szczecin'
						}, {
							latLng: [51.1923644, 17.0321418],
							data: 'Oddział Wrocław'
						}, {
							latLng: [53.106924, 18.045183],
							data: 'Oddział Nowy Sącz'
						}, {
							latLng: [53.043443, 18.6621646],
							data: 'Hurtownia Toruń'
						}],
						options: {
							icon: {
								path: google.maps.SymbolPath.CIRCLE,
								fillColor: '#00F',
								fillOpacity: 0.6,
								strokeColor: '#00A',
								strokeOpacity: 0.9,
								strokeWeight: 1,
								scale: 5
							}
						},
						events:{
							click: function(marker, event, context) {
								var bigmap = $(this).gmap3('get'),
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
							name: 'Mapa'
						},
						styles: [{
							"elementType": "labels",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "administrative.country",
							"elementType": "geometry.stroke",
							"stylers": [
							{
								"color": "#ffffff"
							},
							{
								"visibility": "on"
							},
							{
								"weight": 4
							}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "administrative.land_parcel",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							}
							]
						},
						{
							"featureType": "administrative.locality",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "administrative.neighborhood",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "administrative.province",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape.natural",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape.natural",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape.natural",
							"elementType": "geometry.stroke",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape.natural.landcover",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "landscape.natural.terrain",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "poi",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "on"
							}
							]
						},
						{
							"featureType": "road",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "transit",
							"stylers": [
							{
								"visibility": "off"
							}
							]
						},
						{
							"featureType": "water",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "simplified"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
							{
								"color": "#c0c0c0"
							},
							{
								"visibility": "simplified"
							}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry.fill",
							"stylers": [
							{
								"color": "#ffffff"
							},
							{
								"visibility": "simplified"
							},
							{
								"weight": 4
							}
							]
						}
						]
					}
				});


$('#bigmap').gmap3({
	map: {
		options: {
			center: [51.7687323, 19.4569911],
			zoom: 6.2,
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
			latLng: [52.20113, 21.39883],
			data: 'Biuro Zarządu'
		}, {
			latLng: [53.043443, 18.6621646],
			data: 'Centrum Operacyjne'
		}],
 options: {icon: new google.maps.MarkerImage('img/mark2.png', new google.maps.Size(30, 40, "px", "px"))
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
});
</script>

