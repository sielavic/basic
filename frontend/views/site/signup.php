<?php

use common\models\Category;
use frontend\models\SignupForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $form yii\widgets\ActiveForm */
/* @var $model SignupForm */
/* @var $category yii\db\ActiveRecord[] */



$this->title = Yii::t('frontend', 'Регистрация');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>


    <p><?= Yii::t('frontend', 'Пожалуйста, заполните следующие поля для регистрации') ?>:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->label('Ваше имя') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id','title'))->label('Ваш Город')
             ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Придумайте пароль') ?>
            <div class="form-group">
                <?= Html::submitButton('Зарегистрироватся', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
