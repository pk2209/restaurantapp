<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class nutritions extends Sximo  {
	
	protected $table = 'tb_nutrition';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_nutrition.* FROM tb_nutrition  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_nutrition.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
