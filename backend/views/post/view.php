<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,


        'attributes' => [
            'id',
            'title',
            'anons:ntext',
            'text:ntext',

            [
                'label' => Yii::t('backend', 'Город'),
                'value' => $model->category->title
            ],

            [
                'attribute' => 'content',
                'label' => Yii::t('backend', 'Фото'),
                'value' => function ($model) {
                    return Html::img('/../backend/web/upload/store/' . $model->content, ['alt' => 'No Image', 'width' => '200px']);
                },
                'format' => 'raw',
            ],

            [
                'label' => Yii::t('backend', 'Автор'),
                'value' => $model->author->username,
            ],
            'publish_status',
            'publish_date',
        ],
    ]) ?>

</div>
