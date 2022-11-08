@extends('layouts.admin')
	@section('content')
		@include('alerts.success')
		@include('alerts.act_art')
		@include('alerts.request')
		@include('alerts.validacion')
		@include('modal.modal_elim')
		@include('pinturas.modal_paint')
		@include('pinturas.form.index')
	@endsection
    @section('scripts')
    	{!!Html::script('asset/js/script2.js')!!}
        {!!Html::script('asset/js/buscar.js')!!}
        {!!Html::script('asset/js/jquery.uitablefilter.js')!!}
    @endsection