<form action="" method="POST">
    @csrf
    <ul>
        @foreach ($errors->all() as $message)
            <li>
                {{ $message }}
            </li>
        @endforeach
    </ul>
    Створення статті
    <input name="title" placeholder="Заголовок">
    <input name="text" placeholder="Зміст">
    <input type="submit">
</form>
