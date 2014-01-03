@if (Auth::check())
    @if ($favorited = in_array($post->id, $favorites))
        {{ Form::open(['method' => 'DELETE', 'route' => ['favorites.destroy', $post->id]]) }}
    @else
        {{ Form::open(['route' => 'favorites.store']) }}
        {{ Form::hidden('post-id', $post->id) }}
    @endif

    <button type="submit">
        <i class="icon-heart {{ $favorited ? 'favorited' : 'not-favorited' }}"></i>
    </button>

    {{ Form::close() }}
@endif
