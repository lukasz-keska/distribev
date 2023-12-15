<?php 

$this->pageTitle = 'Katalog'; 

//cs()->registerScriptFile('/js/turnjs4/extras/jquery.min.1.7.js');
cs()->registerScriptFile('/js/turnjs4/extras/modernizr.2.5.3.min.js');
//cs()->registerCssFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css');
//cs()->registerScriptFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js');

?>

<style>
    .pn-catalog-container{
        background-color: #003d69;
        color: #FFF;
    }
    
    .catalog-container{
        background-color: #FFF;
        color: #003d69;
    }
    
    .pn-container{
        text-align: center;
    }
    
    .catalog-page-number{
        display: inline-block;
    }
    
    .catalog-row{
        height: 660px;
        background-color: #ccc;
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
    
    .turn-prev span, .turn-next span{
        cursor:pointer;
        display:inline-block;
        text-align: center;
    }
    
    .turn-next{
        text-align:right;
    }
    
    .no-page{
        color: #bf2226;
    }
    
    .zoomer{
        z-index:100!important;
    }
    
    .flipbook-viewport{
        min-height:565px;
    }
</style>

<div class="container-full pn-catalog-container">
    <div class="container pn-container">
        <div class="catalog-page-number">
            <span>Strona: </span><span><input type="number" value="1" id="input-page-number" onkeydown="return false" /></span> 
        </div>
    </div>
</div>

<div class="container-full catalog-container">
    <div class="row catalog-row">
        <div class="col-12 col-sm-1 turn-prev">
            
            <span><i class="fas fa-chevron-left"></i></span>
            
        </div>
        <div class="col-12 col-sm-10">
            
            <div class="flipbook-viewport">
                    <div class="container">
                            <div class="flipbook">
                                
                                <?php foreach($pages as $page): ?>
                                <div class="tpage" style="background-image:url(<?=$page->file->getUrl('original')?>)"></div>
                                
                                <?php endforeach; ?>
                                
                                
                                <!--
                                <div style="background-image:url(/gfx/catalog/catalog2_2.jpg)"></div>
                                <div style="background-image:url(/gfx/catalog/catalog2_3.jpg)"></div>
                                <div style="background-image:url(/gfx/catalog/catalog3_1.jpg)"></div>
                                <div style="background-image:url(/gfx/catalog/catalog3_2.jpg)"></div>
                                <div style="background-image:url(/gfx/catalog/catalog3_3.jpg)"></div>
                                -->
                            </div>
                    </div>
            </div>
            
            
            
        </div>
        <div class="col-12 col-sm-1 turn-next">
            
            <span><i class="fas fa-chevron-right"></i></span>
            
        </div>
    </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
    


function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			width:922,
			height:600,
			elevation: 50,
			gradients: true,
			autoCenter: true,
                        when:{
                            turn:function(event, page, pageObj){
                                $('#input-page-number').val(page)
                            }
                        }

	});
        
        
       $('.flipbook-viewport').zoom({
           flipbook: $('.flipbook'),
           
		max: function() { 
			console.log('MAX',$('.flipbook').width(), arguments);
			return 1500/$('.magazine').width();

		}, 
		when: {
			tap: function(event) {

				if ($(this).zoom('value')==1) {
					$('.flipbook').
						removeClass('animated').
						addClass('zoom-in');
					$(this).zoom('zoomIn', event);
				} else {
					$(this).zoom('zoomOut');
				}
			},

			resize: function(event, scale, page, pageElement) {
                                console.log('RESIZE')
				if (scale==1)
					loadSmallPage(page, pageElement);
				else
					loadLargePage(page, pageElement);

			},

			zoomIn: function () {
				
				$('.thumbnails').hide();
				$('.made').hide();
				$('.flipbook').addClass('zoom-in');

				if (!window.escTip && !$.isTouch) {
					escTip = true;

					$('<div />', {'class': 'esc'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},

			zoomOut: function () {

				$('.esc').hide();
				$('.thumbnails').fadeIn();
				$('.made').fadeIn();

				setTimeout(function(){
					$('.flipbook').addClass('animated').removeClass('zoom-in');
                                        
                                        
                                        console.log('XOOMOUT')
                                        
					//resizeViewport();
				}, 0);

			},

			swipeLeft: function() {

				$('.flipbook').turn('next');

			},

			swipeRight: function() {
				
				$('.flipbook').turn('previous');

			}
		}
        });
        
        $('#input-page-number').on('change', function(){
            var pn = $(this).val();
            if($('.flipbook').turn('hasPage', pn)){
                $('.flipbook').turn('page', pn);
            }else{
                var _o = $(this);
                _o.addClass('no-page');
                setTimeout(function(){
                   _o.removeClass('no-page');
                },1000);
            }
        })
        
        $('.turn-prev>span').on('click', function(){
            $('.flipbook').turn('previous');
        });
        
        $('.turn-next>span').on('click', function(){
            $('.flipbook').turn('next');
        });
        
        
}

function loadLargePage(page, pageElement) {
	
	var img = $('<img />');

	img.load(function() {

		var prevImg = pageElement.find('img');
		$(this).css({width: '100%', height: '100%'});
		$(this).appendTo(pageElement);
		prevImg.remove();
		
	});

	// Loadnew page
	console.log('loadLargePage', img.attr('src'))
	//img.attr('src', 'pages/' +  page + '-large.jpg');
}


function loadSmallPage(page, pageElement) {
	
	var img = pageElement.find('img');

	img.css({width: '100%', height: '100%'});

	img.unbind('load');
	// Loadnew page
console.log('loadSmallPage', img.attr('src'))
	//img.attr('src', 'pages/' +  page + '.jpg');
}


function resizeViewport() {

	var width = $(window).width(),
		height = $(window).height(),
		options = $('.magazine').turn('options');

	$('.magazine').removeClass('animated');

	$('.magazine-viewport').css({
		width: width,
		height: height
	}).
	zoom('resize');


	if ($('.magazine').turn('zoom')==1) {
		var bound = calculateBound({
			width: options.width,
			height: options.height,
			boundWidth: Math.min(options.width, width),
			boundHeight: Math.min(options.height, height)
		});

		if (bound.width%2!==0)
			bound.width-=1;

			
		if (bound.width!=$('.magazine').width() || bound.height!=$('.magazine').height()) {

			$('.magazine').turn('size', bound.width, bound.height);

			if ($('.magazine').turn('page')==1)
				$('.magazine').turn('peel', 'br');

			$('.next-button').css({height: bound.height, backgroundPosition: '-38px '+(bound.height/2-32/2)+'px'});
			$('.previous-button').css({height: bound.height, backgroundPosition: '-4px '+(bound.height/2-32/2)+'px'});
		}

		$('.magazine').css({top: -bound.height/2, left: -bound.width/2});
	}

	var magazineOffset = $('.magazine').offset(),
		boundH = height - magazineOffset.top - $('.magazine').height(),
		marginTop = (boundH - $('.thumbnails > div').height()) / 2;

	if (marginTop<0) {
		$('.thumbnails').css({height:1});
	} else {
		$('.thumbnails').css({height: boundH});
		$('.thumbnails > div').css({marginTop: marginTop});
	}

	if (magazineOffset.top<$('.made').height())
		$('.made').hide();
	else
		$('.made').show();

	$('.magazine').addClass('animated');
	
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['/js/turnjs4/lib/turn.js'],
	nope: ['/js/turnjs4/lib/turn.html4.min.js'],
	both: ['/css/catalog-basic.css','/js/turnjs4/lib/zoom.min.js'],
	complete: loadApp
});

});

</script>

<!--
<div class="container">
    <h1>Katalog</h1>
            <p  style=" margin: 12px auto 6px auto; font-family: Helvetica,Arial,Sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-size-adjust: none; font-stretch: normal; -x-system-font: none; display: block;">   <a title="View UB Katalog 2016 on Scribd" href="https://www.scribd.com/document/323044561/UB-Katalog-2016#from_embed"  style="text-decoration: underline;" >UB Katalog 2016</a> by <a title="View United Beverages's profile on Scribd" href="https://www.scribd.com/user/297963283/United-Beverages#from_embed"  style="text-decoration: underline;" >United Beverages</a> on Scribd</p><iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/323044561/content?start_page=1&view_mode=slideshow&access_key=key-RjoZBFMZkMhFJbvs19Ie&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7136075949367089" scrolling="no" id="doc_82251" width="100%" height="600" frameborder="0"></iframe>
</div>
-->
