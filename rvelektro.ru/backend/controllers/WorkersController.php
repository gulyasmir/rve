<?php

namespace backend\controllers;

use Yii;
use backend\models\Workers;
use backend\models\WorkersSearch;
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
 * WorkersController implements the CRUD actions for Workers model.
 */
class WorkersController extends Controller
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
     * Lists all Workers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WorkersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Workers model.
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
     * Creates a new Workers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Workers();
        if ($model->load(Yii::$app->request->post())) {
            include "uploadonefile.php";

                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                return $this->render('create', [
                    'model' => $model,
                    'iii'=>'не сохранилось'
                ]);
                }
              } else {
                return $this->render('create', [
                    'model' => $model,
                      'iii'=>'не загрузилось'
                ]);
            }
        }



    /**
     * Updates an existing Workers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     public function actionUpdate($id)
     {
         $model = $this->findModel($id);

         if ($model->load(Yii::$app->request->post())) {
             include "uploadonefile.php";

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
     * Deletes an existing Workers model.
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
     * Finds the Workers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Workers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Workers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
