<?php
$this->pageTitle = 'Biura Obsługi Klienta i Sklepy partnerskie';

$showOnlyShops = isset($_GET['sklepy']);

?>

<style>
    
    .shops-list-container{
        margin-top: 35px;
    }
    
    .buttons{
        height: 40px;
        background-color: #FFF;
    }
    
    .buttons>div{
        text-align:center;
        font-weight:bold;
        color:#00355d;
        padding-top: 7px;
        cursor:pointer;
    }
    
    .buttons>div.disactivated{
        color:#FFF;
        background-color:#00355d;
    }
    
    .shops-list{
        padding-top: 20px;
        background-color:#FFF;
        margin-bottom:30px;
    }
    
    .shop{
        margin-bottom:30px;
        position: relative;
    }
    
    .shop-content{
        position: relative;
        margin: 0 auto;
        width: 260px;
    }
    
    .list-shop .shop .s-content{
        margin-left: 18px;
    }
    
    .shop .s-title{
        margin-bottom: 5px;
    }
    
    .shop .s-title>*{
        display:inline-block;
        color:#00355d;
    }
    
    .list-shop .shop .s-title>span{
        margin-left:5px;
    }
    
    .shop .s-title>span{
        font-weight:bold;
        font-size: 17px;
    }
    
    .shop .lower{
        font-size: 14px;
        margin-top: 5px;
    }
    
    .fa-map-marker-alt.disabled{
        color:#a0a0a0;
    }
    
    #eshopButton{
        background-color: #00355d;
        color: #FFF;
        width: 200px;
        height: 50px;
        box-shadow: none;
        border: none;
        font-size:16px;
        font-weight: bold;
        font-family: 'Lato', sans-serif;
        margin-bottom: 30px;
    }
</style>

<div id="content" class="content-bg">
    
    <ul class="d-flex breadcrumbs">
        <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
        <li>></li>
        <li>Biura Obsługi Klienta</li>
    </ul>

    <h2 class="content-h2 mt-2 mb-2">
        <strong><?=$this->pageTitle?></strong>
    </h2>
         
    
    <div class="container shops-list-container">
        
        <div class="row buttons">
            
            <div class="col-sm-6<?=($showOnlyShops)?' disactivated':''?>" data-target="section">Biura Obsługi Klienta</div>
            <div class="col-sm-6<?=(!$showOnlyShops)?' disactivated':''?>" data-target="shop">Sklepy partnerskie</div>
            
        </div>
      
        <div class="row list-section shops-list"<?=($showOnlyShops)?' style="display:none;"':''?>>
            
            <?php foreach($shops['section'] as $shop): ?>
            <div class="shop col-sm-6">
                <div class="shop-content">
                    <div class="s-title"><span><?=$shop->name?></span></div>
                    <div class="s-content">
                        <div>ul. <?=$shop->street?></div>
                        <div><?=$shop->zipcode.' '.$shop->city?></div>
                        <div class="lower">
                            <div>Email: <?=$shop->email?></div>
                            <div>Tel: <?=$shop->phone?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
        
        <div class="row list-shop shops-list"<?=(!$showOnlyShops)?' style="display:none;"':''?>>
            <div class="shop col-sm-12">
                
                <div class="shop-content" style="background-content:#ccc;text-align:center;width:auto;">
                    Lista sklepów partnerskich w przygotowaniu
                </div>
            </div>
            <?php /*foreach($shops['shop'] as $shop): ?>
            <div class="shop col-sm-6">
                <div class="shop-content">
                    <?php if(!empty($shop->gmap_url)): ?>
                        <a class="s-title" href="<?=$shop->gmap_url?>" target="_blank"><i class="fas fa-map-marker-alt"></i><span><?=$shop->name?></span></a>
                    <?php else: ?>
                        <div class="s-title"><i class="fas fa-map-marker-alt disabled"></i><span><?=$shop->name?></span></div>
                    <?php endif; ?>
                    <div class="s-content">
                        <div>ul. <?=$shop->street?></div>
                        <div><?=$shop->zipcode.' '.$shop->city?></div>
                    </div>
                </div>
            </div>
            <?php endforeach;*/ ?>
            
        </div>
        
    </div>
    
     
    <div class="container text-center">
            <?php
                echo CHtml::button('E-SKLEP', ['id' => 'eshopButton', 'onclick' => "openInNewTab('http://alkosfera.pl/')"]);
            ?>
    </div>
    
            
</div>
<!--
<a class="modalButton" href="javascript:void()" data-toggle="modal" data-src="https://goo.gl/maps/r4BgDfVgwme9RzLC7" data-height=320 data-width=450 data-target="#myModal">Click me</a>
<div id="mapModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mapa</h4>
      </div>
      <div class="modal-body">
        <iframe frameborder="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
      </div>
    </div>

  </div>
</div>
-->

<script>
    
function gotoShop(){
    window.location.href="http://alkosfera.pl/";
} 
    
$(document).on('click','.buttons>div.disactivated',function(){
    $(this).removeClass('disactivated');
    $(this).siblings().addClass('disactivated');
    var cls = 'list-'+$(this).data('target');    
    $('.shops-list:not(.'+cls+')').hide();
    $('.shops-list.'+cls).show();
});

$('a.modalButton').on('click', function(e) {
    
    var src = $(this).attr('data-src');
    var height = $(this).attr('data-height') || 300;
    var width = $(this).attr('data-width') || 400;

    $("#mapModal iframe").attr({'src':src,
                               'height': height,
                               'width': width});
    $("#mapModal").modal('show');                      
});

</script>