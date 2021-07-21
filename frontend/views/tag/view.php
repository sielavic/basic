<?php


/** @var $tag common\models\Tag */
/** @var $posts \yii\data\ActiveDataProvider */
/** @var $categories yii\data\ActiveDataProvider */

/** @var $postTag \common\models\TagPost */


use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = $tag->title;

?>

<div class="col-sm-8 post-index">


    <h1><?= Yii::t('frontend', 'Новости по тэгу') ?> <?= Html::encode($this->title) ?>  </h1>

    <?php
    foreach ($posts->models as $postTag) {
        echo $this->render('//post/shortView', [
            'model' => $postTag->getPost()->one()
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
        foreach ($categories->models as $tagItem) {
            echo $this->render('//category/shortViewCategory', [
                'model' => $tagItem
            ]);
        }
        ?>
    </ul>
</div>
