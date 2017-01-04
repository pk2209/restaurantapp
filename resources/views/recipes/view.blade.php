@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('recipes?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('recipes/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('recipes/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('recipes/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Name</td>
						<td>{{ $row->name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Course Id</td>
						<td>{!! SiteHelpers::formatRows($row->course_id,$fields['course_id'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Restaurant Id</td>
						<td>{{ $row->restaurant_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dish</td>
						<td>{{ $row->dish}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Main Ingredients</td>
						<td>{!! SiteHelpers::formatRows($row->main_ingredients,$fields['main_ingredients'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prep Time</td>
						<td>{{ $row->prep_time}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cooking Time</td>
						<td>{{ $row->cooking_time}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Technique</td>
						<td>{{ $row->technique}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cuisine</td>
						<td>{{ $row->cuisine}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cooking Style</td>
						<td>{{ $row->cooking_style}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nutrition</td>
						<td>{{ $row->nutrition}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seasons</td>
						<td>{{ $row->seasons}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Chef</td>
						<td>{{ $row->chef}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nutritional Analysis</td>
						<td>{{ $row->nutritional_analysis}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Show Episode</td>
						<td>{{ $row->show_episode}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prepration</td>
						<td>{{ $row->prepration}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cooking</td>
						<td>{{ $row->cooking}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Serving</td>
						<td>{{ $row->serving}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Level</td>
						<td>{{ $row->level}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Images</td>
						<td>{{ $row->images}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Created At</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Updated At</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop