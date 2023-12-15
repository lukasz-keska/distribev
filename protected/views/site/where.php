<?php
/**
 * @var $shops Address[]
 */
$this->pageTitle = 'Gdzie kupić';
?>
<div class="page-contact where-buy">
    <div class="container">
        <h2>Znajdź najbliższy sklep:</h2>

        <div class="row">
            <div class="col-sm-5">
                <span>Wpisz województwo, miasto lub adres:</span>
                <input id="filter" value="" type="text" class="form-control mb-25"/>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                    $i = 0;
                    foreach ($shops as $city => $values): ?>
                        <div class="city panel panel-default"
                             data-id="<?php echo $i; ?>" data-city="<?php echo $city; ?>"
                             data-search="<?php echo mb_strtolower($values['search'], 'UTF-8'); ?>">
                            <div class="panel-heading" role="tab" id="header-<?php echo $i; ?>">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" onclick="showAddress('<?php echo $city; ?>'); return false;"
                                       class="collapsed" data-parent="#accordion" href="#content-<?php echo $i; ?>"
                                       aria-expanded="false" aria-controls="content-<?php echo $i; ?>">
                                        <?php echo $city; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="content-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="header-<?php echo $i; ?>">
                                <div class="panel-body">
                                    <div class="shop">
                                        <?php foreach ($values['items'] as $shop): ?>
                                            <div class="row mb-15">
                                                <div class="col-sm-6">
                                                    <span onclick="showAddress('<?php echo $shop->latitude . ', ' . $shop->longitude; ?>', true); $('.title').removeClass('active');  $(this).addClass('active'); return false;"  class="title">
                                                        <?php echo $shop->name; ?>
                                                    </span>
                                                    <span
                                                        class="medium"><?php echo $shop->zipcode; ?> <?php echo $shop->city; ?></span>
                                                    <span class="medium"><?php echo $shop->street; ?></span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <span class="medium">Godziy otwarcia:</span>
                                                    <span class="medium">Pon.-pt.: <?php echo $shop->hours_1; ?></span>
                                                    <span class="medium">Sob.: <?php echo $shop->hours_2; ?></span>
                                                    <span class="medium">Nie.: <?php echo $shop->hours_3; ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endforeach; ?>
                </div>
            </div>
            <div class="col-sm-7">
                <div id="map" style="height: 500px"></div>
            </div>
        </div>
    </div>
</div>
<?php
cs()->registerScript('map', "
var geocoder = null;
var map = null;
var marker =null;
 function loadMap() {
 geocoder = new google.maps.Geocoder();
    var lat = 52.232222;
    var lng = 21.008333;
    var zoom = 6;
	var position = new google.maps.LatLng(lat, lng);

	map = new google.maps.Map($('#map')[0], {
		center: position,
		minZoom: 4,
		zoom: zoom,
		mapTypeId: 'roadmap'
	});
}
function showAddress(address, showMarker) {
      if (geocoder) {
            geocoder.geocode( { 'address': address}, function(results, status) {
            console.log(results);
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    if(showMarker){
                        map.setZoom(15);
                        if(marker)
                            marker.setMap(null);
                        marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        map.setZoom(10);
                    }
                }

            });
            }
      }
", CClientScript::POS_HEAD);

cs()->registerScript('map-loader', "loadMap();", CClientScript::POS_READY);
?>
<script type="text/javascript">
    //$('select').select2();
    var filter = function () {
        var val = $("#filter").val().toLowerCase();
        $('.collapse').collapse('hide');
        $(".city").each(function () {
            if ($(this).data('search').search(new RegExp(val, "i")) < 0) {
                $(this).fadeOut(100);
            } else {
                $(this).fadeIn(100);
//                $(this).children('.collapse').collapse('show');

            }
        });

    }
    $('#filter').keyup(filter);
</script>