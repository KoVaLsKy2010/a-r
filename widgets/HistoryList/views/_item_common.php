<?php

use app\models\User;
use yii\helpers\Html;
use app\widgets\DateTime\DateTime as YiiDataTimeWidget;

/* @var $user User */
/* @var $body string */
/* @var $footer string */
/* @var $footerDatetime string */
/* @var $bodyDatetime string */
/* @var $iconClass string */
?>

<div class="status-container">
    <?php echo Html::tag('i', '', ['class' => "icon icon-circle icon-main white status-icon pull-left $iconClass"]); ?>
    <?php echo $body ?>
    <?php if (isset($bodyDatetime)): ?>
        <span>
           <?= YiiDataTimeWidget::widget(['dateTime' => $bodyDatetime]) ?>
        </span>
    <?php endif; ?>
</div>

<?php if (isset($user)): ?>
    <div class="bg-info info-user"><?= $user->username; ?></div>
<?php endif; ?>

<?php if (isset($content) && $content): ?>
    <div class="bg-info info-content">
        <?php echo $content ?>
    </div>
<?php endif; ?>

<?php if (isset($footer) || isset($footerDatetime)): ?>
    <div class="bottom-datetime">
        <?php echo isset($footer) ? $footer : '' ?>
        <?php if (isset($footerDatetime)): ?>
            <span class="pull-right"><?= YiiDataTimeWidget::widget(['dateTime' => $footerDatetime]) ?></span><div class="clear clearfix"></div>
        <?php endif; ?>
    </div>
<?php endif; ?>