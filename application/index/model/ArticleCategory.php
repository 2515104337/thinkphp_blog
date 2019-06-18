<?php

namespace app\index\model;
use  think\Model;
// use  think\Db;
class ArticleCategory extends Model {
	public function categories() {
		$data = $this->where('status', '1')->order('sort asc, id asc')->select()->toArray();
		return $data;
	}
}