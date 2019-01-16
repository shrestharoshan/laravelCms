{{--//$error laravel backend error variable--}}
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="row alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

@if(session('Error'))
    <div class="row alert alert-danger">{{ session('Error') }}</div>
    @endif

@if(session('Success'))
    <div class="row alert alert-success" style="margin-bottom:0"> {{ session('Success') }}</div>
@endif
