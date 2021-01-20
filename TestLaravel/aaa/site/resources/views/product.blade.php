@extends('layout')

@section('title')Продукты@endsection

@section('main_content')
    <?VarDumper::dump($users);?>

{{--    <style>--}}
{{--        body{--}}
{{--            font-family: 'Roboto', sans-serif;--}}
{{--        }--}}

{{--        .app{--}}
{{--            max-width: 1100px;--}}
{{--            margin: 50px auto;--}}
{{--        }--}}

{{--        .list{--}}
{{--            display: flex;--}}
{{--            justify-content: space-between;--}}
{{--        }--}}

{{--        .card{--}}
{{--            width: 400px;--}}
{{--            padding: 10px;--}}
{{--            border: 1px solid #ccc;--}}
{{--            border-radius: 5px;--}}
{{--            transition: box-shadow .3s ease-in-out;--}}
{{--        }--}}

{{--        .card:hover{--}}
{{--            box-shadow: 15px 15px 0 rgba(71, 66, 66, 0.50);--}}
{{--        }--}}

{{--        .card-img{--}}
{{--            display: flex;--}}
{{--            align-items: center;--}}
{{--            height: 200px;--}}
{{--        }--}}

{{--        .car img{--}}
{{--            width: 100%;--}}
{{--        }--}}
{{--    </style>--}}


{{--    <div >--}}
{{--    <div class="card-img card">--}}
{{--        <img src=>--}}
{{--    </div>--}}
{{--    <h3><?//name?></h3>--}}
{{--    <p><?//price?></p>--}}
{{--    </div>--}}










@endsection

@section('footer_content')

@endsection

