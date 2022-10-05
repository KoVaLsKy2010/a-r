<?php

use app\models\History;

/* @var $model History */
/* @var $oldValue string */
/* @var $newValue string */
/* @var $content string */
?>

    <div class="status-container status_change">
        <?php echo "$model->eventText " .
            "<span class='badge badge-pill badge-warning'>" . ($oldValue ?? "<i>not set</i>") . "</span>" .
            " &#8594; " .
            "<span class='badge badge-pill badge-success'>" . ($newValue ?? "<i>not set</i>") . "</span>";
        ?>

        <span class="pull-right"><?= \app\widgets\DateTime\DateTime::widget(['dateTime' => $model->ins_ts]) ?></span><div class="clear clearfix"></div>
    </div>

<?php if (isset($model->user)): ?>
    <div class="bg-info"><?= $model->user->username; ?></div>
<?php endif; ?>

<?php if (isset($content) && $content): ?>
    <div class="bg-info">
        <?php echo $content ?>
    </div>
<?php endif; ?>