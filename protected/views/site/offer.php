<?php
$this->pageTitle = $model->title;
?>


<style>
    
body{
    overflow-x: hidden;
}    
    
.inner-container {
  height:100%;
}

.gradient-part {
  position: relative;
  
}

.gradient-part:before {
  content: "";
  position: absolute;
  background: #00335a;
  color: #fff;  
  top: 0;
  bottom: 0;
  width: 9999px;   /* some huge width */
} 


.gradient-part:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  width: 9999px;   /* some huge width */
} 

.gradient-part:before {
  right: 100%; 
  
}
.gradient-part:after {
  left: 100%;
}

.banners_list img{
    margin-bottom:5px;
}


/* SLIDER */

.tooltip.in {
  opacity: 1;
}

.slider .tooltip.top {
    margin-top: -39px;
    width: 90px;
    margin-left: 8px;
}


.tooltip-inner {
    max-width: 100px;
    height: 46px;
    padding: .25rem .5rem;
    color: #fff;
    text-align: center;
    background-image: url(/gfx/tooltip_bgr.png);
    background-size: contain;
    background-color: transparent;
    border-radius: 0.4rem;
}

.slider-track{
        box-shadow: none;
    background: transparent;
}

.slider-handle.custom {
	background: transparent none;
	/* You can customize the handle and set a background image */
}

.slider-handle.custom{
    background: transparent none;
    background-image: url("/gfx/sliderhandle.png");
    background-size: contain;
    box-shadow: none;
    background-repeat: no-repeat;
    top: 0px;
    width: 50px;
    height: 50px;
    border-radius: 30px;
}

/* Or display content like unicode characters or fontawesome icons */
.slider-handle.custom::before {
    content:''!important;
    line-height: 30px;
    color:#044994;
    width:30px;
    height:30px;
    background-color:#FFF !important;        
}

.slider.slider-horizontal .slider-tick, .slider.slider-horizontal .slider-handle {
    margin-left: -16px;
}

.slider.slider-horizontal {
    width: 505px;
    height: 30px;
}

.slider.slider-horizontal .slider-track{
    height:30px;
}

.slider-selection,.slider-track-low, .slider-track-high{
    background-image:none;
    background-repeat: no-repeat;
    box-shadow: none;
    background-color:#044994;
    border-radius: 20px;
}

.slider-results{
    margin-top: 25px;
}


/*Dodatkowe uslugi*/
.options-area {
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f6f6f6+49,f6f6f6+49,ededed+100 */
    background: #ffffff; /* Old browsers */
    background: -moz-linear-gradient(left, #ffffff 0%, #f6f6f6 49%, #f6f6f6 49%, #ededed 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #ffffff 0%,#f6f6f6 49%,#f6f6f6 49%,#ededed 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #ffffff 0%,#f6f6f6 49%,#f6f6f6 49%,#ededed 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=1 ); /* IE6-9 */
}
.options-area-title {
    font-size: 28px;
    text-align: center;
}
.options-area-bg-first {
    background-image: url("/gfx/offer/eventy.png");
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
    background-image: url("/gfx/offer/kontakt.png");
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
    background-image: url("/gfx/offer/oddzialy.png");
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
    position: absolute;
    top: 25%;
    left: 0;
    padding-left: 70px;
    color: #ffffff;
    font-size: 24px;
    font-weight: 600;
    z-index: 10;
}

.module-contact .options-area-description{
    
}

.module-sections .options-area-description{
    left: 8%;
}

.calculator-container{
    background-image: url(/gfx/calculator.svg);
    background-repeat: no-repeat;
    background-position: 50% 120%;
    background-size: 40%;
}

.contact-container{
    margin-top: 20px;
}

.contact-container .pb-4{
    font-size: 20px;
}

ul.tabs{
    display: inline-block;
}

ul.tabs li {
    list-style: none;
    float: left;
    margin-right:20px;
}
ul.tabs li:before {
    content: '\ffed';
    margin-right: 0.5em;
}

.btn-container{
    margin-top: 50px;
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

    <div class="container">
        <ul class="d-flex breadcrumbs">
            <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
            <li>></li>
            <li><?=$this->pageTitle?></li>
        </ul>

        <h2 class="content-h2 mt-2 mb-2">
            <strong><?=$model->title?></strong>
        </h2>
        <div class="content-p pt-3 pb-3"><?=$model->content?></div>
    </div>

    <div class="container">
        
        <div class="inner-container gradient-part">
            
            
    <div class="row">
        <div class="content-guarantee col-md-6 col-12">
            <div class="">
                <h2 class="pt-5 font-weight-bold">Co gwarantujemy</h2>
                <div class="d-flex flex-row align-items-center pb-2 pt-2">
                    <div class="icon-img"><img src="/gfx/offer/icons/wine.svg"></div>
                    <span class="pl-4" style="font-size: 20px;">Największy wybór alkoholi <br /> znanych i popularnych marek</span>
                </div>
                <div class="d-flex flex-row align-items-center pb-2 pt-2">
                    <div class="icon-img"><img src="/gfx/offer/icons/price-tag.svg"></div>
                    <span class="pl-4" style="font-size: 20px;">Atrakcyjne ceny <br /> i pakiety promocyjne</span>
                </div>
                <div class="d-flex flex-row align-items-center pb-2 pt-2">
                    <div class="icon-img"><img src="/gfx/offer/icons/consultant.svg"></div>
                    <span class="pl-4" style="font-size: 20px;">Profesjonalny zespół doradców w naszych <br /> oddziałach na terenie całej Polski</span>
                </div>
                <div class="d-flex flex-row align-items-center pb-2 pt-2">
                    <div class="icon-img"><img src="/gfx/offer/icons/truck.svg"></div>
                    <span class="pl-4" style="font-size: 20px;">Możliwość <br /> usługi transportowej</span>
                </div>
                
                </br>
            </div>
        </div>
        <div class="col-md-6 col-12 calculator-container">
            
            <h2 class="pt-5 font-weight-bold">Kalkulator weselny</h2>
            <p class="pb-2">Ile alkoholu bedziesz potrzebowal, w jakim asortymencie?<br />
            Skorzystaj z naszego symulatora.</p>
            
            <input id="offerSlider" type="text" data-slider-handle="custom"/>
            
            <div class="d-flex justify-content-between pr-5 pl-5 slider-results">
                <div class="d-flex align-items-center pt-3 pb-3">
                    <div class="icon-img"><img src="/gfx/offer/icons/vodka.svg"></div>
                    <div class="d-flex flex-column pl-2">
                        <span class="font-weight-bold result-vodka" style="line-height: 1; font-size: 24px;">10</span>
                        <span style="font-size: 14px; line-height: 1;">butelek <br />wódki 0.5l</span>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-3 pb-3">
                    <div class="icon-img"><img src="/gfx/offer/icons/wine-new.svg"></div>
                    <div class="d-flex flex-column pl-2">
                        <span class="font-weight-bold result-wine" style="line-height: 1; font-size: 24px;">4</span>
                        <span style="font-size: 14px; line-height: 1;">butelek <br />wina</span>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-3 pb-3">
                    <div class="icon-img"><img src="/gfx/offer/icons/champagne.svg"></div>
                    <div class="d-flex flex-column pl-2">
                        <span class="font-weight-bold result-champagne" style="line-height: 1; font-size: 24px;">5</span>
                        <span style="font-size: 14px; line-height: 1;">butelek wina<br />musującego</span>
                    </div>
                </div>
            </div>
            
            <div class="container btn-container text-center">
                <?php
                    echo CHtml::button('E-SKLEP', ['id' => 'eshopButton', 'onclick' => 'openInNewTab("http://alkosfera.pl/")']);
                ?>
            </div>
            
        </div>
    </div>
    
    
            
            
        </div>
    
    </div>
    
    <div class="container">
        
        <div class="pb-5 banners_list">
            
            <?php foreach($elements['banner'] as $banner): ?>
                <?php if($banner->file->hasImage()): ?>
                    <img src="<?=$banner->file->getUrl('original');?>" class="img-fluid" />
                <?php endif; ?>
            <?php endforeach; ?>

            <?php foreach($elements['contact'] as $c): ?>
                    <div class="container text-center contact-container">
                        <div class="pt-4 font-weight-bold"><?=$c->title?></div>
                        <div class="pb-2"><?=$c->content?></div>
                    </div>
            <?php endforeach; ?>        
                    
        </div>
        
 </div>
        
<?php


cs()->registerCssFile('/css/bootstrap-slider.css');
cs()->registerScriptFile('/js/bootstrap-slider.min.js');

?>


<script>
    
$("#offerSlider").slider({
    min:50,
    max:250,
    step:1,
    formatter: function(value) {
        
            $('.result-vodka').text(value);
            $('.result-wine').text(Math.ceil((value*2)/5));
            $('.result-champagne').text(Math.ceil(value/6));
            return value+' osób'
	}
    
});

</script>