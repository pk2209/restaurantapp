<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class course extends Sximo  {
	
	protected $table = 'tb_course';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_course.* FROM tb_course  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_course.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
