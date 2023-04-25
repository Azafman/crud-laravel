<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}" type="image/x-icon">

    <x-css />
    <style>
        main {
            max-width: auto !important;
            margin: auto;
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main>div {
            height: 75vh;
            max-width: 775px;
            color: rebeccapurple;
            display: flex;
            flex-direction: column;
        }

        .form {
            padding: 5px;
            display: flex !important;
            flex-direction: column !important;
            justify-content: start;
            overflow-y: auto;
        }

        .equip {
            display: flex;
            width: 100%;
        }

        .eqp2 {
            border-bottom: 1px solid #9453C6;
        }

        .equip>div {
            flex-basis: 50%;
            text-align: center;
            margin: 2px;
        }

        .item1,
        .item2,
        .item3 {
            border-right: 1px solid #9453C6;
        }
    </style>
    <title>Clientes</title>
</head>

<body>
    <x-header />
    <main>
        <div class="wrap-login100 form">
            <h2 style="font-size: 1.15em; text-align: center;margin-bottom: 10px">Seus Clientes</h2>
            <x-clientes first="first" class2="eqp2"/>
            @foreach ($clientes as $cliente)
                <x-clientes id="{{$cliente['id']}}" nome="{{$cliente['name']}}"  telefone="{{$cliente['telefone']}}" doc="{{$cliente['doc_id']}}"/>
            @endforeach

        </div>
    </main>
</body>

</html>
