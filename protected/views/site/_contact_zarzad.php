<div class="row">
    <div class="col-sm-6">
        <h2><?php echo $model->name; ?></h2>
        <h4 class="mb-25">UNITED BEVERAGES S.A.</h4>
        <span class="normal"><?php echo $model->street; ?></span>
        <span class="normal"><?php echo $model->zipcode; ?> <?php echo $model->city; ?></span>
        <?php if($model->phone1): ?>
            <span class="normal">tel. <?php echo $model->phone1; ?></span>
        <?php endif; ?>
    </div>
    <div class="col-sm-6">
        <?php echo $model->file->hasImage() ? CHtml::image($model->file->getUrl('original')) : ''; ?>
    </div>
</div>
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

<?php
$contacts = Contact::model()->findAll('parent_id = :id AND type=:type',
    array(':id' => $model->id, ':type' => 'person_president'));
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
<div class="row mb-25">
<?php
$contacts = Contact::model()->findAll('parent_id = :id AND type=:type',
    array(':id' => $model->id, ':type' => 'person_board_member'));
foreach ($contacts as $contact): ?>
        <div class="col-sm-4">
            <h4><?php echo $contact->position; ?></h4>
            <span class="bold"><?php echo $contact->name; ?></span>
        </div>
<?php endforeach; ?>
    <?php if($model->id==2): ?>
        <div class="col-sm-10">
            Zapytania o asortyment i ceny produktów prosimy kierować do hurtowni, sekretariat nie posiada takich informacji. Numery telefonów znajdują się w zakładce BIURA OBSŁUGI KLIENTA po lewej stronie.
        </div>
    <?php endif; ?>
</div>