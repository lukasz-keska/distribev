<?php
/**
 * @var $contacts Contact[]
 */
$this->pageTitle = $model->title;

include_once 'timeline.php';


?>



<style>
    
    /* CSS du�ej mapki */

    #bigmap {
        height:630px;
    }

    .map-fluid {
    max-width:100%;
    height:auto
    }

    .img-adjust {
    padding: 1px;
}
    
    .options-area-bg-first {
        background-image: url("/gfx/about/lista-oddzialow.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 200px;
        background-position: center;
    }
    .options-area-bg-first:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }
    .options-area-bg-second {
        background-image: url("/gfx/about/sklepy-partnerskie.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 200px;
        background-position: center;
    }
    .options-area-bg-second:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }
    .options-area-bg-third {
        background-image: url("/gfx/about/kariera.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 200px;
        background-position: center;
    }
    .options-area-bg-third:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }

    .options-area-description {
        top:25%;
        position: absolute;
        color: #ffffff;
        font-size: 24px;
        font-weight: 600;
        z-index: 10;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 60%;
    }
    
    .btn.btn-outline-light{
        cursor:pointer;
    }
    
    .sale-team{
        margin-bottom:0px !important;
    }
    
    .options-area-description a, .options-area-description a>.btn{
        width:100%;
    }
    
    .options-area-description .btn{
        color: #212529;
        background-color: #f8f9fa !important;
        border-color: #f8f9fa !important;
    }
    
    .options-area-description .btn:hover{
        color: #003b7e !important;
    }
    
    .is-centered {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .timeline{
        padding-left: 0px;
        padding-right: 0px;
        margin-left: -50px;
        margin-right: -50px;
    }
    
    .timeline-stripe{
        width:5px;
        height:30px;
        background-color:#9d9d9d;
    }
    
    .timeline-stripe-short{
        width:5px;
        height:15px;
        background-color:#9d9d9d;
    }
    
    
    .timeline-circle{
        border-radius:25px;
        background-color:#FFF;
        border:3px solid;
        width:40px;
        height:40px;
    }
    
    .timeline-circle-small{
        border-radius:20px;
        background-color:#FFF;
        border:2px solid;
        width:15px;
        height:15px;
        border-color: #9d9d9d;
    }
    
    .break {
        flex-basis: 100%;
        height: 0;
    }

    .c-teal{
        border-color: #26a4af;
    }
    
    .c-blue{
        border-color: #0976bb;
    }
    
    .c-navy{
        border-color: #043a8a;
    }
    
    .c-red{
        border-color: #da2025;
    }
    
    .c-orange{
        border-color: #ed602d;
    }
    
    .c-yellow{
        border-color: #efa32c;
    }
    
    .c-pink{
        border-color: #fe00dc;
    }
    
    .c-violet{
        border-color: #7c0ac3;
    }
    
    .c-lgreen{
        border-color: #00feaa;
    }
    
    .c-green{
        border-color: #06c835;
    }
    
    .c-dgreen{
        border-color: #156015;
    }
    
    .low_res .timeline-element{
        margin-top:10px;
        width:100%;
    }
    
    .low_res .timeline-element .content{
        padding-left: 9px;
        padding-right: 9px;
    }
    
    .t-left .timeline-element:first-of-type{
        margin-top:38px;
    }
    
    .t-right .timeline-element:first-of-type{
        margin-top:120px;
    }
    
    .timeline-element h2 {
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
    }
    
    .timeline-element h2.title-background {
        position: relative;
        z-index: 1;
    }
    
    .timeline-element h2.title-background:before {
        border-top: 3px solid #8d8d8d;
        content:"";
        margin: 0 auto; /* this centers the line to the full width specified */
        position: absolute; /* positioning must be absolute here, and relative positioning must be applied to the parent */
        top: 50%; left: 0; right: 0; bottom: 0;
        width: 95%;
        z-index: -1;
    }

     .timeline-element h2.title-background span { 
        /* to hide the lines from behind the text, you have to set the background color the same as the container */ 
        background: #fff; 
        padding: 0 15px; 
    }
    
    .timeline-element .content{
        font-size: 11px;
        padding-left: 12px;
    }
    
    .te-1993{
        margin-top: 90px;
    }
    
    .te-1995{
        margin-top: 121px;
    }
    
    .te-2000{
        margin-top: 87px;
    }
    
    .te-2007{
        margin-top: 45px;
    }
    
    .te-2019{
        margin-top: 75px;
    }
    
    .te-1994{
        margin-top: 105px;
    }

    .te-1998{
        margin-top: 124px;
    }

    .te-2006{
        margin-top: 41px;
    }

    .te-2014{
        margin-top: 123px;
    }
    
    @media (max-width:700px){
        .hi_res{
            display:none;
        }
        
        .low_res{
            display:flex;
        }
    }
    
    @media (min-width:701px){
        .hi_res{
            display:flex;
        }
        
        .low_res{
            display:none;
        }
    }
</style>


<div class="content-grey">
    <div class="container">
        <div id="content">
        
            <ul class="d-flex breadcrumbs">
                <li><a href="#">Strona główna</a></li>
                <li>></li>
                <li><a href="#"><?=$model->title?></a></li>
            </ul>

            <h2 class="content-h2 mt-2 mb-2">
                <strong><?=$model->title?></strong>
            </h2>

            <div class="about-us">
                <p class="pt-3 about-us-main-description"><?=$model->header?></p>
                
                <div class="row pt-5">
                    <div class="col-sm-6 col-12 mb-0">
                        <p class="about-us-custom-description"><?=$model->content?></p>
                    </div>
                    <div class="col-sm-6 col-12">
                        <?php if($model->file->hasImage()): ?>
                            <?=CHtml::image($model->file->getUrl('medium'),'',['class'=>'img-fluid about-us-image']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row low_res">
        <?php   
            foreach($timeline as $year => $desc){
            ?>  
            
            <div class="timeline-element">
                <h2 class="title-background"><span><?=$year?></span></h2>
                <div class="content">
                    <?=$desc?>
                </div>
            </div>
        <div class="break"></div>
        <?php  
            }
        ?>
    </div>
    <div class="row hi_res">
        <div class="col-md-5 t-left">
            
            <?php             
                $i = 0;
                foreach($timeline as $year => $desc){
                ?>  
                <?php
                
                    if(!($i%2)){

                        ?>
                            <div class="timeline-element te-<?=$year?>">
                                <h2 class="title-background"><span><?=$year?></span></h2>
                                <div class="content">
                                    <?=$desc?>
                                </div>
                            </div>
                        <?php    
                    }
                
                $i++;
                }
            ?>
          
            
        </div>
        <div class="col-md-2 is-centered timeline">
            <div class="timeline-stripe"></div><div class="break"></div>
            <div class="timeline-circle c-teal"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-blue"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-navy"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-red"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-orange"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-yellow"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-pink"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-violet"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-lgreen"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-green"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle c-dgreen"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
            <div class="timeline-circle-small"></div><div class="break"></div>
            <div class="timeline-stripe-short"></div><div class="break"></div>
        </div>
        <div class="col-md-5 t-right">
            <?php             
                $i = 0;
                foreach($timeline as $year => $desc){
                ?>  
                <?php                
                    if($i%2){

                        ?>
                            <div class="timeline-element te-<?=$year?>">
                                <h2 class="title-background"><span><?=$year?></span></h2>
                                <div class="content">
                                    <?=$desc?>
                                </div>
                            </div>
                        <?php    
                    }
                
                $i++;
                }
            ?>
        </div>
    </div>
    
    
    
    
                <div class="pt-5">

                    <div class="d-flex flex-md-row flex-column pb-5">
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column text-center">
                                    <span>Oddziały Alco-Trade</span><br />
                                    <a href="<?=Yii::app()->controller->createUrl('site/shops')?>"><div class="btn btn-outline-light" data-target="<?=Yii::app()->controller->createUrl('site/shops')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div></a>
                                </div>
                            </div>
                            <div class="options-area-bg-first"></div>
                        </div>
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column text-center">
                                    <span>Nasza Oferta</span><br />
                                    <a href="<?=Yii::app()->controller->createUrl('site/promotions',['sklepy'=>1])?>"><div class="btn btn-outline-light" data-target="<?=Yii::app()->controller->createUrl('site/promotions')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div></a>
                                </div>
                            </div>
                            <div class="options-area-bg-second"></div>
                        </div>
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column text-center">
                                    <span>Kariera</span><br />
                                    <a href="<?=Yii::app()->controller->createUrl('site/career')?>"><div class="btn btn-outline-light" data-target="<?=Yii::app()->controller->createUrl('site/career')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div></a>
                                </div>
                            </div>

                            <div class="options-area-bg-third"></div>
                        </div>
                    </div>
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
                            latLng: [52.2331089, 21.0376814],
                            data: 'Biuro Zarządu'
                    }, {
                            latLng: [53.043051, 18.6634982],
                            data: 'Centrum Operacyjne'
                    }, {
                            latLng: [54.1835371, 16.1534013],
                            data: 'Detal Partner'
                    }, {
                            latLng: [52.753992, 15.2626849],
                            data: 'MAC'
                    }, {
                            latLng: [51.9325402, 15.5015803],
                            data: 'System'
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
