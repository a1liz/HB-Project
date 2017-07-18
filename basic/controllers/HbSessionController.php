<?php

namespace app\controllers;

use Yii;
use app\models\HbSessionModel;
use app\models\HbSessionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HbSessionController implements the CRUD actions for HbSessionModel model.
 */
class HbSessionController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HbSessionModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HbSessionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HbSessionModel model.
     * @param integer $uid
     * @param string $ip
     * @return mixed
     */
    public function actionView($uid, $ip)
    {
        return $this->render('view', [
            'model' => $this->findModel($uid, $ip),
        ]);
    }

    /**
     * Creates a new HbSessionModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HbSessionModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uid' => $model->uid, 'ip' => $model->ip]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HbSessionModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $uid
     * @param string $ip
     * @return mixed
     */
    public function actionUpdate($uid, $ip)
    {
        $model = $this->findModel($uid, $ip);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uid' => $model->uid, 'ip' => $model->ip]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HbSessionModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $uid
     * @param string $ip
     * @return mixed
     */
    public function actionDelete($uid, $ip)
    {
        $this->findModel($uid, $ip)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HbSessionModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $uid
     * @param string $ip
     * @return HbSessionModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uid, $ip)
    {
        if (($model = HbSessionModel::findOne(['uid' => $uid, 'ip' => $ip])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
