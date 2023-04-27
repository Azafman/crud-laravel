<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-css />
    <link rel="stylesheet" href="{{asset('assets/css/my-style2.css')}}">
    <title>Criar</title>
</head>
<body>
    <x-header namePag="Adicionar Cliente"/>
    <main>
        <div class="wrap-login100 form">
            <form class="login100-form validate-form" method="POST" action="{{route('creating-equipamento')}}">
                @csrf
                <span class="login100-form-title">
                    Adicionar Equipamento
                </span>
                @foreach ($errors->all() as $error)
                    <li style="color:black; font-size: 0.8em;text-align:center;">{{ $error }}</li>
                @endforeach

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="modelo" placeholder="Modelo">
                    <span class="focus-input100"></span>
                   
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="marca" placeholder="Marca">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="descricao" placeholder="Descrição">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Criar
                    </button>
                </div>

            </form>
        </div>
    </main>
</body>
</html>

