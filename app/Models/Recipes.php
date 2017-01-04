<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class recipes extends Sximo  {
	
	protected $table = 'tb_recipes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_recipes.* FROM tb_recipes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_recipes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
