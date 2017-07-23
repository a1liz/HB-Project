<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\HbArticle;
use common\models\HbArticleSearch;
use common\models\LoginForm;
use yii\web\NotFoundHttpException;


/**
 * Site controller
 */
class SiteController extends Controller
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HbArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderpartial('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionView($id)
    {
        return $this->renderpartial('view', [
            'model' => $this->findaModel($id),
        ]);
    }
    public function actionYao()
    {
        return $this->renderpartial('yao', [
            'model' => $this->findaModel('15'),
        ]);
    }

    public function actionWang()
    {
        return $this->renderpartial('wang', [
            'model' => $this->findaModel('17'),
        ]);
    }

    public function actionDuan()
    {
        return $this->renderpartial('duan', [
            'model' => $this->findaModel('18'),
        ]);
    }

    public function actionZhang()
    {
        return $this->renderpartial('zhang', [
            'model' => $this->findaModel('19'),
        ]);
    }


    public function actionAcreate()
    {
        $model = new HbArticle();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->aid]);
        } else {
            return $this->renderpartial('acreate', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findaModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->aid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HbArticle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findaModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HbArticle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HbArticle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findaModel($id)
    {
        if (($model = HbArticle::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
