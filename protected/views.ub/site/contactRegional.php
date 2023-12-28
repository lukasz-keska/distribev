<div class="page-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="menu-left">
                    <li><a href="<?php echo url('/site/contactRegional'); ?>" class="active">regionalne biura obsługi klienta</a></li>
                    <li>
                        <a href="<?php echo url('/site/contactProduction'); ?>">zakład produkcyjny w toruniu</a>
                        <ul>
                            <li><a href="#">Dział Handlowy</a></li>
                            <li><a href="#">Dział Finansów</a></li>
                            <li><a href="#">Dział Kadr</a></li>
                            <li><a href="#">Dział Marketingu</a></li>
                            <li><a href="#">Dział Zakupów i Logistyki</a></li>
                            <li><a href="#">Dział Finansowy</a></li>
                            <li><a href="#">Centrum logistyczne z magazynem głównym - Toruń</a></li>
                            <li><a href="#">Dział Księgowości</a></li>
                            <li><a href="#">Dział Technologi Informacyjnych</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('/site/contact'); ?>">biuro zarządu</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <h2>Regionalne Biura obsługi Klienta</h2>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="search-title">Wybierz województwo:</span>
                            </div>
                            <div class="col-sm-8">
                                <select name="number" id="number">
                                    <option>Wszystkie</option>
                                    <option>Mazowieckie</option>
                                    <option>Podlaskie</option>
                                </select>
                            </div>
                        </div>
                        <h5>Oddział Białgoraj</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="normal">ul. Generała Komorowskiego 25</span>
                                <span class="normal">Biłgoraj</span>
                                <span class="normal">23-400</span>  
                            </div>
                            <div class="col-sm-6">
                                <span class="normal">mail:<span class="gap"></span>bilgoraj@janussa.pl</span>
                                <span class="normal">tel.:<span class="gap"></span>84 627 97 37</span>
                                <span class="normal">fax:<span class="gap"></span>84 611 30 56</span>
                                <span class="normal">BOK:<span class="gap"></span>695 871 936</span>
                                <span class="normal">BOK:<span class="gap"></span>695 871 826</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/gfx/mapa-polski.png"  alt="mapa-polski">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#number")
                .selectmenu()
                .selectmenu("menuWidget")
                .addClass("overflow");
    });
</script>