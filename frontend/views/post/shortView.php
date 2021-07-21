<?php


use common\models\TagPost;
use yii\helpers\Html;

/* @var $model common\models\Post */
/* @var TagPost $postTag */
?>

<h1><?= $model->title ?></h1>

<div class="meta">
    <p><?= Yii::t('frontend', 'Автор поста') ?>
        : <?= $model->author->username ?> <?= Yii::t('frontend', 'Дата публикации') ?>
        : <?= $model->publish_date ?> <?= Yii::t('frontend', 'Город')
        ?>

        : <?= Html::a($model->category->title, ['category/view', 'id' => $model->category->id]) ?></p>
</div>

<div class="content">
    <?= $model->anons ?>
    <img class="img-responsive" src="../backend/web/upload/store/<?= $model->content ?>" alt="">
</div>

<div class="tags">
    <?php
    $tags = [];
    foreach ($model->getTagPost()->all() as $postTag) {
        $tag = $postTag->getTag()->one();
        $tags[] = Html::a($tag->title, ['tag/view', 'id' => $tag->id]);
    } ?>

    <?= Yii::t('frontend', 'Теги') ?>: <?= implode($tags, ', ') ?>
</div>

<?= Html::a(Yii::t('frontend', 'Подробнее'), ['post/view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
