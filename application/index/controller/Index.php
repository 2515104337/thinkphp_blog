<?php
/*
*2019.6.10
*/
namespace app\index\controller;
use app\index\model\ArticleCategory;
use app\index\model\Article;

class Index extends \think\Controller
{
    public function index() {
    	//获取文章分类
    	$cate_model = new ArticleCategory();
    	$categories = $cate_model->categories();
        $article_model = new Article();
    	$this->assign('categories', $categories);

        return $this->fetch();
    }    
}
