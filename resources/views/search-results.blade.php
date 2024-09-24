@extends('layouts.app')

@section('content')

@if($results->isEmpty())

<p>No results found.</p>
@else
<ul>
    @foreach($results as $result)
    <li>{{ $result->name }}</li> <!-- Replace 'name' with your actual column -->
    @endforeach
</ul>
@endif
@endsection