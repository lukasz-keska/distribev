// The grid manages tiles using ids, which you can define. For our
// examples we'll just use the tile number as the unique id.
var TILE_IDS = [];
var HEIGHTS = [];

// templates in JSON matching the predefined selections you can
// choose on the demo page
var DemoTemplateRows = [
    [" A A B ",
        " A A B ",
        " A A C ",
        " . . . ",
        ]
];


var cellList = ['A', 'A', 'B', 'A', 'A', 'B', 'A', 'A', 'C', '.', '.', '.'];

// SAMPLE #3
$(function() {


    function chunks(array, size) {
        var results = [];
        while (array.length) {
          results.push(" " + array.splice(0, size).join(" ") + " ");
        }
        return results;
    };

    // create a custom Tile which customizes the resize behavior
    function CustomTile(tileId, element) {
        // initialize base
        Tiles.Tile.call(this, tileId, element);
    }

    CustomTile.prototype = new Tiles.Tile();
    
    CustomTile.prototype.resize = function(cellRect, pixelRect, animate, duration, onComplete) {


console.log(this.id, $('.categoriesList>div[data-id="'+this.id+'"]').length);

        // set the text inside the tile to the dimensions
        var cellDimensions = 'PUSTA: ' + cellRect.width + ' x ' + cellRect.height;
        
        if($('.categoriesList>div[data-id="'+this.id+'"]').length){
            //this.$el.find('.dev-tile-size').html($('.categoriesList>div[data-id="'+this.id+'"]').find('img'));
            
            console.log('test',this.$el.find('.dev-tile-size').parent(),this.$el.find('.dev-tile-size').parent().attr('style'))
            
            
            this.$el.find('.dev-tile-size').parent().css({
                    'background-image': 'url('+$('.categoriesList>div[data-id="'+this.id+'"]').find('img').attr('src')+')',
                    'background-repeat':' no-repeat',
                    'background-size': 'contain'
            });
            
        }else{
            this.$el.find('.dev-tile-size').text(cellDimensions);
        }
        
        

        // call the base to perform the resize
        Tiles.Tile.prototype.resize.call(
            this, cellRect, pixelRect, animate, duration, onComplete);
    };


    var el = document.getElementById('tiles-grid'),
        grid = new Tiles.Grid(el);

    // template is selected by user, not generated so just
    // return the number of columns in the current template
    grid.resizeColumns = function() {
        return this.template.numCols;
    };

    // we'll override creation to use our custom tile
    grid.createTile = function(tileId) {
        var tile = new CustomTile(tileId);
        tile.$el.append('<div class="dev-tile-size"></div>');
        return tile;
    };

    var rows = [];
    $('.categoriesList>div').each(function(k,v){
        TILE_IDS.push($(v).data('id'));
        rows[k] = cellList[((k-cellList.length)<0?k:k-cellList.length)];
    });
    
    if(rows.length<cellList.length){
        for(i=(rows.length-1);i<cellList.length;i++){
            rows[i] = cellList[i];
        }
    }
    
    var rows = chunks(rows,3);
   
    

    // set the new template and resize the grid
    grid.template = Tiles.Template.fromJSON(rows);  
    grid.isDirty = true;
    grid.resize();

    // adjust number of tiles to match selected template
    var ids = TILE_IDS.slice(0, grid.template.rects.length);
    grid.updateTiles(ids);
    grid.redraw(true);
    

    // wait until users finishes resizing the browser
    var debouncedResize = debounce(function() {
        grid.resize();
        grid.redraw(true);
    }, 200);

    
    // when the window resizes, redraw the grid
    $(window).resize(debouncedResize);
    
    setTimeout(function(){
        var newHeight = 0;
        $('#tiles-grid>div').each(function(){
            if($(this).css('left')=='0px'){
                newHeight+=parseInt($(this).css('height'));
            }
        });

        if(newHeight>0 && newHeight!=$('#tiles-grid').css('height')){
            $('#tiles-grid').css('height',newHeight);
        }
    },500);
    
    
});
