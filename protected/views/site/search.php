<?php

?>


<style>
    
    .search-form {
        position: relative;
        padding-right: 14px;
    }

    .search-result{
        
        position: relative;
        width:100%; 
        background-color:#FFF; 
        border:1px solid #003255; 
        display:none;
        
    }

    .search-result>ul{
            padding-top: 15px;
            padding-bottom: 15px;
            list-style-type: none;
            position: absolute;
            background: #FFF;
            width: 100%;
            z-index: 100;
            border: 1px solid #ccc;
            
    }

    .search-result>ul>li>a{
        font-weight:bold;
    }

    .search-result ul a{
        color: #000;
        //text-decoration:none;
    }
</style>

<div class="search-form col-sm-6 col-12 search-container">
    <input type="text" placeholder="Szukaj produktu..." class="w-100" />
    <span class="search-form-icon"><i class="fas fa-search text-white" style="font-size: 24px;"></i></span>
    <div class="search-result">
        <ul></ul>
    </div>
</div>