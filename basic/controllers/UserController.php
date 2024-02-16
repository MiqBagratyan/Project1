<?php

namespace app\controllers;

use app\models\RegistrationForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use \yii\helpers\Url;
use app\models\User;

class UserController extends Controller
{
    public function actionRegister()
    {
        $model = new RegistrationForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Save user data to the database (you need to implement this)
            return $this->redirect(['user/login']);
        }

        return $this->render('register', ['model' => $model]);
    }
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // Login successful, redirect to home page or another action
            return $this->goHome();
        }

        return $this->render('login', ['model' => $model]);
    }
    // Other actions (login, logout, etc.) go here
}