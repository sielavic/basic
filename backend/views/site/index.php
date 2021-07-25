<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = Yii::t('backend', 'My Yii Blog');
?>
<div class="site-index">

    <div class="body-content">

        <h3><?= Yii::t('backend', 'Список добавленных новостей') ?></h3>
        <ul class="nav nav-pills">
            <li><a href="<?= Url::toRoute('post/index'); ?>"><?= Yii::t('backend', 'Посты') ?></a></li>
            <li><a href="<?= Url::toRoute('category/index'); ?>"><?= Yii::t('backend', 'Города') ?></a></li>
            <li><a href="<?= Url::toRoute('tags/index'); ?>"><?= Yii::t('backend', 'Тэги') ?></a></li>
            <li><a href="<?= Url::toRoute('comment/index'); ?>"><?= Yii::t('backend', 'Коммента́рии') ?></a></li>
            <li><a href="<?= Url::toRoute('user/index'); ?>"><?= Yii::t('backend', 'Авторы') ?></a></li>
        </ul>

    </div>
</div>
