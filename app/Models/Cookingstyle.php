<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class cookingstyle extends Sximo  {
	
	protected $table = 'tb_cookingstyle';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_cookingstyle.* FROM tb_cookingstyle  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_cookingstyle.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
