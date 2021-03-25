<?php

namespace backend\controllers;

use Yii;
use backend\models\Proect;
use backend\models\ProectSearch;
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
 * ProectController implements the CRUD actions for Proect model.
 */
class ProectController extends Controller
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
     * Lists all Proect models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proect model.
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
     * Creates a new Proect model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proect();

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
     * Updates an existing Proect model.
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
     * Deletes an existing Proect model.
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
     * Finds the Proect model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proect the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proect::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
