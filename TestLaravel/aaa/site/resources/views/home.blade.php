@extends('layout')

@section('title')Вход@endsection

@section('main_content')
<div style="margin-top: 100px">
    <form role="form" style="margin-left: auto; margin-right: auto; width: 12em">
        <div class="form-group">
            <label for="inputUsernameEmail">Логин</label>
            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Введите Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Пароль</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn btn-primary" style="background-color: #399191">
            Войти
        </button>
    </form>
</div>


@endsection

@section('footer_content')

@endsection
