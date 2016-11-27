<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'country') ?>

            <?= $form->field($model, 'brand') ?>
            
            <?= $form->field($model, 'model') ?>
            
            <?= $form->field($model, 'power') ?>

            <?= $form->field($model, 'fuelConsumption') ?>

            <?= $form->field($model, 'year') ?>

            <?= $form->field($model, 'photo')->fileInput() ?>
            
            <?= $form->field($model, 'color')->input('color') ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'verificationCode')->widget(Captcha::className(), [
                'template' => '{image} {input}',
            ])
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>