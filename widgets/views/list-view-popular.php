<?php

use yii\widgets\ListView;

 echo ListView::widget([
    'dataProvider' => $popular,
    'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
    ],
    'layout' => "{items}\n{pager}",
    'itemView' => '_item-popular',
]);
        ?>