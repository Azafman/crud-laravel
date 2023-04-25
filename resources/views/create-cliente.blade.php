<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-css />
    <link rel="stylesheet" href="{{ asset('assets/css/my-style2.css') }}">
    <title>Adicionar Cliente</title>
    <style>
        .select {
            font-family: Poppins-Medium;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;
            display: block;
            width: 85%;
            margin: auto;
            background: #e6e6e6;
            height: 35px;
            border-radius: 25px;
            /* padding: 0 30px 0 68px; */
            border: none;
            text-align: center;
        }

        input[name="type"] {
            transition: 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        }
    </style>

</head>

<body>
    <x-header />
    <main>
        <div class="wrap-login100 form" style="overflow: auto;">
            <form class="login100-form validate-form" method="POST" action="{{ route('creating_cliente') }}">
                @csrf
                <span class="login100-form-title" style="margin-top: 10px;">
                    Adicionar Cliente
                </span>
                @foreach ($errors->all() as $error)
                    <li style="color:black; font-size: 0.8em">{{ $error }}</li>
                @endforeach
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz"
                    style="color:black;text-align:center;">
                    Tipo de cliente:
                    <select name="type" id="" class="select">
                        <option value="" selected hidden>Selecione o tipo de cliente</option>
                        <option class="opt" value="fisica">Pessoa Física</option>
                        <option class="opt" value="juridica">Pessoa Jurídica</option>
                    </select>

                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="number" name="doc_id" placeholder="Documento" hidden>
                    <span class="focus-input100"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="name" placeholder="Nome">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="address" placeholder="Endereço">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="telefone" placeholder="Telefone">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="text" name="responsavel" placeholder="Responsável">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Adicionar
                    </button>
                </div>

            </form>
        </div>
    </main>
    <script src="{{ asset('assets/js/create-cliente.js') }}"></script>
</body>

</html>
