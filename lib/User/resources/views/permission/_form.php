<?php

/**
 * @var $this  yii\web\View
 * @var $model \Da\User\Model\Permission
 * @var $unassignedItems string[]
 */

use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation'   => true,
]) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'description') ?>

<?= $form->field($model, 'rule') ?>

<?= $form->field($model, 'children')->widget(Select2::className(), [
    'data' => $unassignedItems,
    'options' => [
        'id' => 'children',
        'multiple' => true
    ],
]) ?>

<?= Html::submitButton(Yii::t('user', 'Save'), ['class' => 'btn btn-success btn-block']) ?>

<?php ActiveForm::end() ?>