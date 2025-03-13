
  <form method="GET" action="{{ url('/posts') }}">
        @csrf
        <input type="text" name="get_input" placeholder="GET">
        <button type="submit">Yuborish</button>
    </form>
    <form method="POST" action="{{ url('/posts/create') }}">
        @csrf
        <input type="text" name="post_input" placeholder="POST">
        <button type="submit">Yuborish</button>
    </form>
    <form method="POST" action="{{ url('/posts/delete') }}">
        @csrf
        @method('DELETE')
        <input type="text" name="delete_input" placeholder="DELETE">
        <button type="submit">Yuborish</button>
    </form>
    <form method="POST" action="{{ url('/posts/edit') }}">
        @csrf
        @method('PATCH')
        <input type="text" name="patch_input" placeholder="PATCH">
        <button type="submit">Yuborish</button>
    </form>
    <form method="POST" action="{{ url('/posts/pu/edit') }}">
        @csrf
        @method('PUT')
        <input type="text" name="put_input" placeholder="PUT>
        <button type="submit">Yuborish</button>
    </form>



