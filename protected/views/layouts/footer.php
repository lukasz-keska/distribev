<style>
    .footer-links>a{
        display:inline-block;
        margin-right:15px;
    }
</style>


<footer>
    <div id="bottom-area" class="footer-section">
        <div class="container">
            <div class="d-flex justify-content-center flex-md-row flex-column">
                <div class="col-md-4 col-12">
                        <span class="font-weight-bold bottom-area-company">Distribev sp. z o.o.</span>
                        <span class="d-flex mt-2">Kołaczkowo 9<br />
                                            62-230 Witkowo Wielkopolska</span>
                        <span class="d-flex">tel:&nbsp;61 47 78 212</span>
                        <span class="d-flex">email: <a href="mailto:distribev@distribev.pl" style="margin-left:5px;">distribev@distribev.pl</a><br /></span>
                        <span class="d-flex mb-4">NIP: 667 00 04 078</span>
                </div>
                
                <div class="col-md-8 col-12 mt-2">
                    <div class="footer-links text-center d-flex align-items-start mt-4 mb-4">
                        <a href="<?=Yii::app()->controller->createUrl('/site/about')?>" class="text-dark">O firmie</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/promotions/slug/shopsdetal')?>" class="text-dark">Oferta Detal</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/promotions/slug/horeca')?>" class="text-dark">Oferta HoReCa</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/shops')?>" class="text-dark">Oddziały DistribEv</a>
                        <a href="<?=Yii::app()->controller->createUrl('/site/contact')?>" class="text-dark">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-links" style="color: #ffffff">
        <div class="d-flex flex-row">
      
            <a href="/gfx/footer/polityka_prywatnosci.pdf" class="m-2">Polityka Prywatnosci</a>
			<a href="/strategia_podatkowa.pdf" class="m-2">Strategia Podatkowa</a>
			<a href="/strategia_podatkowa_2022.pdf" class="m-2">Strategia Podatkowa 2021-2022</a>
			<a href="/regulamin_obrotu_opak.pdf" class="m-2">Regulamin obrotu opakowaniami</a>
			<a href="/zmiana_kaucji_022023.pdf" class="m-2">Zmiana Kaucji 02.2023</a>
			
            <a href="#" class="m-2">Mapa Strony</a>
        </div>
    </div>
</footer>