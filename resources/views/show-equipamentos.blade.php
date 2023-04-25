{{-- @dd($equipamentos[0]) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}" type="image/x-icon">
    <title>Equipamentos</title>
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
            max-width: 550px;
            color: rebeccapurple;
            display: flex;
            flex-direction: column;
        }

        .form {
            padding: 5px;
            display: flex !important;
            flex-direction: column !important;
            justify-content: start;
             gap: 10px; 
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
</head>

<body>
    <x-header />
    <main>
        <div class="wrap-login100 form">
            <h2 style="font-size: 1.15em; text-align: center;margin-bottom: 10px">Seus equipamentos</h2>
            <x-equipamentos class2="eqp2" />
            @foreach ($equipamentos as $eqp)
                <x-equipamentos id="{{$eqp['id']}}" modelo="{{ $eqp['modelo'] }}" marca="{{ $eqp['marca'] }}"
                    descricao="{{ $eqp['descricao'] }}" style="color:black;" />
            @endforeach
        </div>
    </main>
</body>

</html>
