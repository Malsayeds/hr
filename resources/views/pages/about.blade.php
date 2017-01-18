
@extends('layout')

@section('content')

		@unless ($pepole)

		this is part time 

		@endunless



		@foreach ($pepole as $p)
		@if ($p == 'a')
		  this is first 
		 @elseif ($p == 'b')
		 this is the second
		 @else 
		 This is the third option
		 @endif



		@endforeach

@stop