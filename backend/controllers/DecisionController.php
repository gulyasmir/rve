<?php

namespace backend\controllers;

use Yii;
use backend\models\Decision;
use backend\models\DecisionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;

use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;
/**
 * DecisionController implements the CRUD actions for Decision model.
 */
class DecisionController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Decision models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DecisionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Decision model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Decision model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Decision();
        if ($model->load(Yii::$app->request->post())) {
            include "uploadfile.php";

                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
                }
              } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

    /**
     * Updates an existing Decision model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     public function actionUpdate($id)
     {
         $model = $this->findModel($id);

         if ($model->load(Yii::$app->request->post())) {
             include "uploadfile.php";

                 if ($model->save()) {
                     return $this->redirect(['view', 'id' => $model->id]);
                 } else {
                 return $this->render('update', [
                     'model' => $model,
                 ]);
                 }
               } else {
                 return $this->render('update', [
                     'model' => $model,
                 ]);
             }
         }

    /**
     * Deletes an existing Decision model.
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
     * Finds the Decision model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Decision the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Decision::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
