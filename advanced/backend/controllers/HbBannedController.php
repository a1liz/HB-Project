<?php

namespace backend\controllers;

use Yii;
use common\models\HbBanned;
use common\models\HbBannedSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * HbBannedController implements the CRUD actions for HbBanned model.
 */
class HbBannedController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }

    /**
     * Lists all HbBanned models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HbBannedSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderpartial('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HbBanned model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderpartial('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HbBanned model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HbBanned();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->banid]);
        } else {
            return $this->renderpartial('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HbBanned model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->banid]);
        } else {
            return $this->renderpartial('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HbBanned model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HbBanned model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HbBanned the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HbBanned::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
