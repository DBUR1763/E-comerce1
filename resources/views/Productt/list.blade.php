@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('Productt/register') }}" role="button"> {{ __('New Productt') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Productts List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>
<th>
 unit
 </th>
 <th>
 price
 </th>
 <th>
 quantity
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($Productt as $Productt)
 <tr>
 <td> {{ $Productt->id }}</td>
 <td> {{ $Productt->name }}</td>
 <td> {{ $Productt->unit }}</td>
 <td> {{ $Productt->price }}</td>
 <td> {{ $Productt->quantity}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Productt/search/{{ $Productt->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Productt/edit/{{$Productt->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/Productt/delete/{{ $Productt->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection