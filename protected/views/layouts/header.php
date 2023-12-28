<?php
clearstatcache();
if (Yii::app()->controller->action->id == 'promotions' && !empty(Yii::app()->request->getParam('slug'))) {
    $headerLogoUrl = '/gfx/headers/header_' . Yii::app()->controller->id . '_' . Yii::app()->controller->action->id . '_' . Yii::app()->request->getParam('slug');
} else {
    $headerLogoUrl = '/gfx/headers/header_' . Yii::app()->controller->id . '_' . Yii::app()->controller->action->id;
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . $headerLogoUrl . '.png')) {
    $headerLogoUrl .= '.png';
} else if (file_exists($_SERVER['DOCUMENT_ROOT'] . $headerLogoUrl . '.jpg')) {
    $headerLogoUrl .= '.jpg';
} else {
    $headerLogoUrl = '';
}
?>

<style>
    .header-logo {
        background-image: url("<?= $headerLogoUrl; ?>");
        background-size: cover;
        height: 500px;
        position: relative;
    }

</style>

<header>
    <div id="header" class="header-logo">
        <div class="header-menu">
            <div class="container-full">
                <div class="container">
                    <div class="header-menu-content">               
                        <button id="navHamburger" class="btn btn-default navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCategories" aria-controls="navbarCategories" aria-expanded="true" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
                        <a href="<?= Yii::app()->controller->createUrl('site/main'); ?>"><img src="<?= Yii::app()->request->baseUrl; ?>/gfx/distribev.png" style="width: 200px; height: auto;" /></a>
                        <span><!-- it must be here for center element above --></span>
                    </div> 
                </div>
                <div class="header-menu-items collapse navbar-collapse" id="navbarCategories">
                    <div class="container">
                        <div class="row">

                            <ul id="menu-container">
                                <li class="menu-col">
                                    <ul class="double">
                                        <li><a href="<?= Yii::app()->controller->createUrl('site/about'); ?>" class="header-menu-single-item">O firmie</a></li>
                                        <li><a href="<?= Yii::app()->controller->createUrl('site/promotions'); ?>" class="header-menu-single-item">Promocje</a></li>
                                    </ul>
                                </li>

                                <li class="menu-col-center"><a href="<?= Yii::app()->controller->createUrl('site/brands'); ?>" class="header-menu-single-item">Nasze marki</a></li>
                                <li class="menu-col">
                                    <ul class="double">
                                        <li><a href="http://alkosfera.pl/" target="_blank" class="header-menu-single-item">E-sklep</a></li>
                                        <li><a href="<?= Yii::app()->controller->createUrl('site/offer'); ?>" class="header-menu-single-item">Oferta weselna</a></li>
                                    </ul>
                                </li>
                                <li class="single"><a href="<?= Yii::app()->controller->createUrl('site/contact'); ?>" class="header-menu-single-item">Kontakt</a></li>
                            </ul>

                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <script>

        var wheight = $(window).height();

        $('#navbarCategories').on('mouseleave', function () {
            $('#navHamburger').trigger('click');
        });


        $('#navHamburger').on('click', function () {
            $(".header-menu-items").css("height", wheight);
        })

        $(document).on("shown.bs.collapse", ".navbar-collapse", function () {
            $(".header-menu-items").css("height", wheight);
        });

        $(window).on('resize', function () {
            wheight = $(window).height();
            $('.header-menu-items.collapse.in').height(wheight + 'px');
        });


    </script>
</header>