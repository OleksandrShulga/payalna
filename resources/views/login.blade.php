<form action="" method="POST">
    @csrf
    <ul>
        @foreach ($errors->all() as $message)
            <li>
                {{ $message }}
            </li>
        @endforeach
    </ul>
    Логування
    <input name="email" placeholder="Пошта">
    <input name="password" placeholder="Пароль">
    <input type="submit">
</form>
