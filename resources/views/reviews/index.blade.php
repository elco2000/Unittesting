@extends('layout')

@section('content')


    <div class="row">
    @foreach($reviews as $review)
<div class="col-md-4">
<h2>{{$review->title}}</h2>
<h4>Product: {{$review->product->name}}</h4>
<h4>User: {{$review->user->name}}</h4>
<p>{{$review->body}}</p>
<p>Rating: {{$review->rating}}</p>
    <a href="reviews/{{$review->id}}/edit"><button class="tablebutton" type="submit">Edit</button></a>
    {{ Form::open(array('url' => 'reviews/'.$review->id,  'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
    {{ Form::close() }}
</div>
    @endforeach
    </div>

@endsection
