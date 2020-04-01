<?php


namespace app\controllers;

use app\models\UserRecord;
use app\models\UserJoinForm;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        if(Yii::$app->request->isPost){
            return $this->actionJoinPost();
        } else {
            $userJoinForm = new UserJoinForm();
            $userRecord = new UserRecord;
            $userRecord->setTestUser();
            $userJoinForm->setUserRecord($userRecord);
            return $this->render('join',
            compact('userJoinForm'));
        }
    }
    
    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
       if ( $userJoinForm->load(Yii::$app->request->post())){
           if ($userJoinForm->validate()){
               $userJoinForm->name .= " ok";
           }
       }
        return $this->render('join', compact('userJoinForm'));
    }
    
    public function actionLogin()
    {
//        $uid = UserIdentity::findIdentity(1);
//        Yii::$app->user->login($uid);
        return $this->render('login');
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/');
    }
}
