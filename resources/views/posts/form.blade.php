<form method="GET" action="{{ route('posts.index') }}">
    @csrf
    <input type="text" name="get_input" placeholder="GET">
    <button type="submit">Yuborish</button>
</form>
<form method="POST" action="{{ route('posts.create') }}">
    @csrf
    <input type="text" name="post_input" placeholder="POST">
    <button type="submit">Yuborish</button>
</form>
<form method="POST" action="{{ route('posts.delete') }}">
    @csrf
    @method('DELETE')
    <input type="text" name="delete_input" placeholder="DELETE">
    <button type="submit">Yuborish</button>
</form>
<form method="POST" action="{{ route('posts.edit') }}">
    @csrf
    @method('PATCH')
    <input type="text" name="patch_input" placeholder="PATCH">
    <button type="submit">Yuborish</button>
</form>
<form method="POST" action="{{ route('posts.update') }}">
    @csrf
    @method('PUT')
    <input type="text" name="put_input" placeholder="PUT">
    <button type="submit">Yuborish</button>
</form>
