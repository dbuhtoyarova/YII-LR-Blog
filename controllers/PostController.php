<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{

    public function actionIndex()
    {
        $posts = Post::find()->limit(4)-> all();
        return $this->render('index', compact('posts'));
    }
}