<?php

namespace app\modules\v1\controllers;

class ProductController extends ApiController
{
    public function actionHome()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Боди без рукавов с открытой спиной',
                'url' => 'боди-без-рукавов-с-открытой-спиной',
                'image' => 'images/t6.jpg',
                'price' => 7000
            ],
            [
                'id' => 2,
                'name' => 'Боди с открытой спиной',
                'url' => 'боди-с-открытой-спиной',
                'image' => 'images/t2_1.jpg',
                'price' => 7800
            ],
            [
                'id' => 3,
                'name' => 'Укороченное худи Amour Sport',
                'url' => 'укороченное-худи-amour-sport',
                'image' => 'images/t8_1.jpg',
                'price' => 7500
            ]
        ];

        return $products;
    }

    public function actionCatalog()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Боди без рукавов с открытой спиной',
                'image' => 'images/t6.jpg',
                'url' => 'боди-без-рукавов-с-открытой-спиной',
                'price' => 7000
            ],
            [
                'id' => 2,
                'name' => 'Боди с открытой спиной',
                'image' => 'images/t2_1.jpg',
                'url' => 'боди-с-открытой-спиной',
                'price' => 7800
            ],
            [
                'id' => 3,
                'name' => 'Укороченное худи Amour Sport',
                'image' => 'images/t8_1.jpg',
                'url' => 'укороченное-худи-amour-sport',
                'price' => 7500
            ],
            [
                'id' => 4,
                'name' => 'Облегающие кожаные брюки',
                'image' => 'images/t_13.jpg',
                'url' => 'облегающие-кожаные-брюки',
                'price' => 17500
            ],
            [
                'id' => 5,
                'name' => 'Меланжевый топ на молнии',
                'image' => 'images/t_11.jpg',
                'url' => 'меланжевый-топ-на-молнии',
                'price' => 6000
            ],
            [
                'id' => 6,
                'name' => 'Укороченное худи Amour Sport',
                'image' => 'images/t_10.jpg',
                'url' => 'укороченное-худи-amour-sport',
                'price' => 7500
            ]
        ];

        return $products;
    }

}