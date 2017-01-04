

		 {!! Form::open(array('url'=>'restaurants/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Restaurants</legend>
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
										<label for="Address" class=" control-label col-md-4 text-left"> Address </label>
										<div class="col-md-7">
										  <input  type='text' name='address' id='address' value='{{ $row['address'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Phone" class=" control-label col-md-4 text-left"> Phone </label>
										<div class="col-md-7">
										  <input  type='text' name='phone' id='phone' value='{{ $row['phone'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
										<div class="col-md-7">
										  <input  type='text' name='Description' id='Description' value='{{ $row['Description'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Logo" class=" control-label col-md-4 text-left"> Logo </label>
										<div class="col-md-7">
										  <input  type='text' name='logo' id='logo' value='{{ $row['logo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Type" class=" control-label col-md-4 text-left"> Type </label>
										<div class="col-md-7">
										  <input  type='text' name='type' id='type' value='{{ $row['type'] }}' 
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
									  </div> {!! Form::hidden('updated_at', $row['updated_at']) !!}{!! Form::hidden('created_at', $row['created_at']) !!}</fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
