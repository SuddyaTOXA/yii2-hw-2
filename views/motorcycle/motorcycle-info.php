<?php
use yii\helpers\Html;
?>
<p>Motorcycle info:</p>

<ul>
    <li><label>Country</label>: <?= Html::encode($model->country) ?></li>
    <li><label>Model</label>: <?= Html::encode($model->model) ?></li>
    <li><label>Brand</label>: <?= Html::encode($model->brand) ?></li>
    <li><label>Year</label>: <?= Html::encode($model->year) ?></li>
    <li><label>Power</label>: <?= Html::encode($model->power) ?></li>
    <li><label>Fuel consumption</label>: <?= Html::encode($model->fuelConsumption) ?></li>
</ul>