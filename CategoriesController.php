<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Categories ;
use yii\filters\AccessControl ;

class CategoriesController extends Controller {
    
    public function actionIndex() {
        
       $categories = Categories::find()->all() ;   
        
       return $this->render('index', ['categories' => $categories]) ;
    }
    
    public function actionView($id) {
        
        $categories = Categories::findOne(['id' => $id]) ;
        return $this->render('view', ['categories' => $categories]) ;
    }
    
    public function actionSearch() {
        
        return $this->render('_search') ;
        
    }
    
    // First way of limiting pages access using AccessControl
    public function behaviors() {
        
        return [
           'access' => [
               'class' =>AccessControl::className(),
               'only' => ['view'], // If we want to add AccessControl only to a specific page!
               // 'except' => ['view'], // If we want to add AccessControl to every page that's connected to the controller -EXCEPT- the given one which in our case is 'view'!
               'rules' =>[
                   [
                   'allow' => true ,
                   'roles' => ['@'],
                    ]
                ]
            ]
        ] ;
    }
    
    // First way of limiting pages access using AccessControl
    public function actionView($id) {
        
        if (\Yii::$app->user->isGuest) {
            return $this->redirect(['/site/login'])
        }
    }
    
    

    
    
    
} // End

?>