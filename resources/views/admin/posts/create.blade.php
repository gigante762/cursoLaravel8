
<h1>Criar post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif
<form action="{{route('posts.store')}}" method="post">
    @method('POST')
    @csrf
    <input type="text" name="title" id="title" placeholder='Título' value='{{old('title')}}'>
    <textarea name="content" id="content" cols="30" rows="10" > {{old('content')}} </textarea>

    <button type="submit">Criar</button>
</form>