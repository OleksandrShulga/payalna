<form action="" method="POST">
    @csrf
    <ul>
        @foreach ($errors->all() as $message)
            <li>
                {{ $message }}
            </li>
        @endforeach
    </ul>
    Форма реєстрації
    <input name="name" placeholder="Представтеся">
    <input name="password" placeholder="Пароль">
    <input name="email" placeholder="Пошта">
    <input type="submit">
</form>
