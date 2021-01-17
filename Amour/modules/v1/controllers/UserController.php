<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\LoginForm;
use app\modules\v1\models\User;
// use yii\db\ActiveRecord;
use yii\rest\Controller;
use yii\db\Exception;
use yii\web\NotAcceptableHttpException;
use Yii;

class UserController extends ApiController
{
    public function actionLogin()
    {
        $form = new LoginForm();
        $form->load(\Yii::$app->request->getBodyParams(), '');
        $email = Yii::$app->request->getBodyParam('email');
        $password = Yii::$app->request->getBodyParam('password');

        $form = User::find()
            ->where(['email' => $email])
            ->one();

        if ($form != null or $form != ''){
            if ($form->checkPass($password))
                return $form->getUser();
            }
        throw new NotAcceptableHttpException('Неверный логин или пароль!'); //406

        return $form;
    }

    public function actionRegistration() {
        $data = \Yii::$app->request->getBodyParams();
        if (User::find()
                ->where(['email' => $data['email']])
                ->one() != null){
            throw new NotAcceptableHttpException('Email занят!');   //406
        }

        $user = new User();
        $user->load($data, '');
        $user->save();
        return $user;
    }
}