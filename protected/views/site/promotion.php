<?php
$this->pageTitle = $promotion->title;
?>

<style>
    
    .icon-inline .icon-img{
        background-color: #397cb0;
        height: 80px;
        width: 80px;
        border-radius: 45px;
        position: relative;
        margin: 0 auto;
    }
    
    .icon-inline .icon-img img{
        margin-top:17px;
    }
    
    .icon-inline .icon-img img.truck{
        margin-top:24px;
    }
    
    .icon-inline .icon-desc{
        margin-top: 10px;
    }
    
    .options{
        margin-top:20px;
        margin-bottom: 20px;
    }
    
    .options>div{
        padding-top: 25px;
        height: 170px;
        background-repeat: no-repeat;
        background-size: cover;
        
    }
    
    .options .catalog{
        background-image: url(/gfx/promotions/glasses.png);
    }
    
    .options .sections{
        background-image: url(/gfx/promotions/handshake.png);
    }
    
    .opt-title{
        font-size: 20px;
        font-weight: bold;
        color: white;
        margin-bottom: 20px;
    }
    
    .opt-btn{
        color: white;
        border: #FFF solid 2px;
        padding: 10px;
        width: 160px;
        font-weight: bold;
        position: relative;
        margin: 0 auto;
        cursor:pointer;
    }
    
    
</style>
<div id="content" class="content-bg">
    
            <ul class="d-flex breadcrumbs">
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/promotions')?>">Oferta</a></li>
                <li></li>
                <li><?=$promotion->title?></li>
            </ul>

            <h2 class="content-h2 mt-2 mb-2">
                <strong><?=$promotion->title?></strong>
            </h2>
            <p class="content-p pt-3 pb-3">
                <?=nl2br($promotion->description)?>
            </p>
            
            <div class="row assets text-center">
                
                <div class="icon-inline col-sm-3 text-center">
                    <div class="icon-img"><img src="/gfx/promotions/icons/wine.svg"></div>
                    <div class="icon-desc">
                        Największy wybór alkoholi znanych i popularnych marek
                    </div>
                </div>
                
                <div class="icon-inline col-sm-3">
                    <div class="icon-img"><img src="/gfx/promotions/icons/price-tag.svg"></div>
                    <div class="icon-desc">
                        Atrakcyjne ceny, pakiety promocyjne i materiay reklamowe POS
                    </div>
                </div>
                
                <div class="icon-inline col-sm-3">
                    <div class="icon-img"><img src="/gfx/promotions/icons/truck.svg" class="truck"></div>
                    <div class="icon-desc">
                        Logistyka o ogólnopolskim zasięgu oferująca dostawy w ciągu (?)
                    </div>
                </div>
                
                <div class="icon-inline col-sm-3">
                    <div class="icon-img"><img src="/gfx/promotions/icons/consultant.svg"></div>
                    <div class="icon-desc">
                        Profesjonalny zespół doradców na terenie całej Polski
                    </div>
                </div>
                
            </div>
            
            
            <div class="row options text-center">
                <div class="col-sm-6 catalog">
                    <div class="opt-title">
                        Aktualna Gazetka
                    </div>
                    <div class="opt-btn" data-url="/pdf/wedding_2016.pdf">
                        Pobierz <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <div class="col-sm-6 sections">
                    <div class="opt-title">
                        Lista Oddziałów
                    </div>
                    <div class="opt-btn" data-url="<?=Yii::app()->controller->createUrl('site/shops')?>">
                        Sprawdź <i class="fas fa-arrow-right"></i>
                    </div>
                   
                </div>
            </div>

</div>


<script>
    $('.opt-btn').on('click',function(){
        if($(this).data('url'))
            window.location.href=$(this).data('url');
    })
    
</script>