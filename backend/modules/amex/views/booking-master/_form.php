<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\BookingMaster */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="booking-master-form">

<div class="col-lg-4">

</div>

<div class="col-lg-8">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GID')->textInput() ?>

    <!-- <input class="datepicker" data-date-format="mm/dd/yyyy"> -->

    <?= $form->field($model, 'dateOfPlay')->textInput(['data-date-format' => "mm/dd/yyyy",'class' => 'datepicker']) ?>

    <?php // $form->field($model, 'dateOfBooking')->textInput() ?>

    <?= $form->field($model, 'preferredTimeOfPlay')->textInput(['placeholder' => "HH:MM"]) ?>

    <?= $form->field($model, 'timeOfPlay1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timeOfPlay2')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'confirmedTimeOfPlay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numOfGolfers')->textInput() ?>
<?php /*
    <!-- <?= $form->field($model, 'customerID')->textInput() ?> -->

    <?= $form->field($model, 'bookingStatus')->textInput() ?> */ ?>

    <?= $form->field($model, 'ConfirmDateTime')->textInput() ?>

    <?= $form->field($model, 'isEscalated')->textInput() ?>

    <?= $form->field($model, 'outOfTAT')->textInput() ?>

    <?= $form->field($model, 'cancellationReasonID')->textInput() ?>

    <?= $form->field($model, 'cancellationReason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'referenceNum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'conciergeRemarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isosRemarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'golflanRemarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'masterRemarks')->textarea(['rows' => 6]) ?>

  <?php /*  <!-- <?= $form->field($model, 'isActive')->textInput() ?> -->

    <!-- <?= $form->field($model, 'createdOn')->textInput() ?>

    <?= $form->field($model, 'lastUpdated')->textInput() ?> -->

    <!-- <?= $form->field($model, 'createdBy')->textInput() ?> --> */ ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
