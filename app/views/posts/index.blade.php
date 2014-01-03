@extends('layout')

@section('container')
    @if ($posts->count())
        @foreach(array_chunk($posts->all(), 4) as $row)
            <div class="row">
                @foreach($row as $post)
                    @include ('posts/_post')
                @endforeach
            </div>
        @endforeach
    @else
        <p>No posts returned.</p>
    @endif
@stop