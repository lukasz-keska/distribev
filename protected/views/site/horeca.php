<?php
$this->pageTitle = $model->title;
?>

<style type="text/css">

.content-bg {
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#dee0de+0,fffdfc+49,dee0de+100 */
    background: #dee0de; /* Old browsers */
    background: -moz-linear-gradient(left, #dee0de 0%, #fffdfc 49%, #dee0de 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #dee0de 0%,#fffdfc 49%,#dee0de 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #dee0de 0%,#fffdfc 49%,#dee0de 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dee0de', endColorstr='#dee0de',GradientType=1 ); /* IE6-9 */
}


.content-p {
    font-size: 20px;
    font-weight: 500;
}

.content-h2 {
    font-family: "Lato", sans-serif;
    font-size: 40px;
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

.img-adjust {
    padding: 1px;
   }

.options-area-bg-first {
    background-image: url("/gfx/shopsdetal/aktualny-katalog.png");
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
    background-image: url("/gfx/shopsdetal/lista-oddzialow.png");
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


#images{
    background-color:blue;
    display:none;
}
#images img{
    width:100px;
}

.ourAssets{
    text-align: center;
    margin-bottom: 30px;
}

.ourAssets>h2{
    margin-bottom: 30px;
}

.assetsList>div{
    
    align-items: center;
    justify-content: center;
}

.asset{
    background-color: #b00715;
    color: #FFF;
    border-radius: 65px;
    width: 100px;
    height: 100px;
}

.asset>img{
    padding-top: 25px;
    width: 45px;
}


.assetOpis{
    width: 180px;
    height: 100px;
    margin-top: 10px;
}

.contact-container{
    margin-top: 20px;
    margin-bottom: 20px;
    text-align:center;
}

.contact-container .pb-4{
    font-size: 20px;
}

.contactDesc ul{
    display: inline-block;
    margin-bottom: 0px;
}

.contactDesc ul li {
    list-style: none;
    float: left;
    margin-right:20px;
}
.contactDesc ul li:before {
    content: '\ffed';
    margin-right: 0.5em;
}

.contactCities{
    margin-bottom:15px;
}

.contactCities span{
    margin-right: 5px;
    background-color: #ccc;
    border-radius: 15px;
    padding: 2px 8px;
    font-size: 12px;
    color: #000;
}

.banners_list img{
    margin-bottom:5px;
}

</style>


    <div class="container">

        
        
    <div id="images">
    <img src="/gfx/promotions/icons/discount.svg"><br />
    <img src="/gfx/promotions/icons/hand-shake.svg"><br />
    <img src="/gfx/promotions/icons/poland.svg"><br />
    <img src="/gfx/promotions/icons/worldwide.svg"><br />
    </div>
    
    
        
        
            <ul class="d-flex breadcrumbs">
                <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                <li>></li>
                <li><a href="<?=Yii::app()->controller->createUrl('site/promotions')?>">Oferta</a></li>
                <li>></li>
                <li><?=$this->pageTitle?></li>
            </ul>

            <h2 class="content-h2 mt-2 mb-2">
                <strong><?=$model->title?></strong>
            </h2>
            <div class="content-p pt-3 pb-3"><?=$model->content?></div>
            
            <?php if(isset($elements['banner'])): ?>
                <div class="pb-3 banners_list">
                    <?php foreach($elements['banner'] as $banner): ?>
                        <?php if($banner->file->hasImage()): ?>
                            <img src="<?=$banner->file->getUrl('original');?>" class="img-fluid" />
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <div class="ourAssets container">                
                <?php if(isset($elements['asset'])): ?>                
                    <h2>Nasze największe atuty</h2>                
                    <div class="assetsList row">                        
                        <?php 
                            $colSplit = floor(12/count($elements['asset'])); 
                            foreach($elements['asset'] as $a):
                        ?>       
                            <div class="col-12 col-sm-<?=$colSplit?> center-block d-flex flex-column">
                                <?php if($a->fileupload->hasFile()):?>
                                    <div class="asset"><img src="<?=$a->fileupload->getFileUrl();?>"></div>
                                <?php endif; ?>   
                                <div class="assetOpis">
                                    <?=$a->content?>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                <?php endif; ?>                
            </div>
            <div class="contact-container container">                
                <?php if(isset($elements['contact'])): ?>
                    <h2>Kontakt do Regionalnych Kierowników Sprzedaży</h2>
                    <?php 
                        foreach($elements['contact'] as $c):
                    ?>
                        <div class="center-block d-flex flex-column">
                            
                            <?php
                            $data = [];
                            if(!empty($c->element_data)){
                                $expld = explode(",",$c->element_data);
                                foreach($expld as $ex){
                                    $data[] = trim($ex);
                                }
                            }
                            ?>
                            
                            
                            
                            <div class="contactTitle">
                                <?=$c->title?>
                            </div>
                            <div class="contactDesc">
                                <?=$c->content?>
                            </div>
                            
                            <div class="contactCities">
                                <?php foreach($data as $city): ?>
                                <span><?=mb_strtoupper($city, 'UTF-8');?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                        endforeach;
                    ?>
                <?php endif; ?>
            </div>
          

            <div>

                  <div class="d-flex flex-md-row flex-column pb-5">
                    <div class="col-md-6 col-12 img-adjust">
                        <div class="options-area-description">
                            <div class="d-flex flex-column">
                                <span>Aktualna Gazetka</span><br />
                                <a class="btn btn-outline-light" href="<?=Yii::app()->controller->createUrl('/site/catalog/slug/'.$model->slug)?>">Otwórz<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="options-area-bg-first"></div>
                    </div>
                    <div class="col-md-6 col-12 img-adjust">
                        <div class="options-area-description">
                            <div class="d-flex flex-column">
                                <span>Oddziały Alco-Trade</span><br />
                                <a  href="<?=Yii::app()->controller->createUrl('site/shops')?>" class="btn btn-outline-light">Sprawdź<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="options-area-bg-second"></div>
                    </div>
                </div>
            </div>
       
    </div>
