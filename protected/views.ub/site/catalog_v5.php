<?php 

$this->pageTitle = 'Katalog'; 

cs()->registerScriptFile('/js/turnjs5/jquery-2.0.3.min.js');
cs()->registerScriptFile('/js/turnjs5/underscore-min.js');
cs()->registerScriptFile('/js/turnjs5/backbone-min.js');
cs()->registerScriptFile('/js/turnjs5/turn.min.js');
cs()->registerScriptFile('/js/turnjs5/app.js');
//cs()->registerScriptFile('/js/zoom/jquery.zoom.js');
cs()->registerCssFile('/css/turnjs5/font-awesome.min.css');
cs()->registerCssFile('//fonts.googleapis.com/css?family=Carrois+Gothic+SC');
//cs()->registerScriptFile('/css/turnjs5/main.css');

?>


<style>
    .ui-menu{
        display:none;
    }
    
    .pn-catalog-container{
        background-color: #003d69;
        color: #FFF;
    }
    
    .pn-container{
        text-align: center;
    }
    
    
    #input-page-number{
        width: 50px;
        margin-left: 10px;
        text-align: center;
        padding-left: 10px;
        font-weight: bold;
    }
    
    .turn-prev, .turn-next{
        display: grid;
        align-items: center;
        font-size:30px;
    }
    
    .turn-next{
        text-align:right;
    }
    
    #flipbook a{
        font-size:30px;
        cursor:pointer;
    }
    
    .footer-links a, .footer-links a:hover {
        color: #FFF;
    }
    
    .zoom {
            display:inline-block;
            position: relative;
    }

    /* magnifying glass icon */
    .zoom:after {
            content:'';
            display:block; 
            width:33px; 
            height:33px; 
            position:absolute; 
            top:0;
            right:0;
            background:url(icon.png);
    }
    
    .zoom img {
            display: block;
    }

    .zoom img::selection { background-color: transparent; }
        
    .ui-arrow-next-page,
    .ui-arrow-previous-page {
      width: 30px;
      height: 60px;
      position: absolute;
      top: 50%;
      top: calc(50% - 30px);
      right: -40px;
      z-index: 10;  
      background-size: 60px 120px;
      background-position: 0 0;
      opacity: 0.5;
      -webkit-transition: opacity 0.2s;
      -moz-transition: opacity 0.2s;
      -o-transition: opacity 0.2s;
      -ms-transition: opacity 0.2s;
      transition: opacity 0.2s;
      cursor: pointer;
    }
    
    .ui-arrow-previous-page {
      background-position: 30px 0;
      right: auto;
      left: -40px;
    }
    
    .ui-arrow-control-hover {
      -webkit-transition: none;
      -moz-transition: none;
      -o-transition: none;
      -ms-transition: none;
      transition: none;
      opacity: 0.7;
    }
    
    .ui-arrow-control-tap {
      opacity: 1;
    }
    
    .first-page .ui-arrow-previous-page {
      opacity: 0;
    }
    
    .last-page .ui-arrow-next-page {
      opacity: 0;
    }

</style>

<div class="container-full pn-catalog-container">
    <div class="container pn-container">
        <div class="catalog-page-number">
            <span>Strona: </span><span><input type="number" value="1" id="input-page-number" onkeydown="return false" /></span> 
        </div>
    </div>
</div>

<div class="pages_list" style="display:none;">
    <?php foreach($pages as $k =>  $page): ?>
        <img src="<?=$page->file->getUrl('pageformat')?>" width="424" height="600" />
    <?php endforeach; ?>
</div>

<div class="catalog-app">
  <div id="viewer">
    <!--<div class="col-12 col-sm-1 turn-prev">
        <a ignore="1" class="fas fa-chevron-left ui-arrow-control ui-arrow-previous-page"></a>
    </div>-->
    <div id="flipbook" class="ui-flipbook">
        <a ignore="1" class="fas fa-chevron-right ui-arrow-control ui-arrow-next-page"></a>
        <a ignore="1" class="fas fa-chevron-left ui-arrow-control ui-arrow-previous-page"></a>
    </div>
    <!--<div class="col-12 col-sm-1 turn-next">
        <span><i class="fas fa-chevron-right ui-arrow-control ui-arrow-next-page"></i></span>
    </div>-->
  </div>

  <!-- controls -->
  <div id="controls" style="display:none;">
    <div class="all">
        <div class="ui-slider" id="page-slider">
        <div class="bar">
          <div class="progress-width">
            <div class="progress">
              <div class="handler"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="ui-options" id="options">
        <a class="ui-icon" id="ui-icon-table-contents">
          <i class="fa fa-bars"></i>
        </a>
        <a class="ui-icon show-hint" title="Miniatures" id="ui-icon-miniature">
          <i class="fa fa-th"></i>
        </a>
        <a class="ui-icon" id="ui-icon-zoom">
          <i class="fa fa-file-o"></i>
        </a>
        <a class="ui-icon show-hint" title="Share" id="ui-icon-share">
          <i class="fa fa-share"></i>
        </a>
        <a class="ui-icon show-hint" title="Full Screen" id="ui-icon-full-screen">
          <i class="fa fa-expand"></i>
        </a>
        <a class="ui-icon show-hint" id="ui-icon-toggle">
          <i class="fa fa-ellipsis-v"></i>
        </a>
      </div>

      <!-- zoom slider -->
      <div id="zoom-slider-view" class="zoom-slider">
          <div class="bg">
             <div class="ui-slider" id="zoom-slider">
              <div class="bar">
                <div class="progress-width">
                  <div class="progress">
                    <div class="handler"></div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / zoom slider -->
    </div>
    
    <div id="ui-icon-expand-options">
      <a class="ui-icon show-hint">
        <i class="fa fa-ellipsis-h"></i>
      </a>
    </div>

  </div>
  <!-- / controls -->

  <!-- miniatures -->
  <div id="miniatures" class="ui-miniatures-slider" style="display: none;">

  </div>
  <!-- / miniatures -->
</div>


<script type="text/javascript">

    $(document).ready(function(){
         
        
        <?php foreach($pages as $k =>  $page): ?>
            $('#flipbook .page-<?=$k+1?>').zoom({url: '<?=$page->file->getUrl('original')?>'});
        <?php endforeach; ?>     
         
         $('#input-page-number').on('change', function(){
            var pn = $(this).val();
            if($('#flipbook').turn('hasPage', pn)){
                $('#flipbook').turn('page', pn);
            }else{
                var _o = $(this);
                _o.addClass('no-page');
                setTimeout(function(){
                   _o.removeClass('no-page');
                },1000);
            }
        });
         
         
    });
  
  
    
  
     
  
    FlipbookSettings = {
      options: {
        pageWidth: 424,
        pageHeight: 600,
        pages: $('.pages_list>img').length,
                          when:{
                              turn:function(event, page, pageObj){
                                  console.log('TURN!!!',event, page, pageObj)
                                  $('#input-page-number').val(page)
                              }
                          }
      },
      //shareMessage: 'Introducing turn.js 5 - HTML5 Library for Flipbooks.',
      //pageFolder: '/gfx/catalog/',
      //loadRegions: true
    };
  </script>