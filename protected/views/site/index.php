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


    /* the slides */
    .slick-slide {
        margin: 0 10px;
    }
    /* the parent */
    .slick-list {
        margin: 0 -10px;
    }
</style>

<div class="std-content">
    <div class="std-title">
        <h2 class="link"><a href="<?= Yii::app()->controller->createUrl('site/brands'); ?>">Nasze marki</a></h2>

    </div>
</div>

<div class="container" id="tiles-section">
    <div class="row">
        <div class="col-12 nopadding">
            <div class="row all">
                <div class="col-md-8 col-sm-12 nopadding">
                    <div class="row half nomargin" >
                        <div class="col-12 paddingl" >

                            <div data-url="<?= (!empty($categories[0]->url)) ? $categories[0]->url : $categories[0]->getUrl(); ?>" class= "img-big"<?= $categories[0]->fileimage->hasImage() ? ' style="background: url(' . $categories[0]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[0]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[0]->tile_desc; ?></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="row half nomargin">
                        <div class="col-md-6 col-sm-12 paddingl" >
                            <div data-url="<?= (!empty($categories[11]->url)) ? $categories[11]->url : $categories[11]->getUrl(); ?>"  class= "img-big"<?= $categories[11]->fileimage->hasImage() ? ' style="background: url(' . $categories[11]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[11]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[11]->tile_desc; ?></div></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 paddingl full" >
                            <div data-url="<?= (!empty($categories[12]->url)) ? $categories[12]->url : $categories[12]->getUrl(); ?>"  class= "img-big"<?= $categories[12]->fileimage->hasImage() ? ' style="background: url(' . $categories[12]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[12]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[12]->tile_desc; ?></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 nopadding" >
                    <div class="col-12 paddingr full" >
                        <div data-url="<?= (!empty($categories[1]->url)) ? $categories[1]->url : $categories[1]->getUrl(); ?>"  class="img-big"<?= $categories[1]->fileimage->hasImage() ? ' style="background: url(' . $categories[1]->fileimage->getUrl('original') . ')"' : ''; ?>>
                            <p class="tile-strip"><?= $categories[1]->title; ?> </p>
                            <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[1]->tile_desc; ?></div></div>
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
                        <div data-url="<?= (!empty($categories[2]->url)) ? $categories[2]->url : $categories[2]->getUrl(); ?>"  class= "img-big"<?= $categories[2]->fileimage->hasImage() ? ' style="background: url(' . $categories[2]->fileimage->getUrl('original') . ')"' : ''; ?>>
                            <p class="tile-strip"><?= $categories[2]->title; ?> </p>
                            <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[2]->tile_desc; ?></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 nopadding">
                    <div class="row half nomargin" >
                        <div class="col-md-6 paddingl" >
                            <div data-url="<?= (!empty($categories[7]->url)) ? $categories[7]->url : $categories[7]->getUrl(); ?>"  class= "img-big"<?= $categories[7]->fileimage->hasImage() ? ' style="background: url(' . $categories[7]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[7]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[7]->tile_desc; ?></div></div>
                            </div>
                        </div>
                        <div class="col-md-6 paddingr" >
                            <div data-url="<?= (!empty($categories[3]->url)) ? $categories[3]->url : $categories[3]->getUrl(); ?>"  class= "img-big"<?= $categories[3]->fileimage->hasImage() ? ' style="background: url(' . $categories[3]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[3]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[3]->tile_desc; ?></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="row half nomargin">
                        <div class="col-12 paddingr" >
                            <div data-url="<?= (!empty($categories[15]->url)) ? $categories[15]->url : $categories[15]->getUrl(); ?>"  class= "img-big"<?= $categories[15]->fileimage->hasImage() ? ' style="background: url(' . $categories[15]->fileimage->getUrl('original') . ')"' : ''; ?>>
                                <p class="tile-strip"><?= $categories[15]->title; ?> </p>
                                <div class="tile-desc"><div class="tile-inner-desc"><?= $categories[15]->tile_desc; ?></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    .safari-position{
        margin-top:-35px;
    }
</style>

<?php if(count($news)): ?>

<div class="std-content">
    <div class="std-title news-control">
        <h2 class="link"><a href="<?=Yii::app()->controller->createUrl('site/news'); ?>">Aktualności</a></h2>
        <div class="slick-slider-navigation-arrows">
            <div class="arrow-left dtc text-center news-prev-btn">
                <p class="slick-slider-left">
                    <img src="<?=bu('gfx/arrow-left.png')?>" alt="w lewo">
                </p>
            </div>
            <div class="arrow-right dtc text-center news-next-btn">
                <p class="slick-slider-right">
                    <img src="<?=bu('gfx/arrow-right.png')?>" alt="w prawo">
                </p>
            </div>
        </div>        
    </div>
</div>
 
<style>
    <?php foreach ($news as $k => $n): ?>
        <?php if($n->file->hasImage()): ?>
            .aktualnosci .el.el<?=$n->news_id?>{
                background-image:url(<?=$n->file->getUrl('small')?>);
            }
        <?php endif; ?>
    <?php endforeach; ?>    
</style>


<!-- POCZĄTEK BLOKU - potrzebne razem z zamknieciem i otwarciem kontenera zeby zlikwidowac padding na sliderze -->
</div>
<div class="aktualnosci container" style="padding:0px;">
    <?php foreach ($news as $k => $n): ?>
        <?php if($n->file->hasImage()): ?>
    <a href="<?=Yii::app()->controller->createUrl('site/news',['id'=>$n->news_id])?>" class="el el<?=$n->news_id?>">
            <div class="news-title-apply">
                <p><?=$n->title?></p>
            </div>   
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div class="container">
<!-- KONIEC BLOKU -->
    


<?php endif; ?>

<div id="modal_adv" style="display:none;">
    <?php if (file_exists(__DIR__ . '/../../../images/popup/popup_UB.png')): ?>
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
    var debounce = function (func, wait, immediate) {
        var timeout;
        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate)
                    func.apply(context, args);
            };
            if (immediate && !timeout)
                func.apply(context, args);
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

    $(document).ready(function () {

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

<?php if (file_exists(__DIR__ . '/../../../images/popup/popup_UB.png')): ?>


        $("#modal_adv").modal({
            escapeClose: true,
            clickClose: true,
            showClose: true
        });
<?php endif; ?>

    $(document).ready(function () {

        $('#tiles-section .img-big').on('mouseover', function () {
            $(this).addClass('blue');
        })

        $('#tiles-section .img-big').on('mouseout', function () {
            $(this).removeClass('blue');
        })

        $('#tiles-section .img-big').on('click', function () {
            window.location.href = $(this).data('url');
        });

        $('.our-brands .our-brands-img-container').on('mouseover', function () {
            $(this).addClass('blue');
        })

        $('.our-brands .our-brands-img-container').on('mouseout', function () {
            $(this).removeClass('blue');
        })

        $('.our-brands .our-brands-img-container').on('click', function () {
            window.location.href = $(this).data('url');
        });

    });

    //jQuery(window).load(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('nav.top-navigation').addClass('fix');
        } else {
            $('nav.top-navigation').removeClass('fix');
        }
    });

    //});

</script>