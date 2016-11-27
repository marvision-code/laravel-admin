@extends(config('admin_data.layout').'.main')

@section('content')
	<h1>{{trans('adminLang::lib.dashboard')}}</h1>
	<p>{{trans('adminLang::lib.dash_welcome')}} <br> <i>Marvision Laravel Admin Package</i></p>
@endsection