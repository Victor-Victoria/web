<?php

namespace app\modules\v1\controllers;

class PageController extends ApiController
{
    public function actionDelivery()
    {
        return [
            'id' => 1,
            'name' => 'Доставка и оплата',
            'text' => 'Информация отсутствует'
        ];
    }

    public function actionContact()
    {
        return [
            'id' => 2,
            'name' => 'Контакты',
            'text' => 'Информация отсутствует'
        ];
    }
}