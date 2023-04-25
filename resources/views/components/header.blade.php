<link rel="stylesheet" href="{{asset('assets/css/my-style.css')}}">
<header class="header">
    <div class="pontos">
        <div class="menu-item">
            <div class="item1"></div>
            <div class="item2"></div>
            <div class="item3"></div>
        </div>
        <div class="show-itens">
            <nav class="menu">
                <ul>
                    <li class="categoria">
                        Clientes
                        <ul class="sub-categoria">
                            <a class="a-esc" href="{{route('showClientes')}}">
                                <li>Listar</li>
                            </a>
                            <a class="a-esc" href="{{route('createCliente')}}">
                                <li>Adicionar</li>
                            </a>
                        </ul>
                    </li>
                    <li class="categoria">
                        Equipamentos
                        <ul class="sub-categoria">
                            <a class="a-esc" href="{{route('showEquipamentos')}}">
                                <li>Listar</li>
                            </a>
                            <a class="a-esc" href="{{route('createEquipamento')}}">
                                <li>Adicionar</li>
                            </a>
                        </ul>
                    </li>
                </ul>
                <ul class="sair">
                    <a href="{{route('logout')}}">Sair</a> 
                </ul>
            </nav>
        </div>
    </div>
    <div class="page">
        <a href="{{route('home')}}" style="color: white !important; font-size: 1em;">
            Home
        </a>
    </div>
</header>
<script src="{{asset('assets/js/header.js')}}"></script>