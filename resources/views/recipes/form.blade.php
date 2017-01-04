@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
		</div>
		<div class="sbox-tools " >
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div> 

	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		 {!! Form::open(array('url'=>'recipes/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-6">
						<fieldset><legend> Recipes Details</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-7">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Courses" class=" control-label col-md-4 text-left"> Courses </label>
										<div class="col-md-7">
										  <select name='course_id[]' multiple rows='5' id='course_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Restaurants" class=" control-label col-md-4 text-left"> Restaurants </label>
										<div class="col-md-7">
										  <select name='restaurant_id' rows='5' id='restaurant_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Dish" class=" control-label col-md-4 text-left"> Dish </label>
										<div class="col-md-7">
										  <textarea name='dish' rows='5' id='dish' class='form-control '  
				           >{{ $row['dish'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Seasons" class=" control-label col-md-4 text-left"> Seasons </label>
										<div class="col-md-7">
										  
					<?php $seasons = explode(',',$row['seasons']);
					$seasons_opt = array( 'Spring' => 'Spring' , ); ?>
					<select name='seasons' rows='5'   class='select2 ' id='seasons'  > 
						<?php 
						foreach($seasons_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['seasons'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Main Ingredients" class=" control-label col-md-4 text-left"> Main Ingredients </label>
										<div class="col-md-7">
										  <select name='main_ingredients[]' multiple rows='5' id='main_ingredients' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prep Time" class=" control-label col-md-4 text-left"> Prep Time </label>
										<div class="col-md-7">
										  <input  type='text' name='prep_time' id='prep_time' value='{{ $row['prep_time'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Cooking Time" class=" control-label col-md-4 text-left"> Cooking Time </label>
										<div class="col-md-7">
										  <input  type='text' name='cooking_time' id='cooking_time' value='{{ $row['cooking_time'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-7">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}</fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Recipes Details</legend>
									
									  <div class="form-group  " >
										<label for="Cuisine" class=" control-label col-md-4 text-left"> Cuisine </label>
										<div class="col-md-7">
										  <select name='cuisine[]' multiple rows='5' id='cuisine' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Technique" class=" control-label col-md-4 text-left"> Technique </label>
										<div class="col-md-7">
										  <select name='technique[]' multiple rows='5' id='technique' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Cooking Style" class=" control-label col-md-4 text-left"> Cooking Style </label>
										<div class="col-md-7">
										  <select name='cooking_style[]' multiple rows='5' id='cooking_style' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nutrition" class=" control-label col-md-4 text-left"> Nutrition </label>
										<div class="col-md-7">
										  <select name='nutrition[]' multiple rows='5' id='nutrition' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Chef" class=" control-label col-md-4 text-left"> Chef </label>
										<div class="col-md-7">
										  <input  type='text' name='chef' id='chef' value='{{ $row['chef'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Show Episode" class=" control-label col-md-4 text-left"> Show Episode </label>
										<div class="col-md-7">
										  <input  type='text' name='show_episode' id='show_episode' value='{{ $row['show_episode'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Level" class=" control-label col-md-4 text-left"> Level </label>
										<div class="col-md-7">
										  <input  type='text' name='level' id='level' value='{{ $row['level'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Serving" class=" control-label col-md-4 text-left"> Serving </label>
										<div class="col-md-7">
										  
					<?php $serving = explode(',',$row['serving']);
					$serving_opt = array( '1' => '1' ,  '2' => '2' , ); ?>
					<select name='serving' rows='5'   class='select2 ' id='serving'  > 
						<?php 
						foreach($serving_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['serving'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prepration" class=" control-label col-md-4 text-left"> Prepration </label>
										<div class="col-md-7">
										  <textarea name='prepration' rows='5' id='prepration' class='form-control '  
				           >{{ $row['prepration'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Cooking" class=" control-label col-md-4 text-left"> Cooking </label>
										<div class="col-md-7">
										  <textarea name='cooking' rows='5' id='cooking' class='form-control '  
				           >{{ $row['cooking'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Images" class=" control-label col-md-4 text-left"> Images </label>
										<div class="col-md-7">
										  <input  type='file' name='images' id='images' @if($row['images'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['images'],'/uploads/images/') !!}
						
						</div>					
					 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nutritional Analysis" class=" control-label col-md-4 text-left"> Nutritional Analysis </label>
										<div class="col-md-7">
										  <textarea name='nutritional_analysis' rows='5' id='nutritional_analysis' class='form-control '  
				           >{{ $row['nutritional_analysis'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('recipes?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#course_id").jCombo("{!! url('recipes/comboselect?filter=tb_course:id:name') !!}",
		{  selected_value : '{{ $row["course_id"] }}' });
		
		$("#restaurant_id").jCombo("{!! url('recipes/comboselect?filter=tb_restaurants:id:name') !!}",
		{  selected_value : '{{ $row["restaurant_id"] }}' });
		
		$("#main_ingredients").jCombo("{!! url('recipes/comboselect?filter=tb_ingredients:id:name') !!}",
		{  selected_value : '{{ $row["main_ingredients"] }}' });
		
		$("#cuisine").jCombo("{!! url('recipes/comboselect?filter=tb_cuisine:id:name') !!}",
		{  selected_value : '{{ $row["cuisine"] }}' });
		
		$("#technique").jCombo("{!! url('recipes/comboselect?filter=tb_technique:id:name') !!}",
		{  selected_value : '{{ $row["technique"] }}' });
		
		$("#cooking_style").jCombo("{!! url('recipes/comboselect?filter=tb_cookingstyle:id:name') !!}",
		{  selected_value : '{{ $row["cooking_style"] }}' });
		
		$("#nutrition").jCombo("{!! url('recipes/comboselect?filter=tb_nutrition:id:name') !!}",
		{  selected_value : '{{ $row["nutrition"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("recipes/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop