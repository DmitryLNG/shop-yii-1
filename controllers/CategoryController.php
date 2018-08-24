<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Product;
use app\models\Category;
use yii\data\Pagination;
/**
 * Description of CategoryController
 *
 * @author dmitry
 */
class CategoryController extends AppController {
    public function actionIndex() {
        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        return $this->render('index', compact('hits')); 
    }
    public function actionProducts() {
        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        return $this->render('products', compact('hits'));
    }
    public function actionView($id) {
        //$products = Product::find()->where(['category_id' => $id])->all();
        //return $this->render('products', compact('products'));
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        
        return $this->render('products', compact('products','pages','category'));
    }
        
}
