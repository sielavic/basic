<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/** @var $this yii\web\View */
/** @var $category \common\models\Category текущая категория */
/** @var $categories \yii\data\ActiveDataProvider список категорий */
/** @var $posts \yii\data\ActiveDataProvider список категорий */

$this->title = Yii::t('frontend', 'Город') . ' ' . $category->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-8 post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    foreach ($posts->models as $post) {
        echo $this->render('//post/shortView', [
            'model' => $post
        ]);
    }
    ?>
    <div>
        <?= LinkPager::widget([
            'pagination' => $posts->getPagination()
        ]) ?>
    </div>

</div>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <h1><?= Yii::t('frontend', 'Города') ?></h1>
    <ul>
        <?php
        foreach ($categories->models as $category) {
            echo $this->render('shortViewCategory', [
                'model' => $category
            ]);
        }
        ?>
    </ul>
</div>
