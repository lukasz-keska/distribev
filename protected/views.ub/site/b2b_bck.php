<?php
$this->pageTitle = 'Sprzedaż detaliczna - oferta B2B';
?>

<style type="text/css">


.content-grey {
    background: #c8c8c8; /* Old browsers */
    background: -moz-linear-gradient(left, #c8c8c8 0%, #f9fdff 33%, #f9fdff 67%, #c8c8c8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c8c8c8', endColorstr='#c8c8c8',GradientType=1 ); /* IE6-9 */
}

.content-h2 {
    font-size: 40px;
}

.btn-linkbig {
font-size: 25px;
}
.light-box {
	background: #FFF;
    border-radius: 0px 95px;
}

.main-description {
    font-size: 20px;
}

.our-collections {
    background: #FFF;
    position:relative;z-index:101;
}

.img-square {
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  position: relative;
  height: 285px;
}

.border-out {
	  border: 1px solid;
	  border-color: #bfbfbf;
}

.border-in {
	border-top: 1px solid;
	border-right: 1px solid;
	border-bottom: 1px solid;
	border-color: #bfbfbf;
	}

.border-x {
	border-left: 1px solid;
	border-right: 1px solid;
	border-bottom: 1px solid;
	border-color: #bfbfbf;
	}

.border-z {
	border-right: 1px solid;
	border-bottom: 1px solid;
	border-color: #bfbfbf;
	}


.nopadding {
   padding: 0 !important;
   margin: 0px !important;
}

.nopaddingr
{
   padding-right: 0 !important;
}

.nopaddingl
{
   padding-left: 0 !important;
}

.nopaddingb
{
   padding-right: 0 !important;
      padding-left: 0 !important;
}

.our-brands-img-text
{
 position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    text-transform: uppercase;
    font-size: 26px;
    text-align: center;
    z-index: 10;
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


.brand-products{
        padding: 20px 20px 0px 20px;
        position:relative;
}

.prod-el{
    width:100%;
    text-align: center;
    border-bottom: 1px solid #ccc;
    padding: 10px;
    cursor:pointer;
}

.prod-el a, .prod-el a:hover, .prod-el:visited{
    text-decoration: none;
    color:#000;
    font-weight:bold;
}

.prod-el.with-borders{
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
}

.prod-el.with-right-border{
        border-left: none;
        border-right: 1px solid #ccc;
}

.container-gift{
    position:relative;    
    padding: 0px;
}

.gift{
    position: absolute;
    background-image: url(/gfx/promotions/icons/prezent.svg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 300px;
    height: 200px;
    z-index: 100;
    right: 56px;
    top: -160px;
}

.banners_list img{
    margin-top:5px;
    margin-bottom:5px;
}

.offer-btn{
    background-color: #002f53;
    border-color: #002f53;
    display: block;
    margin: 0 auto;
    width: 200px;
    margin-bottom: 20px;
}

.offer-btn:hover{
    background-color: #FFF;
    border-color: #002f53;
    color: #002f53;
}
</style>



<div class="container">
    
    
        <div>

                <ul class="d-flex breadcrumbs">
                        <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                        <li>></li>
                        <li><a href="<?=Yii::app()->controller->createUrl('site/promotions')?>">Promocje</a></li>
                        <li>></li>
                        <li>Sprzedaż bezpośrednia</li>
                </ul>

                <h2 class="content-h2 mt-2 mb-2">
                        <strong><?=$model->title?></strong>
                </h2>
                <h3 class="mt-5">
                        <?=$elements['subtitle'][0]['content']?>
                </h3>

                <div class="row pt-4">
                        <div class="col-md-7 col-12">
                                <p class="main-description"><?=$model->content;?></p>
                        </div>
                        <div class="col-md-5 col-12">
                                <div class="light-box pl-4 pt-3 pb-3">
                                        <p class="mt-4 mb-3">
                                                <span class="h4 font-weight-bold">Kontakt:</span><br />
                                                <span class="main-description"><?=$elements['contact'][0]['content']?></span><br /> <br/>
                                        </p>
                                </div>
                        </div>
                </div>
                <?php if(isset($elements['banner']) && !empty($elements['banner'])): ?>
                    <div class="pb-3 banners_list">
                        <?php $banner = $elements['banner'][0] ?>
                        <?php if($banner->file->hasImage()): ?>
                            <img src="<?=$banner->file->getUrl('original');?>" class="img-fluid" />
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            
                <h3 class="mt-5 mb-5">
                        Kolekcje upominkowe
                </h3>
        </div>

    <div class="container container-gift"<?php if(!isset($elements['product'])): ?> style="display:none;"<?php endif; ?>>
        <div class="gift" style=""></div>

        <div class="our-collections pb-0 mb-5">

    <div class="brand-products row">
        
        
        
        
    <?php if(isset($elements['product'])): ?>    
        <?php foreach($elements['product'] as $i=>$product): ?>
        
            <div data-target="<?=(empty($product->element_data))?'#':$product->element_data?>" class="col-md-4 col-sm-12 prod-el<?=($i%3==1)?' with-borders':((!isset($products[$i+1])&&$i%3==0)?' with-right-border':'')?>">                            
                <a href="<?=(empty($product->element_data))?'#':$product->element_data?>">
                <img src="<?=$product->file->getUrl('small'); ?>" />
                <p><?=$product->title?></p>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>   
    </div>

        </div>
    </div>

    
    <div class="row pt-4">
            <div class="col-md-7 col-12">
                    <p class="main-description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id nisl risus. Sed rhoncus auctor est vehicula rhoncus. 
                        Mauris a tempus lorem, eu efficitur neque. Vivamus ipsum ex, sollicitudin eu orci eu, cursus luctus mi.</p></p>
            </div>
            <div class="col-md-5 col-12">
                    <div class="light-box pl-4 pt-3 pb-3">
                            <p class="mt-4 mb-3">
                                    <span class="h4 font-weight-bold">Kontakt:</span><br />
                                    <span class="main-description"><?=$elements['contact'][0]['content']?></span><br /> <br/>
                            </p>
                    </div>
            </div>
    </div>
    
    <?php if(isset($elements['banner']) && count($elements['banner'])>1): ?>
        <div class="pb-3 banners_list">
            <?php $banner = $elements['banner'][1] ?>
            <?php if($banner->file->hasImage()): ?>
                <img src="<?=$banner->file->getUrl('original');?>" class="img-fluid" />
            <?php endif; ?>
        </div>
    <?php endif; ?>
    
    
    <h3 class="mt-5">
            <?=$elements['subcontent'][0]['title']?>
    </h3>
        
    <div class="row pt-4">
            
            <div class="col-md-7 col-12">
                    <p class="main-description"><?=$elements['subcontent'][0]['content']?></p>
                    
    <a href="<?=Yii::app()->controller->createUrl('site/offer')?>" class="btn btn-primary offer-btn">Poznaj pełną ofertę <i class="fas fa-arrow-right"></i> </a>
    
            </div>
            <div class="col-md-5 col-12">
                    <div class="light-box pl-4 pt-3 pb-3">
                            <p class="mt-4 mb-3">
                                    <span class="h4 font-weight-bold">Kontakt:</span><br />
                                    <span class="main-description"><?=$elements['contact'][0]['content']?></span><br /> <br/>
                            </p>
                    </div>
            </div>
    </div>
    
    <?php if(isset($elements['banner']) && count($elements['banner'])>2): ?>
        <div class="pb-3 banners_list">
            <?php $banner = $elements['banner'][2] ?>
            <?php if($banner->file->hasImage()): ?>
                <img src="<?=$banner->file->getUrl('original');?>" class="img-fluid" />
            <?php endif; ?>
        </div>
    <?php endif; ?>
    
        <div class="row" style="display:none;">
        <div class="col-md-7 col-12">
            <?=$elements['gifttext'][0]['content']?>
            <!--
                <h3 class="mt-4 mb-5">
                        Spersonalizowany upominek na życzenie
                </h3>
                <p class="main-description mr-4">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                <div class="d-flex flex-row align-items-center pb-3 pt-3">
            <i class="fas fa-wine-bottle" style="font-size: 32px;"></i>
            <span class="pl-4" style="font-size: 20px;">Pomysł na prezent na każdą okazję</span>
        </div>
<div class="d-flex flex-row align-items-center pb-3 pt-3">
            <i class="fas fa-wine-bottle" style="font-size: 32px;"></i>
            <span class="pl-4" style="font-size: 20px;">Gwarancja niepowtarzalnego prezentu</span>
        </div>
<div class="d-flex flex-row align-items-center pb-3 pt-3">
            <i class="fas fa-wine-bottle" style="font-size: 32px;"></i>
            <span class="pl-4" style="font-size: 20px;">Zawsze trafiony upominek</span>
</div>
                <p class="btn btn-link btn-linkbig pl-0 mt-4 mb-5">Odwiedź nasz E-sklep   <i class="fas fa-arrow-right"></i>
                </p>

              -->  

        </div>
            
            
        <div class="col-md-5 col-12 d-flex flex-column justify-content-center pl-5 mb-5">
            <h4 class="pt-5 pb-3 font-weight-bold">Formularz kontaktowy</h4>
            <form>
                <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Imię">
                </div>
                <div class="form-group">
                         <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="E-mail">
                </div>
                <div class="form-group">
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Wiadomość"></textarea>
                 </div>
                <button type="submit" class="btn btn-secondary btn-block btn-subm mb-4">Wyślij</button>
            </form>
        </div>
            
            
            
</div>

<script src="<?=Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


</div>
