<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuWidget
 *
 * @author dmitry
 */
namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Category;
use Yii;

class MenuWidget extends Widget {
    
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
    
    
    public function run () {
        $menu = Yii::$app->cache->get('menu');
        if ($menu) return $menu;
        
        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $menuHtml = $this->getMenuHtml($this->tree);
        
        Yii::$app->cache->set('menu', $this->menuHtml, 60);
        return $menuHtml;
    }
    public function getTree() {
        $tree = [];
        foreach($this->data as $id=>&$node) {
            if ($node['parent_id']=='0') {
                $tree[$id] = &$node;
            }
            else {
                if (array_key_exists($node['parent_id'],$tree)) {
                    $tree[$node['parent_id']]['child'][$node['id']]=&$node;
                }
                $this->data[$node['parent_id']]['child'][$node['id']]=&$node; 
            }
        }
        return $tree;      
    }
    public function getMenuHtml($tree) {
        $str = '';
        //debug($tree);
        foreach($tree as $category) {
            $str .= $this->catToTemplate($category);
        }
        return $str;        
    }
    protected function catToTemplate($category) {
        //$category[]->name;
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        //debug($category);
        return ob_get_clean();
    }
}
