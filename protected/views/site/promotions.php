<?php
    $this->pageTitle = $model->title;
?>

<style>

    .img-prom-shopsdetal {
        background-size: cover;
        background-repeat: no-repeat;
        height: 550px;
        background-position: center;
    }
    .img-prom-shopsdetal:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }

    .img-prom-horeca {
        background-size: cover;
        background-repeat: no-repeat;
        height: 550px;
        background-position: center;
    }
    .img-prom-horeca:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }

    .img-prom-b2b {
        background-size: cover;
        background-repeat: no-repeat;
        height: 550px;
        background-position: center;
    }
    .img-prom-b2b:before {
        content: '';
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        left: 1px;
        background-image: linear-gradient(to bottom right,#000,#000);
        opacity: .4;
    }

</style>

<div id="content" class="content-bg">    
    <ul class="d-flex breadcrumbs">
        <li><a href="<?= Yii::app()->controller->createUrl('site/index') ?>">Strona główna</a></li>
        <li>></li>
        <li>Promocje</li>
    </ul>
    <h2 class="content-h2 mt-2 mb-2">
        <strong><?= $model->title ?></strong>
    </h2>
    <p class="content-p pt-3 pb-3"><?= $model->content ?></p>
    <div class="d-flex flex-md-row flex-column pb-5">                
        <?php foreach ($promotions as $slug => $promo): ?>
            <div class="col-md-4 col-12 img-adjust">
                <a href="<?= Yii::app()->controller->createUrl('site/promotions/slug/' . $slug) ?>">
                    <div class="img-text">
                        <?= $promo->title ?>
                    </div>
                    <div class="img-prom-<?= $slug ?>" style="<?= (($promo->file->hasImage()) ? 'background-image: url(' . $promo->file->getUrl('original') . ')' : '') ?>"></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>            
</div>
