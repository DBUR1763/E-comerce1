@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Productt Detail') }}
 </div>
 <div class="card-body">
 id : {{ $Productt->id }}
 <br>
 Productts : {{ $Productt->name }}
 <br>
 unit : {{ $Productt->unit }}
 <br>
 price : {{ $Productt->price }}
 <br>
 quantity : {{ $Productt->quantity }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Productt/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection