<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\data\Pagination;
use yii\helpers\Html;

use frontend\models\CallbackForm;
use frontend\models\Callback;
use frontend\models\SearchForm;

use frontend\models\About;
use frontend\models\Blog;

use frontend\models\Category;
use frontend\models\Contact;
use frontend\models\ContactShops;
use frontend\models\Decision;
use frontend\models\Index;
use frontend\models\Product;
use frontend\models\Options;
use frontend\models\Proect;
use frontend\models\Workers;
use frontend\models\ServisArticles;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

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
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
   	{

   		$modelsearch = new SearchForm();
   		if ($modelsearch->load(Yii::$app->request->post()) && $modelsearch->validate())
   		{
   			$q = $modelsearch->q;
   			return $this->redirect(Yii::$app->urlManager->createUrl(['site/search', 'q' => $q]));
      }

      $modelcallback = new CallbackForm();

      if ($modelcallback->load(Yii::$app->request->post()) && $modelcallback->validate()) {

          if ($modelcallback->sendEmail(Yii::$app->params['adminEmail'])) {
              Yii::$app->session->setFlash('success', 'Спасибо, '.$modelcallback->name.'! Мы свяжемся с Вами в ближайшее время.');
              $modelcallback->date = time();

             return $this->render('result');
          } else {
              Yii::$app->session->setFlash('error', 'Что-то пошло не так (((');
          }
      }

   		return true;
   }

   public function actionSearch()
   	{
   		$q = Yii::$app->request->post('q');

   		$query= Product::find()->where([ 'or',['like', 'title', $q],['like', 'text', $q], ['like', 'tags', $q]]);
   		$pagination = new Pagination([
   			'defaultPageSize' => 12,
   			'totalCount' => $query->count()
   		]);


   		$resultsearch  = $query->offset($pagination->offset)
   			->limit($pagination->limit)
   			->all();

           return $this->render('search', [
   			'resultsearch' =>$resultsearch ,
   			'q' => $q,
   			'active_page' => Yii::$app->request->get("page", 1),
   			'count_pages' => $pagination->getPageCount(),
   			'pagination' => $pagination,
        'modelcallback' => $modelcallback,
   		]);
   	}
    public function actionResult()
     {
       $name = Yii::$app->request->post('name');
       $customemail = Yii::$app->request->post('email');

       $newcallback = new Callback();
       $newcallback->name = $name ;
       $newcallback->customemail = $customemail ;
        $newcallback->comment = ' ' ;
       $newcallback->date = time();
       $newcallback->processed = 0;
       $newcallback->save();

            return $this->render('result', [
         'name' =>$name ,
         'customemail' =>$customemail ,
       ]);
     }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

       $query = Index::find()->one();

       $products = Product::find()->where(['to_index'=>'1'])->orderBy('sort_order')->all();
       $proects = Proect::find()->where(['to_index'=>'1'])->orderBy('sort_order')->all();
       $blogs = Blog::find()->orderBy(['public_date' => SORT_DESC])->limit('3')->all();

        return $this->render('index', [
          'modelcallback' => $modelcallback,
          'query'=>$query,
            'products'=> $products,
            'proects' => $proects,
            'blogs'=> $blogs,
        ]);
    }

    public function actionServisArticle($id)
    {
       $servis_article = ServisArticles::find()->where(['id'=>$id])->one();

        return $this->render('servis_article', [
          'servis_article' => $servis_article,
        ]);
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
  //  public function actionLogout()
//    {
//        Yii::$app->user->logout();

//        return $this->goHome();
//    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
       $query = Contact::find()->one();
      $shops = ContactShops::find()->all();

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Спасибо за обращение! Мы свяжемся с Вами в ближайшее время');
            } else {
                Yii::$app->session->setFlash('error', 'Неправильный email');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
                'query' => $query,
                'shops' => $shops,
                'modelcallback' => $modelcallback,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
	     $query = About::find()->one();
       $workers = Workers::find()->orderBy('sort_order')->all();

       return $this->render('about', [
            'query' => $query,
            'workers' =>  $workers,
            'modelcallback' => $modelcallback,
        ]);
    }

    public function actionBlog()
    {
       $query = Blog::find();

       $pagination = new Pagination([
     			'defaultPageSize' =>18,
     			'totalCount' => $query->count()
     		]);
     		$blogs = $query->orderBy(['public_date' => SORT_DESC])
     			->offset($pagination->offset)
     			->limit($pagination->limit)
     			->all();

        return $this->render('blog', [
             'query' => $blogs,
             'string' =>$string,
             'count_pages' => $pagination->getPageCount(),
             'pagination' => $pagination,
             'modelcallback' => $modelcallback,
         ]);
    }


    public function actionArticle($id)
    {
	     $query = Blog::find()->where(['id'=>$id])->one();

       return $this->render('article', [
           'query' => $query,
           'modelcallback' => $modelcallback,
       ]);
    }


    public function actionProects()
    {
      $query = Proect::find();

      $pagination = new Pagination([
         'defaultPageSize' =>18,
         'totalCount' => $query->count()
       ]);
       $proects = $query->orderBy(['sort_order' => SORT_ASC])
         ->offset($pagination->offset)
         ->limit($pagination->limit)
         ->all();

       return $this->render('proects', [
            'proects' => $proects,
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination,
            'modelcallback' => $modelcallback,
        ]);
    }


    public function actionProect($id)
    {
      $query = Proect::find()->where(['id'=>$id])->one();

        return $this->render('proect', [
             'query' => $query,
             'modelcallback' => $modelcallback,
         ]);

    }


    public function actionDecisions()
    {

        $query = Decision::find();

        $pagination = new Pagination([
           'defaultPageSize' =>12,
           'totalCount' => $query->count()
         ]);
         $decisions = $query->orderBy(['sort_order' => SORT_ASC])
           ->offset($pagination->offset)
           ->limit($pagination->limit)
           ->all();

         return $this->render('decisions', [
              'query' => $decisions,
              'count_pages' => $pagination->getPageCount(),
              'pagination' => $pagination,
              'modelcallback' => $modelcallback,
          ]);
    }


    public function actionDecision($id)
    {
        $query = Decision::find()->where(['id'=>$id])->one();

          return $this->render('decision', [
               'query' => $query,
               'modelcallback' => $modelcallback,
           ]);

    }


    public function actionProduct($id)
    {

        $query = Product::find()->where(['id'=>$id])->one();
        $options = Options::find()->where(['id_product'=>$id])->all();

        $category = Category::find()->where(['id'=>$query->id_category])->one();
        $parent_category = Category::find()->where(['id'=>$category->parent_id])->one();
        $main_parent_category = Category::find()->where(['id'=>$parent_category->parent_id])->one();
        return $this->render('product', [
             'query' => $query,
             'options' =>$options,
             'modelcallback' => $modelcallback,
               'main_parent_category'=>$main_parent_category,
                'parent_category'=>$parent_category,
                 'category'=>$category,
         ]);
    }


    public function actionCategory($id)
    {
      $query = Category::find()->where(['id'=>$id])->one();
      $parent_category = Category::find()->where(['id'=>$query->parent_id])->one();
      $main_parent_category = Category::find()->where(['id'=>$parent_category->parent_id])->one();


      $podcats = Category::find()->where(['parent_id'=>$id])->orderBy(['sort_order' => SORT_ASC])->all();
      $array_products = array();
      foreach ($podcats as $podcat) {
        $array_products[] = Product::find()->where(['id_category'=>$podcat->id])->orderBy(['sort_order' => SORT_ASC])->all();
      }


if ($query->parent_id == '0'){
 $podcats_1 = array();
  foreach ($podcats as $podcat) {
        $podcats_1[] = Category::find()->where(['parent_id'=>$podcat->id])->all();

  }
  return $this->render('main_category', [
    'query'=>$query,
    'parent_category'=>$parent_category,
    'main_parent_category'=>$main_parent_category,
       'array_products' => $array_products,
      'podcats'=>$podcats,
    'podcats_1'=>$podcats_1,
       'modelcallback' => $modelcallback,
   ]);
} else {
  return $this->render('category', [
    'query'=>$query,
      'parent_category'=>$parent_category,
    'main_parent_category'=>$main_parent_category,
       'array_products' => $array_products,
      'podcats'=>$podcats,
       'modelcallback' => $modelcallback,
   ]);
 }
}

    /*
        public function actionCategory($id)
        {
          $query = Category::find()->where(['id'=>$id])->one();
          $queryproducts = Product::find()->where(['id_category'=>$id]);

          $pagination = new Pagination([
             'defaultPageSize' =>18,
             'totalCount' => $query->count()
           ]);
           $products = $queryproducts->orderBy(['sort_order' => SORT_ASC])
             ->offset($pagination->offset)
             ->limit($pagination->limit)
             ->all();

          return $this->render('category', [
               'query' => $query,
               'products' => $products,
               'count_pages' => $pagination->getPageCount(),
               'pagination' => $pagination,
           ]);

        }
*/

    /**
     * Signs user up.
     *
     * @return mixed
     */
/*    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
            'modelcallback' => $modelcallback,
        ]);
    }
*/
    /**
     * Requests password reset.
     *
     * @return mixed
     */
  /*  public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
            'modelcallback' => $modelcallback,
        ]);
    }
*/
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
