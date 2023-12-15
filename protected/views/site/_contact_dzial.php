<h2><?php echo $model->name; ?></h2>

<?php echo $model->file->hasImage() ? CHtml::image($model->file->getUrl('original'), 'kontakt', array('class' => 'object-fit-image mb-25')) : ''; ?>


<?php echo $model->content; ?>

<?php
$contacts = Contact::model()->findAll('parent_id = :id AND type=:type',
    array(':id' => $model->id, ':type' => 'person'));
foreach ($contacts as $contact): ?>
        <h4><?php echo $contact->position; ?></h4>
        <div class="row mb-25">
            <div class="col-sm-4">
                <span class="bold"><?php echo $contact->name; ?></span>
            </div>
            <div class="col-sm-8">
                <?php echo $contact->getPhonesStr(); ?>
            </div>
        </div>
<?php endforeach; ?>
