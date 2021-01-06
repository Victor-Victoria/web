<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Order;
use app\modules\v1\models\Product;
use app\modules\v1\models\User;
use yii\web\NotFoundHttpException;
use Yii;

class OrderController extends ApiController {

    public function actionAll() {
        return Order::find()->all();
    }

    public function actionId($id) {
        return Order::findOne(['id' => $id]);
    }

    public function actionuserId($userId) {
        return Order::findAll(['userId' => $userId]);
    }

    public function actionproductId($productId) {
        return Order::findAll(['productId' => $productId]);
    }

    public function actionCreate() {
        $data = \Yii::$app->request->getBodyParams();
        $order = new Order();
        $order->load($data, '');
        $order->save();
        return $order;
    }

    public function actionDelete() {
        $order = Order::findOne(['userId' => Yii::$app->request->post('userId'),'productId' => Yii::$app->request->post('productId')]);
        return $order->delete();
    }
}