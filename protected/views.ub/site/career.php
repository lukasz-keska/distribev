<?php


$this->pageTitle = 'Karier';


?>

﻿        
<style>
    
    .career-list{
        padding: 0px;
        padding-bottom:20px;
        padding-top:20px;
    }
    
    .career-list>.container{
        border: 1px solid #333;
        margin-bottom:1px;
        background-color: #FFF;
    }
     
    
    .job-el{
        width:100%;
        text-align: center;
        border-bottom: 1px solid #ccc;
        padding: 10px;
        cursor:pointer;
    }
    
    .job-el a, .job-el a:hover, .job-el:visited{
        text-decoration: none;
        color:#000;
        font-weight:bold;
    }
    
    .job-el.with-borders{
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
    }
        
    #modal-error{
        height: 58px;
        font-weight: bold;
        color: #d10000;
    }
    
    #modal-error a.close-modal{
        right: 0px;
        top: 0px; 
    }
    
    
    
    
.breadcrumbss {
    padding: 0;
}

.breadcrumbss li {
    list-style: none;
    font-size: 14px;
    margin: 20px 10px 20px 0;
}

.breadcrumbss li a {
    color: #000;
}

.contents-gray {
    background: #c8c8c8; /* Old browsers */
    background: -moz-linear-gradient(left, #c8c8c8 0%, #f9fdff 33%, #f9fdff 67%, #c8c8c8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #c8c8c8 0%,#f9fdff 33%,#f9fdff 67%,#c8c8c8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c8c8c8', endColorstr='#c8c8c8',GradientType=1 ); /* IE6-9 */
}

.contents-h2 {
    font-size: 40px;
}

.career-main-description {
  text-align: center;
}

.career-main-description-h6 {
  text-align: center;
  font-weight: 600;
}

.contents-blue {
    background: #00355d; /* Old browsers */
    background: -moz-linear-gradient(left, #00355d 0%, #0064a0 49%, #0064a0 51%, #00355d 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #00355d 0%,#0064a0 49%,#0064a0 51%,#00355d 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #00355d 0%,#0064a0 49%,#0064a0 51%,#00355d 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00355d', endColorstr='#00355d',GradientType=1 ); /* IE6-9 */
}

.blue-sections {
    color: #fff;
}

.blue-sections-title {
    color: #fff;
    font-weight: 600;
    font-size: 40px;
    text-align: center;
}

.gray-sections-title {
    font-weight: 600;
    font-size: 40px;
    text-align: center;
}
.icon-background {
  color: #fff;
}

.icon-background-blue {
  color: #00588f;
}

.fa-stacks {

    display: inline-block;
    height: 2em;
    line-height: 2em;
    vertical-align: middle;
    width: 2.5em;

}

.cols-width {
  width: 100px;
}


.num-circle {
  width:100px;
  height:100px;
  border-radius: 50%;
  background-color: #00588f;
}

.num-inner {
  padding-top:10%;

}

.small-num-circle {
  width:44px;
  height:44px;
  border-radius: 50%;
  background-color: #00588f;
}

.small-num-inner {
  padding-top:3px;

}


@media (max-width: 480px) {
.pad-textmobile {
text-align: center;
}
}

@media (min-width: 801px) {
.pad-textmobile {
    padding-left: 15%;
}
}

@media (min-width: 801px) {
  .pad-smobile {
  padding-left: 15%;
}
}


@media (min-width: 801px) {
.pad-textmobile-ul {
    padding-left: 15%;
}
}


@media (max-width: 480px) {
.pad-smobile {
 padding-left: 40%;
 padding-right: none;
}
}

@media (min-width: 801px) {
  .num-div-right {
  padding-left: 76%;
    padding-right: 20%;
}
}


.award-icon-pos {
    position: absolute;
    top: -3.9em;
    z-index: 1000;
}

.award-icon-pos img{
    width: 15%;
}

@media (min-width:481px) and (max-width: 800px) {
    .num-div-right {
      padding-left: 70%;
      padding-right: 15%;
    }
    .award-icon-pos{
        top: -1.9em;
        width: 65%
    }
    .award-icon-pos i{
        font-size:90px;
    }
}

@media (max-width: 480px) {
.num-div-right {
 padding-left: 40%;
}
}

.text-div-right {
  text-align: right;
  padding-right: 15%;
}


@media (max-width: 480px) {
    .text-div-right {
        text-align: center;
        padding-right: 0%;
    }
    .award-icon-pos{
        top: 24%;
    }
    .award-icon-pos i{
        font-size:50px;
    }
}

.padleft {
padding-left: 30%;
}



.btn-appl {
  background-color: #00588f;
text-transform: uppercase;
width: 350px;
font-size: 20px;
}

.guarantee-el{
    background-color: #FFF;
    margin: 0 auto;
    border-radius: 70px;
    width: 100px;
    height: 100px;
}

</style>



<div>
    <div class="container">
      <div>

        <ul class="d-flex breadcrumbs">
                    <li><a href="<?=Yii::app()->controller->createUrl('site/index')?>">Strona główna</a></li>
                    <li>></li>
                    <li><?=$model->title?></li>
                </ul>

        <h2 class="content-h2 mt-2 mb-2">
                    <strong><?=$model->title?></strong>
                </h2>

         <div class="pb-5 pt-3 career-main-description">
              <?=$model->content?>
        </div>
      </div>
    </div>
</div>

<div class="contents-blue">
            <div class="container blue-sections pt-5 pb-3">
                <h2 class="blue-sections-title pt-4">Naszym pracownikom zapewniamy:</h2>

                <div class="row pt-5 pb-5">
                    <div class="col-md-4 col-12 text-center">
                        <div class="d-flex flex-column">
                            <div class="fa-stacks fa-3x guarantee-el">
                                <img src="/gfx/career/contract.svg" />
                            </div>
                            <p class="pt-3">Stabilność zatrudnienia<br /><strong>(umowa o pracę)</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center">
                        <div class="d-flex flex-column">
                            <div class="fa-stacks fa-3x guarantee-el">
                                <img src="/gfx/career/team.svg" />
                            </div>
                            <p class="pt-3"><strong>Dobre zarobki</strong><br />za efektywną pracę</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center">
                        <div class="d-flex flex-column">
                            <div class="fa-stacks fa-3x guarantee-el">
                                <img src="/gfx/career/career.svg" />
                            </div>
                            <p class="pt-3"><strong>Możliwość rozwoju</strong><br />zawodowego</p>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-md-6 col-12 text-center cols-width">
                     <div class="d-flex flex-column">
                          <div class="fa-stacks fa-3x guarantee-el">
                                <img src="/gfx/career/health.svg" />
                            </div>
                            <p class="pt-3"><strong>Ubezpieczenie na życie</br>na preferencyjnych warunkach</strong></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-center cols-width">
                     <div class="d-flex flex-column">
                          <div class="fa-stacks fa-3x guarantee-el">
                                <img src="/gfx/career/cash.svg" />
                            </div>
                       <p class="pt-3"><strong>Dofinansowanie</strong><br />z ZFŚS</p>
                      </div>
                    </div>
                </div>
            </div>
</div>

<style>
    .recrutation-container{
        position:relative;
        width:100%;
        height:860px;
    }
    .recrutation-content{
        position:absolute;
        width:100%;
        height:100%;
        z-index:10;
    }
    
    .recrutation-content .border-one{
        margin-bottom: 44px;
    }
    
    .recrutation-content .border-two{
        margin-bottom: 47px;
    }
    
    .recrutation-background{
        position:absolute;
        z-index:1;
        width:100%;
        height:100%;
        top: 45px;
        left: 38px;
        background:url(/gfx/career/sciezka.svg) no-repeat;
    }
    
    @media(max-width:1200px){
        .recrutation-content .border-one {
            margin-bottom: 23px;
        }
        
        .recrutation-content .border-two{
            margin-bottom: 25px;
        }
    }
    
    @media(max-width:1000px){
        .recrutation-content .border-one {
            margin-bottom: 0px;
        }
        
        .recrutation-content .border-two{
            margin-bottom: 0px;
        }
        
    }
    
    @media(max-width:800px){
        .recrutation-background{
            background:none;
        }
    }
    
</style>

<div class="container pt-5 pb-3">
                <h2 class="gray-sections-title pt-4">ETAPY PROCESU REKRUTACJI</h2>
                
                
                <div class="recrutation-container">
                    <div class="recrutation-content">
                        <div class="col-md-12 border-one">  
                            <div class="d-flex flex-column pad-smobile">
                              <div class="num-circle text-center">
                                <div class="num-inner">
                                  <span style="font-size: 50px; color: #fff;">1</span>
                                </div>
                              </div>
                            </div>
                          <div class="pt-2 pb-3 pad-textmobile">
                             Udostępnienie ogłoszenia rekrutacyjnego w wystandaryzowanej formie na stronie internetowej unitedbeverages.pl (przejdź do oferty) oraz w ogólnodostępnych portalach rekrutacyjnych. Ogłoszenie zawiera informację o podstawowych wymaganiach kwalifikacyjnych na dane stanowisko,  o terminie nadsyłania aplikacji, a także o oferowanych warunkach zatrudnienia.
                          </div>
                        </div>
                        <div class="col-sm-12 col-12 border-two">  
                            <div class="num-div-right">
                              <div class="num-circle text-center">
                                  <div class="num-inner">
                                    <span style="font-size: 50px; color: #fff;">2</span>
                                 </div>
                              </div>
                            </div>
                            <div class="pt-2 pb-3 text-div-right">
                                  Selekcja aplikacji pod kątem spełnienia przez kandydatów wymagań kwalifikacyjnych. Aplikujący kandydaci zobowiązani są do dostarczenia CV, mogą być także o dostarczenie innych dokumentów takich jak list motywacyjny, CV w języku obcym, referencje z poprzednich miejsc pracy czy potwierdzenia posiadanych uprawnień i kwalifikacji.
                            </div>
                        </div>
                        <div class="col-md-12 border-three">
                            <div class="d-flex flex-column pad-smobile">  
                              <div class="num-circle text-center">
                                  <div class="num-inner">
                                    <span style="font-size: 50px; color: #fff;">3</span>
                                 </div>
                              </div>
                            </div>
                            <div class="pt-2 pb-3 pad-textmobile">
                                <p>Postępowanie kwalifikacyjne z wybranymi kandydatami, które stanowi kombinację elementów wybranych spośród następujących opcji:</p>
                                <ul>
                                    <li>Wywiad telefoniczny przeprowadzany w celu ewentualnego uzupełnienia informacji o kandydatach pozyskanych na etapie analizy formularzy aplikacyjnego i CV</li>
                                    <li>Sprawdzanie referencji – za zgodą kandydata</li>
                                    <li>Rozmowa kwalifikacyjna prowadzona przez pracowników HR oraz pracowników jednostki, do której prowadzony jest nabór, która ma na celu zapoznanie się z sytuacją zawodową kandydatów, ich dotychczasowym doświadczeniem oraz motywacją do podjęcia pracy.</li>
                                </ul>
                            </div>                                
                        </div>
                    </div>
                    <div class="recrutation-background">
                        
                    </div>
                </div>
                
                
                
                
                <div class="row pt-5 pb-5" style="display:none;">
                    
                    <!--style="background:url(/gfx/career/sciezka.svg) no-repeat;"-->
                    
                    
                    
                    <?php
                        $i = 1;
                        foreach($elements['phases'] as $phase):
                    ?>
                    
                        <?php switch($i){
                           
                            case 1:
                            ?>
                            <div class="col-md-12 border-one">  
                                <div class="d-flex flex-column pad-smobile">
                                  <div class="num-circle text-center">
                                    <div class="num-inner">
                                      <span style="font-size: 50px; color: #fff;">1</span>
                                    </div>
                                  </div>
                                </div>
                              <div class="pt-2 pb-3 pad-textmobile">
                                 <?=$phase['content']?>
                              </div>
                            </div>
                            <?php
                            break;
                            case 2:
                            ?>
                            <div class="col-sm-12 col-12 border-two">  
                                <div class="num-div-right">
                                  <div class="num-circle text-center">
                                      <div class="num-inner">
                                        <span style="font-size: 50px; color: #fff;">2</span>
                                     </div>
                                  </div>
                                </div>
                                  <div class="pt-2 pb-3 text-div-right">
                                      <?=$phase['content']?>
                                  </div>
                              </div>
                            <?php
                            break;
                            case 3:
                            ?>
                            <div class="col-md-12 border-three">
                                <div class="d-flex flex-column pad-smobile">  
                                  <div class="num-circle text-center">
                                      <div class="num-inner">
                                        <span style="font-size: 50px; color: #fff;">3</span>
                                     </div>
                                  </div>
                                </div>
                                <div class="pt-2 pb-3 pad-textmobile">
                                   <?=$phase['content']?>
                                </div>
                                <!--
                                  
                                  <div class="pad-textmobile-ul">
                                    <ul>
                                    <li>Eeros bibendum sed. Aenean at felis sollicitudin, dignissim ex eget, egestas tellus. Maecenas quam mi</li>
                                    <li>Egestas tellus. Maecenas quam mi</li>
                                    <li>Bibendum sed. Aenean at felis sollicitudin, dignissim ex eget, egestas tellus. Maecenas quam mi, fermentum condimentum fermentum nec, lacinia pharetra lectus. Nullam maximus dolor ut odio imperdiet, et pretium lorem imperdiet. Cras at hendrerit arcu. Donec id mauris vel risus laoreet dapibus. </li>
                                    </ul>
                                  </div>
                                -->
                             </div>
                            <?php
                            break;
                        } 
                        $i++;
                        ?>
                       
                    
                    
                    <?php endforeach; ?>
                  
                  </div>
</div>



<style>

@media (min-width: 801px) {
   .rstandards-container{
        position:relative;
        padding-top: 50px;
    }
}

@media (min-width:481px) and (max-width: 800px)
{
    .rstandards-container{
        position:relative;
        padding-top: 50px;
    }
}
@media (max-width: 480px)
{
    .rstandards-container{
        position:relative;
        padding-top: 135%;
    }
}

ol {
   list-style: none;
   counter-reset: item;
   margin-top:40px;
   
 }
ol li {
   counter-increment: item;
       margin-bottom: 30px;
   clear:both;
 }
ol li:before {
   margin-right: 10px;
   content: counter(item);
   background: #00588f;
   border-radius: 100%;
   color: white;
   width: 1.5em;
   height: 1.2em;
   padding-bottom: 1.5em;
   text-align: center;
   display: inline-block;
    margin-bottom: 1px;
    float: left;
 }
</style>         
        

<div class="bg-white rstandards-container">
    <div class="container">
        <div class="container award-icon-pos">
            <img src="/gfx/career/award.svg" />
        </div>

    
                <h2 class="gray-sections-title">NAJWAŻNIEJSZE STANDARDY </br>PROCESU REKRUTACYJNEGO</h2>
                <div class="row rstandards">
                    
                    
                    <?=current($elements['standards'])['content'];?>
                        
                    
                    
                    
                    <!--
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">1</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>
                <div class="row pt-4">
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">2</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>

              <div class="row pt-4">
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">3</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>
                <div class="row pt-4">
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">4</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>
                <div class="row pt-4">
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">5</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>
                <div class="row pt-4">
                  <div class="col-md-1">  
                      <div class="d-flex flex-column">
                        <div class="small-num-circle text-center">
                          <div class="small-num-inner">
                            <span style="font-size: 25px; color: #fff;">6</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-11 pb-3">  
                       <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies lorem dolor, sed. </span>
                  </div>
                </div>
                
                
                -->
                
            <div class="container">
                <div class="col-md-12" align="center"> 
                    <button type="submit" class="btn btn-secondary btn-block btn-appl mb-4">Aplikuj</button>
                </div>
            </div>
        </div>
    </div>
</div>








        <div class="container career-list">
            <script type='text/javascript' src='https://skk.erecruiter.pl/Code.ashx?cfg=e2c8acc616db4408a9f4930b0f00af61'></script>

            
        </div>
 


<div id="modal-error" style="display:none;">
    <?php if(Yii::app()->user->hasFlash('error')): ?>
        <?=Yii::app()->user->getFlash('error');?>
    <?php endif; ?>
</div>

<?php


cs()->registerCssFile('/js/jquery-modal-master/jquery.modal.min.css');
cs()->registerScriptFile('/js/jquery-modal-master/jquery.modal.min.js');
cs()->registerScriptFile('/js/slideList.js');

?>


<script>
    $('button.btn-appl').on('click', function(){
        window.location.href="https://system.erecruiter.pl/FormTemplates/RecruitmentForm.aspx?WebID=2c5bc38eeb8346a3b6a50178eec69516";
    });
    
    <?php if(Yii::app()->user->hasFlash('error')): ?>
        $("#modal-error").modal({
            escapeClose: true,
            clickClose: true,
            showClose: true
        });
    <?php endif; ?>
    
</script>