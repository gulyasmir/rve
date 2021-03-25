<?php

namespace backend\controllers;

use Yii;
use backend\models\Options;
use backend\models\OptionsSearch;

use backend\models\Product;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OptionsController implements the CRUD actions for Options model.
 */
class OptionsController extends Controller
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
     * Lists all Options models.
     * @return mixed
     */
    public function actionIndex($id_product)
    {
      $product = Product::find()->where(['id'=>$id_product])->one();
      $title_product = $product->title;

        $searchModel = new OptionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id_product);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id_product'=>$id_product,
            'title_product' =>$title_product,
        ]);
    }

    /**
     * Displays a single Options model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
      $model = $this->findModel($id);

      $product = Product::find()->where(['id'=>$model->id_product])->one();
      $title_product = $product->title;

        return $this->render('view', [
            'model' =>$model,
            'title_product' =>$title_product,
            'id_product'=>$product->id,
        ]);
    }

    /**
     * Creates a new Options model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id_product)
    {
        $model = new Options();

        $product = Product::find()->where(['id'=>$id_product])->one();
        $title_product = $product->title;

  if ($model->load(Yii::$app->request->post())) {

  $model->id_product = $id_product;

      include "uploadfiles_to_option.php";

          if ($model->save()) {
              return $this->redirect(['view', 'id' => $model->id]);
          } else {
          return $this->render('create', [
              'model' => $model,
              'id_product'=>$id_product,
              'title_product'=>$title_product,
          ]);
          }
        }  else {
            return $this->render('create', [
                'model' => $model,
                'id_product'=>$id_product,
                'title_product'=>$title_product,
            ]);
        }
    }

    /**
     * Updates an existing Options model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     public function actionUpdate($id)
     {
       $model = $this->findModel($id);

       $product = Product::find()->where(['id'=>$model->id_product])->one();
       $title_product = $product->title;

         if ($model->load(Yii::$app->request->post())) {

             include "uploadfiles_to_option.php";

                 if ($model->save()) {
                     return $this->redirect(['view', 'id' => $model->id]);
                 } else {
                 return $this->render('update', [
                     'model' => $model,
                      'title_product'=>$title_product,
                      'id_product'=>$product->id,
                 ]);
                 }
               } else {
                 return $this->render('update', [
                     'model' => $model,
                      'title_product'=>$title_product,
                        'id_product'=>$product->id,
                 ]);
             }
         }

    /**
     * Deletes an existing Options model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $id_product = $model->id_product;
        $this->findModel($id)->delete();

        return $this->redirect(['index', 'id_product'=>$id_product]);
    }

    /**
     * Finds the Options model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Options the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Options::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
