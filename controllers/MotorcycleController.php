<?php

namespace app\controllers;

use yii;
use yii\base\Controller;

class MotorcycleController extends Controller
{
    /**
     * Display CarForm page
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Yii::createObject('app\models\Motorcycle');
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('motorcycle-info', ['model' => $model]);
        } else {
            return $this->render('motorcycle-form', ['model' => $model]);
        }
    }
}