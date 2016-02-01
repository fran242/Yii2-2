<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use yii\base\Model;

class Form1Controller extends Controller
{
    public function actionIndex()
        {
            $model = new app\models\Users();

            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    // form inputs are valid, do something here
                    return;
                }
            }

            return $this->render('form1', [
                'model' => $model,
            ]);
        }
}