<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Посты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Создать пост'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'anons:ntext',
            'text:ntext',
            [
                'label' => Yii::t('backend', 'Город'),
                'value' => 'category.title'
            ],
            [
                'label' => Yii::t('backend', 'Автор'),
                'value' => 'author.username',
            ],
            'publish_status',
            'publish_date',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]) ?>

</div>
