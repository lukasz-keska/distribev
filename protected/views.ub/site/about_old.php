<?php 

$this->pageTitle = $model->title; 

?>

<style>
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
        position: absolute;
    top: 25%;
        left: 0;
        padding-left: 70px;
        color: #ffffff;
        font-size: 24px;
        font-weight: 600;
        z-index: 10;
    }
    
    .btn.btn-outline-light{
        cursor:pointer;
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
                            <?=CHtml::image($model->file->getUrl('original'),'',['class'=>'img-fluid about-us-image']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-blue mb-3">
            <div class="container about-us-blue-section">
                <h2 class="about-us-blue-section-title pt-5">Doświadczony<br />Zespół Sprzedaży</h2>

                <div class="row pt-5 pb-5">
                    <div class="col-sm-3 col-12 text-center">
                        <div class="d-flex flex-column">
                            <i class="fas fa-gem" style="font-size: 26px;"></i>
                            <p class="text-uppercase pt-3">12 oddziałów<br /> w Polsce</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12 text-center">
                        <div class="d-flex flex-column">
                            <i class="fas fa-gem" style="font-size: 26px;"></i>
                            <p class="text-uppercase pt-3">Ponad 100<br />Handlowców</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12 text-center">
                        <div class="d-flex flex-column">
                            <i class="fas fa-gem" style="font-size: 26px;"></i>
                            <p class="text-uppercase pt-3">Obsługa największych <br />sieci międzynarodowych</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-12 text-center">
                        <div class="d-flex flex-column">
                            <i class="fas fa-gem" style="font-size: 26px;"></i>
                            <p class="text-uppercase pt-3">Sprzedaż hurtowa<br />i dla gastronomii</p>
                        </div>
                    </div>
                </div>

                <p class="about-us-custom-description">Obsluga Klienta jest dla nas szczegolnie wazna. Nasza ambicja jest posiadanie wykwalifikowanych handlowcow, ktorzy dzieki
                swojej wiedzy i umiejetnosciom beda odpowiednimi partnerami dla naszych Odbiorcow. Nowoczesne urzadzenia mobilne, w
                ktore sa wyposazeni, pozwalaja na ciagly dostep do informacji o stanach magazynowych i aktualnych promocjach. Dzieki nim
                moga bezzwlocznie przesylac zamowienia do centrow logistycznych aby zminimalizowac czas oczekiwania i usprawnic proces
                dostawy naszych produktow.</p>
            </div>
        
</div>

<div class="content-light">
    <div class="container about-us-crew-section">
                <h2 class="about-us-crew-section-title">Zarząd firmy</h2>
                <p class="about-us-custom-description text-center"><?=$elements['zarzad-opis'][0]['content']?></p>

                <div class="row text-center pt-5 pb-5">

                    
                    <?php $col = ceil(12/count($elements['zarzad'])); ?>
                    
                    <?php foreach($elements['zarzad'] as $el): ?>
                        
                        <div class="col-sm-<?=$col?> col-12 text-center managment-el">
                            <p class="about-us-crew-section-image-title"><?=$el['title']?></p>
                            <p class="about-us-crew-section-image-description"><?=$el['content']?></p>
                        </div>
                    
                    <?php endforeach; ?>
                    <?php /*
                    <div class="col-sm-4 col-12 text-center">
                        <img src="https://picsum.photos/id/661/300/300" class="img-fluid about-us-crew-section-image" />
                        <p class="about-us-crew-section-image-title">Jan Kowalski</p>
                        <p class="about-us-crew-section-image-description">Prezes</p>
                    </div>
                    */ ?>
                </div>


    </div>
</div>
            <div class="about-us-bottom-section">
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <img src="<?=Yii::app()->request->baseUrl; ?>/gfx/about/big_map.png" class="img-fluid" style="margin-top: -240px;" />
                    </div>
                    <div class="col-sm-4 col-12 d-flex flex-column justify-content-center">
                        <div class="d-inline-flex">
                            <img src="<?=Yii::app()->request->baseUrl; ?>/gfx/about/navigation.png" class="img-fluid" style="width: 30px; height: 35px;"/>

                            <p class="pl-2">
                                <span class="text-uppercase font-weight-bold">Centrum operacyjne</span><br />
                                <span>United Beverages S.A.<br />
                                ul. Plaska 24-36<br />
                                87-100 Toruń</span><br />
                            </p>
                        </div>

                        <hr />

                        <div class="d-inline-flex">
                            <img src="<?=Yii::app()->request->baseUrl; ?>/gfx/about/navigation.png" class="img-fluid" style="width: 30px; height: 35px;"/>
                            <p class="pl-2">
                                <span class="text-uppercase font-weight-bold">Biuro zarządu</span><br />
                                <span>United Beverages S.A.<br />
                                                    ul. Plaska 24-36<br />
                                                    87-100 Torun</span>
                            </p>
                        </div>
                    </div>
                </div>
<div class="container">
                <div class="pt-5">

                    <div class="d-flex flex-md-row flex-column pb-5">
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column">
                                    <span>Lista Oddziałów</span><br />
                                    <div class="btn btn-outline-light" data-target="<?=Yii::app()->controller->createUrl('site/shops')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div>
                                </div>
                            </div>
                            <div class="options-area-bg-first"></div>
                        </div>
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column">
                                    <span>Sklepy Partnerskie</span><br />
                                    <div class="btn btn-outline-light" data-target="<?=Yii::app()->controller->createUrl('site/shopsdetal')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div>
                                </div>
                            </div>
                            <div class="options-area-bg-second"></div>
                        </div>
                        <div class="col-md-4 col-12 img-adjust">
                            <div class="options-area-description">
                                <div class="d-flex flex-column">
                                    <span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Kariera</span><br />
                                    <div class="btn btn-outline-light ml-5" data-target="<?=Yii::app()->controller->createUrl('site/career')?>">Sprawdź <i class="fas fa-arrow-right"></i> </div>
                                </div>
                            </div>

                            <div class="options-area-bg-third"></div>
                        </div>
                    </div>
                </div>

                <div class="about-us-bottom-section-company">
                    <div class="row">

                        <div class="col-sm-4 col-12">
                            <p class="text-uppercase font-weight-bold">Dane rejestrowe</p>
                            <p>Sad Rejonowy: Sad Rejonowy w Toruniu<br />
                            VII Wydzial Gospodarczy Krajowego Rejestru Sadowego<br />
                            KRS: 0000012645 NIP: 879-22-20-128<br />
                            Kapital zakladowy: 637 800 zl (wplacony w calosci)</p>
                        </div>

                        <div class="col-sm-4 col-12">
                            <p class="text-uppercase font-weight-bold">Konta bankowe</p>
                            <p>Bank Spoldzielczy torun<br />
                            XX XXXX XXXX XXXX XXXX XXXX XXXX<br /><br />

                            Bank Spoldzielczy torun<br />
                            XX XXXX XXXX XXXX XXXX XXXX XXXX<br /><br />

                            Bank Spoldzielczy torun<br />
                            XX XXXX XXXX XXXX XXXX XXXX XXXX
                            </p>
                        </div>

                        <div class="col-sm-4 col-12">
                            <p class="text-uppercase font-weight-bold">Koncesje</p>
                            <p>zezwolenie na obrot hurtowy w kraju napojami alkoholwymi do 4,5% zawartosci alkoholu oraz piwem - NT-V-G.8270.1.12.2018<br /><br />

                            zezwolenie na obrot hurtowy w kraju napojami alkoholwymi powyzej 4,5% do 18% zawartosci alkoholu, bez piwa - NT-V-G.8270.2.7.2018<br /><br />

                            zezwolenie na obrot hurtowy w kraju napojami alkoholwymi o zawartosci powyzej 18% alkoholu - zezw. NR 176/18
                            </p>
                        </div>

                    </div>

                </div>

                <hr>

                <div class="about-us-bottom-section-rodo">
                    <span>Administratorem Panstwa danych osobowych jest In eu leo sagittis, ultricies nisl ac, elementum leo. Etiam egestas dui diam, a lacinia sapien commodo non. Morbi non porta ligula. Donec dolor magna, iaculis vitae tincidunt a, tincidunt in leo. Aliquam a malesuada risus. Phasellus ac sollicitudin eros. Maecenas sit amet dictum felis, sit amet bibendum ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec rutrum diam risus, a placerat velit laoreet sit amet. Suspendisse potenti. Nam sodales maximus erat sed interdum. Fusce eu pretium odio. Donec quis dignissim metus. Proin non molestie justo.</span>
                </div>

            </div>
        </div>


<script>

$('.btn-outline-light[data-target]').on('click',function(){
    window.location.href=$(this).data('target');
})

</script>