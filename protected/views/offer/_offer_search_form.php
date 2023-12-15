<?php
/**
 * @var $model OfferProduct
 * @var $form BsActiveForm
 */
?>

    <h4>Wyszukiwanie informacji</h4>
<?php $form = $this->beginWidget('BsActiveForm', array(
    'id' => 'search-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => false,
    ),
)); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-md-4"><?php echo $form->label($model, 'name'); ?></div>
            <div class="col-md-8">
                <?php echo $form->textField($model, 'name', array('class' => 'form-control input-sm')); ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4"><?php echo $form->label($model, 'group'); ?></div>
            <div class="col-md-8">
                <?php
                $data = CHtml::listData(OfferCategory::model()->findAll(array(
                    'condition' => 'type = "group"',
                    'order' => 'name ASC'
                )),
                    'name', 'name');
                echo $form->dropDownList($model, 'group', $data,
                    array('empty' => 'wybierz', 'class' => 'form-control input-sm')); ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4"><?php echo $form->label($model, 'producer'); ?></div>
            <div class="col-md-8">
                <?php
                $data = CHtml::listData(OfferCategory::model()->findAll(array(
                    'condition' => 'type = "producer"',
                    'order' => 'name ASC'
                )), 'name', 'name');
                echo $form->dropDownList($model, 'producer', $data,
                    array('empty' => 'wybierz', 'class' => 'form-control input-sm')); ?>
            </div>
        </div>
    </div>
    <div class="form-group">

        <div class="row">
            <div class="col-md-4"><?php echo $form->label($model, 'country'); ?></div>
            <div class="col-md-8"><?php
                $data = CHtml::listData(OfferCategory::model()->findAll(array(
                    'condition' => 'type = "country"',
                    'order' => 'name ASC'
                )), 'name', 'name');
                echo $form->dropDownList($model, 'country', $data,
                    array('empty' => 'wybierz', 'class' => 'form-control input-sm')); ?></div>
        </div>
    </div>

    <button type="submit" class="btn btn-default btn-primary btn-sm pull-right">Szukaj</button>
<?php $this->endWidget(); ?>

<?php
Yii::app()->clientScript->registerScript('searchTalent', "
$('form#search-form').submit(function(){
    $.fn.yiiListView.update('offer-product-list', {
        data: $(this).serialize()
    });
    return false;
});
");
?>