@extends('layouts.base')
@section('body')
{{ Form::open(array('action' => 'FormController@store')) }}
<div class="form-group">
{{ Form::text(
			'name', 
			 null, 
			['class' => 'form-control', 'placeholder' => trans('lang.name')]
	    )
}}
</div>
<div class="form-group">
{{ Form::text(
			   'display_name', 
				null, 
			    ['class' => 'form-control', 'placeholder' => trans('lang.display_name')]
			  ) 
}}
</div>
<div class="form-group status-post-submit">
{{ Form::submit(
			trans('lang.submit'), 
			['class' => 'btn btn-primary', 'id' => 'user-edit-submit' ]
			) 
}}
</div>
{{ Form::close() }}
@stop