<?php

use yii\widgets\ListView;

echo
ListView::widget([
    'dataProvider' => $recent,
    'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
    ],
    'layout' => "{items}\n{pager}",
    'itemView' => '_item-recent',
]);
                        ?>