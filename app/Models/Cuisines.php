<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class cuisines extends Sximo  {
	
	protected $table = 'tb_cuisine';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_cuisine.* FROM tb_cuisine  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_cuisine.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
