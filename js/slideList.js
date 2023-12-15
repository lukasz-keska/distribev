$(document).on('click','.slide-list-content>.plus',function(){
        
    var desc = $(this).parents('.container').children('.slide-el-content');
    if($(this).parent().hasClass('active')){
        desc.hide();
        $(this).parent().removeClass('active');
        $(this).find('i').removeClass('fa-minus').addClass('fa-plus');            
    }else{
        $('.slide-list-content.active').removeClass('active');
        $('.slide-el-content:visible').hide();
        $(this).parent().addClass('active');
        desc.show();
        $('.slide-list-content i.fa-minus').removeClass('fa-minus').addClass('fa-plus');  
        $(this).find('i').removeClass('fa-plus').addClass('fa-minus');

    }

});

$(document).on('click','.slide-list-content>.name.col',function(){
    $(this).siblings('.plus').trigger('click');
    return false;
});