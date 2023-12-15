<?php
/**
 * @var $model OfferProduct
 *
 */
$this->pageTitle = 'Oferta';
Yii::app()->clientScript->registerCssFile(bu('js/fancybox/jquery.fancybox.css?v=2.1.5'));
Yii::app()->clientScript->registerScriptFile(bu('js/fancybox/jquery.fancybox.pack.js?v=2.1.5'));
Yii::app()->clientScript->registerScript('fancybox', '$(".fancybox").fancybox();', CClientScript::POS_READY);
?>
<div class="page-filters">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
			<h2 class="visible-xs" style="color: #303361;">OFERTA</h2>
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-right" role="tablist">
                        <li role="presentation" class="dropdown">
                            <a href="#" id="search-drop" aria-controls="profile" class="dropdown-toggle"
                               data-toggle="dropdown">Wyszukiwanie</a>

                            <div class="dropdown-menu" role="menu" aria-labelledby="search-drop"
                                 id="search-drop-contents">
                                <?php $this->renderPartial('_offer_search_form', array(
                                    'model' => $model
                                )); ?>
                            </div>

                        </li>
                        <li role="presentation"><a href="<?php echo url('//site/contact'); ?>">Gdzie kupić...</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div id="search-filters">

                    <?php

                    $this->widget('BsListView', array(
                        'dataProvider' => $model->search(),
                        'id' => 'offer-product-list',
                        'itemView' => '_offer_product',
                        'template' => '
                                {summary}
                               <nav class="text-center">
                                     {pager}
                                </nav>

                                 <div class="search-table">
                                <table class="table">
                                <tr>
                                            <th>nazwa</th>
                                            <th>producent</th>
                                            <th>kod kreskowy</th>
                                        </tr>
                                 {items}
                                 </table>
                                </div>
                                  <nav class="text-center">{pager}</nav>',
                        'summaryText' => '<div class="summary text-right">
                                Liczba produktów w bazie: <b>' . $total . '</b><br>
                                Liczba wyszukanych produktów: <b>{count}</b><br>
                                </div>',
                        'pager' => array(
                            'class' => 'BsPager',
                            //page'=>'',
                            'firstPageLabel' => '',//overwrite firstPage lable
                            'lastPageLabel' => '',//overwrite lastPage lable
                            'nextPageLabel' => '&raquo;',//overwrite nextPage lable
                            'prevPageLabel' => '&laquo;',//overwrite prePage lable
                        ),
                        'emptyText' => '<tr><td colspan="3">Nie zaleziono wyników</td></tr>'

                    ));
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>
