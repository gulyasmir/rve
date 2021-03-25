<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\Category;

use backend\models\ProductSearch;
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
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
     public function actionIndex()
     {
   //$category_id = $GET['category_id'];
     //  if (Yii::$app->request->get('category_id')) {
         $category_id = Yii::$app->request->get('category_id');
   //echo Yii::$app->request->get('category_id');
         $name_category = Category::find()->where(['id'=>$category_id])->one();
   //    }
         $searchModel = new ProductSearch();
         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         return $this->render('index', [
             'searchModel' => $searchModel,
             'dataProvider' => $dataProvider,
             'name_category' =>$name_category->title,
         ]);
     }
    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
       $model = $this->findModel($id);
       $category = Category::find()->where(['id'=> $model->id_category])->one();
       $title_category = $category ->title;
       $model->id_category = $title_category;

        return $this->render('view', [
            'model' =>  $model,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
     {
         $model = new Product();

         if ($model->load(Yii::$app->request->post())) {
                $model->img1 = '';
                $model->img2 = '';
                $model->img3 = '';
                $model->pdf1 = '';
                $model->pdf2 = '';

             include "uploadfiles_to_product.php";

             include "upload_pdf_to_product.php";

             include "uploadfiles_to_product_footer_img.php";

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
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     public function actionUpdate($id)
     {
         $model = $this->findModel($id);

         if ($model->load(Yii::$app->request->post())) {

             include "uploadfiles_to_product.php";
             include "upload_pdf_to_product.php";
             include "uploadfiles_to_product_footer_img.php";
             
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
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
