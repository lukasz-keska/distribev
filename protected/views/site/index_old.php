<?php
/**
 * @var $promotions Promotion[]
 * @var $categories Category[]
 * @var $this Controller
 *
 */
$this->pageTitle = 'Strona główna';


?>



<div class="categoriesList" style="display:none;">
    <?php foreach ($categories as $i => $category): ?>
        <div class="col-sm-3 no-padding col-xs-6" data-id="<?= $i; ?>">
            <a href="<?php echo $category->getUrl(); ?>">
                <span><?php echo $category->title; ?></span>
                <div class="product-catogory-image">
                    <div class="middle-center">
                        <?php echo $category->fileimage->hasImage() ? CHtml::image($category->fileimage->getUrl('original')) : ''; ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<style>
    
.img-prom-shopsdetal {
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px;
    background-position: center;
}
.img-prom-shopsdetal:before {
    content: '';
    position: absolute;
    top: 1px;
    right: 1px;
    bottom: 1px;
    left: 1px;
    background-image: linear-gradient(to bottom right,#000,#000);
    opacity: .4;
}

.img-prom-horeca {
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px;
    background-position: center;
}
.img-prom-horeca:before {
    content: '';
    position: absolute;
    top: 1px;
    right: 1px;
    bottom: 1px;
    left: 1px;
    background-image: linear-gradient(to bottom right,#000,#000);
    opacity: .4;
}

.img-prom-b2b {
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px;
    background-position: center;
}
.img-prom-b2b:before {
    content: '';
    position: absolute;
    top: 1px;
    right: 1px;
    bottom: 1px;
    left: 1px;
    background-image: linear-gradient(to bottom right,#000,#000);
    opacity: .4;
}

#tiles-section .img-big.blue .tile-strip {
    background: none;
    font-weight: 650;
    font-size: 14px;
    margin-bottom: 10px;
    top: 10px;
    position: relative;
    padding: 5px;
}

.img-big>.tile-desc{
    display:none;
}

.img-big.blue>.tile-desc{
    position:relative;
    z-index:11;
    width: 100%;
    text-align: center;
    list-style: none;
    display:block;
}

.img-big.blue>.tile-desc>.tile-inner-desc{
    display:inline-block;  
    padding: 0 45px 3px 0;
    color:#FFF;
    text-align: left;
}

.img-big.blue>.tile-desc>.tile-inner-desc *{
    background-color:transparent !important;
}

</style>


<div class="std-content">
    <div class="std-title">
        <h2 class="link"><a href="<?=Yii::app()->controller->createUrl('site/brands'); ?>">Nasze marki</a></h2>
        
    </div>
</div>

<div class="container" id="tiles-section">
    <div class="row">
      <div class="col-12 nopadding">
        <div class="row all">

          <div class="col-md-8 col-sm-12 nopadding">
          <div class="row half nomargin" >
              <div class="col-12 paddingl" >
        
                <div data-url="<?=(!empty($categories[3]->url))?$categories[3]->url:$categories[3]->getUrl();?>" class= "img-big"<?=$categories[3]->fileimage->hasImage() ? ' style="background: url('.$categories[3]->fileimage->getUrl('original').')"': ''; ?>>
                    <p class="tile-strip"><?=$categories[3]->title;?> </p>
                    <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[3]->tile_desc;?></div></div>
               </div>
             </div>
           </div>
           <div class="row half nomargin">
            <div class="col-md-6 col-sm-12 paddingl" >
              <div data-url="<?=(!empty($categories[51]->url))?$categories[51]->url:$categories[51]->getUrl();?>"  class= "img-big"<?=$categories[51]->fileimage->hasImage() ? ' style="background: url('.$categories[51]->fileimage->getUrl('original').')"': ''; ?>>
                    <p class="tile-strip"><?=$categories[51]->title;?> </p>
                    <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[51]->tile_desc;?></div></div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 paddingl full" >
             <div data-url="<?=(!empty($categories[2]->url))?$categories[2]->url:$categories[2]->getUrl();?>"  class= "img-big"<?=$categories[2]->fileimage->hasImage() ? ' style="background: url('.$categories[2]->fileimage->getUrl('original').')"': ''; ?>>
                    <p class="tile-strip"><?=$categories[2]->title;?> </p>
                    <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[2]->tile_desc;?></div></div>
             </div>
           </div>
         </div>

       </div>
            
       <div class="col-md-4 col-sm-12 nopadding" >
        <div class="col-12 paddingr full" >
          <div data-url="<?=(!empty($categories[1]->url))?$categories[1]->url:$categories[1]->getUrl();?>"  class="img-big"<?=$categories[1]->fileimage->hasImage() ? ' style="background: url('.$categories[1]->fileimage->getUrl('original').')"': ''; ?>>
           <p class="tile-strip"><?=$categories[1]->title;?> </p>
           <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[1]->tile_desc;?></div></div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

    <div class="row">
      <div class="col-12 nopadding">
        <div class="row all">
           <div class="col-md-4 nopadding" >
        <div class="col-12 paddingl full" >
          <div data-url="<?=(!empty($categories[7]->url))?$categories[7]->url:$categories[7]->getUrl();?>"  class= "img-big"<?=$categories[7]->fileimage->hasImage() ? ' style="background: url('.$categories[7]->fileimage->getUrl('original').')"': ''; ?>>
           <p class="tile-strip"><?=$categories[7]->title;?> </p>
           <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[7]->tile_desc;?></div></div>
         </div>
       </div>
     </div>
          <div class="col-md-8 nopadding">
            <div class="row half nomargin" >
                
              <div class="col-md-6 paddingl" >
                <div data-url="<?=(!empty($categories[61]->url))?$categories[61]->url:$categories[61]->getUrl();?>"  class= "img-big"<?=$categories[61]->fileimage->hasImage() ? ' style="background: url('.$categories[61]->fileimage->getUrl('original').')"': ''; ?>>
                <p class="tile-strip"><?=$categories[61]->title;?> </p>
                <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[61]->tile_desc;?></div></div>
               </div>
             </div>
           
            <div class="col-md-6 paddingr" >
              <div data-url="<?=(!empty($categories[4]->url))?$categories[4]->url:$categories[4]->getUrl();?>"  class= "img-big"<?=$categories[4]->fileimage->hasImage() ? ' style="background: url('.$categories[4]->fileimage->getUrl('original').')"': ''; ?>>
                <p class="tile-strip"><?=$categories[4]->title;?> </p>
                <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[4]->tile_desc;?></div></div>
              </div>
            </div>
            </div>
           <div class="row half nomargin">
            <div class="col-12 paddingr" >
             <div data-url="<?=(!empty($categories[8]->url))?$categories[8]->url:$categories[8]->getUrl();?>"  class= "img-big"<?=$categories[8]->fileimage->hasImage() ? ' style="background: url('.$categories[8]->fileimage->getUrl('original').')"': ''; ?>>
                <p class="tile-strip"><?=$categories[8]->title;?> </p>
                <div class="tile-desc"><div class="tile-inner-desc"><?=$categories[8]->tile_desc;?></div></div>
             </div>
           </div>
         </div>

       </div>

      
   </div>
 </div>
</div>
      
</div>

<!--bannery ze strony oferta
<div class="std-content">
    <div class="std-title">
        <h2 class="link"><a href="<?=Yii::app()->controller->createUrl('/site/promotions'); ?>">Oferta</a></h2>
        
    </div>
</div>
<div class="d-flex flex-md-row flex-column pb-5">
    <?php foreach($promotions as $slug => $promo): ?>
        <div class="col-md-6 col-12 img-adjust">
        <a href="<?=Yii::app()->controller->createUrl('site/promotions/slug/'.$slug)?>">
            <div class="img-text banner-title banner-title-<?=$slug?>">
                <span><hr/></span><span><?=$promo->title?></span><span><hr/></span>
            </div>
            <div class="img-prom-<?=$slug?>" style="<?=(($promo->file->hasImage())?'background-image: url('.$promo->file->getUrl('original').')':'')?>"></div>
        </a>
        </div>
    <?php endforeach; ?>
</div>
<div style="display:none" id="bannertext-content"><?php if(!empty($bannertext)):?><?=$bannertext->data;?><?php endif;?></div>
-->

<style>
    
    .news-control{
        height:70px;
    }
    
    .news-control h2.link{
        top: 36px;
        position: relative;

    }
    
    .slick-slider-navigation-arrows{
        display: inline-block;
        width: 80px;
    }
    
    .slick-slider-navigation-arrows img{
        height:16px;
    }
</style>


<div id="modal_adv" style="display:none;">
    <?php if(file_exists(__DIR__.'/../../../images/popup/popup_UB.png')): ?>
        <p><img src="/images/popup/popup_UB.png" /></p>
    <?php endif; ?>
</div>

<?php
cs()->registerCssFile('//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css');
cs()->registerScriptFile('//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js');
cs()->registerCssFile('/js/jquery-modal-master/jquery.modal.min.css');
cs()->registerScriptFile('/js/jquery-modal-master/jquery.modal.min.js');
cs()->registerCssFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/ui-lightness/jquery-ui.css');
cs()->registerScriptFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js');
?>

<script type="text/javascript">
  // debounce utility from underscorejs.org
  var debounce = function(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      if (immediate && !timeout) func.apply(context, args);
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  };
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

<script type="text/javascript">
    // fallback to version hosted on thinkpixellab.com if local version doesn't exist
    if (typeof Tiles == 'undefined') {
        var url = 'http://thinkpixellab.com/tilesjs/tiles.js';
        document.write('<' + 'script src="' + url + '"></' + 'script' + '>');
    }
</script>



    


<style>
   
    
    #modal_adv{
        padding: 0px;
        max-height: 485px;        
    }
    
    @media only screen and (max-device-width: 480px) {
        #modal_adv{         
            max-height: 281px;        
        }
    }
    
    #modal_adv img{
        width: 100%;
    }
    
    .modal a.close-modal{
            top: -1.5px;
            right: -2.5px;
    }
    
    .arrow-left {
        display: inline-block;
        background-color: #003b7e;
        width: 50%;
        display: table-cell;
        padding: 15px;
    }
    .arrow-right {
        display: inline-block;
        background-color: #000;
        width: 50%;
        display: table-cell;
        padding: 5px;
    }
    .std-content{
        margin-bottom:10px;
    }
    .std-content h2 {
        color: #000;
        display: inline-block;
        font-size: 20px;
        padding-bottom: 15px;
        text-transform: uppercase;
        font-weight: bold;
        
        width: 200px;
        height: 30px;
        
    }
    
    .std-content h2.link a{
        color: #000 !important;
        border-bottom:1px solid #003b7e;
    }
    
    .std-content h2.link a:hover{
        text-decoration: none;
    }
    
    .std-title {
        position: relative;
        margin-top: 40px;
    }
    
    .navigation-arrows a {
        display: block;
        width: 100%;
        height: 100%;
        content: "";
    }
    
    
    #header .header-text{
        color: #FFF;
        font-size: 80px;
        padding-top: 190px;
    }
    
    
    
</style>

<script type="text/javascript">
    
    $(document).ready(function(){
        
        var bannertext = $('#bannertext-content').html();
        $('#header').prepend('<div class="header-text d-flex justify-content-center"></div>');
        $('#header').find('.header-text').html(bannertext);
        
    });
    
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 600,
        cssEase: 'linear',
        arrows: false,
        autoplay: true,
        draggable: true,
        pauseOnHover: false
    });
    
   
    $('.aktualnosci').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 3,
        cssEase: 'linear',
        arrows: true,
        prevArrow: $('.slick-slider-left'),
        nextArrow: $('.slick-slider-right'),
        autoplay: false,
        draggable: true,
        pauseOnHover: true
    });
   
    <?php if(file_exists(__DIR__.'/../../../images/popup/popup_UB.png')): ?>
        
        
   $("#modal_adv").modal({
        escapeClose: true,
        clickClose: true,
        showClose: true
      });
    <?php endif; ?>
    
    $(document).ready(function(){
       
       $('#tiles-section .img-big').on('mouseover', function(){
           $(this).addClass('blue');
       })
       
       $('#tiles-section .img-big').on('mouseout', function(){
           $(this).removeClass('blue');
       })
       
       $('#tiles-section .img-big').on('click', function(){
           window.location.href=$(this).data('url');
       });
    });
    
    //jQuery(window).load(function () {
        
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                 $('nav.top-navigation').addClass('fix');
            } else {
                 $('nav.top-navigation').removeClass('fix');
            }
        });
        
    //});
    
</script>