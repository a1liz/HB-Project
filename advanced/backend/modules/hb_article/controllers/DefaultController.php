<?php

namespace backend\modules\hb_article\controllers;

use yii\web\Controller;

/**
 * Default controller for the `hb_article` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
