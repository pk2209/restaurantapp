<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class technique extends Sximo  {
	
	protected $table = 'tb_technique';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_technique.* FROM tb_technique  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_technique.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
