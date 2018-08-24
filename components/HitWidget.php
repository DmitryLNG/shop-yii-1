<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Product;
use Yii;

/**
 * Description of HitWidget
 *
 * @author dmitry
 */
class HitWidget extends Widget {
    public function run () {
        $hits = Yii::$app->cache->get('hits');
        if ($hits) return $hits;
        
        $this->data = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        $this->tree = $this->getTree();
        $menuHtml = $this->getMenuHtml($this->tree);
        
        Yii::$app->cache->set('hits', $this->menuHtml, 60);
        return $menuHtml;
    }
    
    protected function catToTemplate($category) {
        //$category[]->name;
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        //debug($category);
        return ob_get_clean();
    }
}

