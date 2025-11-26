<?php

namespace frontend\controllers;

use common\models\Category;
use yii\web\Controller;

class CategoryController extends \frontend\base\Controller
{
    public function actionView($id)
    {
        $category = Category::findOne($id);
        return $this->render('view', [
            'category' => $category,
        ]);

    }


}