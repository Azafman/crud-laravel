<div class="equip {{ $class2 ?? '' }}">
    <div class="item1">
        {{ $nome ?? 'Nome' }}
    </div>
    <div class="item2">
        {{ $telefone ?? 'Telefone' }}
    </div>
    <div class="item3">
        {{ $doc ?? 'Doc' }}
    </div>
    <div class="item4">
        @if (!($first ?? 'firs' === 'first'))
            <a href="{{route('editarCliente', [
                'id' => $id
            ])}}">
                <img style="max-width: 22.5px" src="{{ asset('assets/images/edit (1).png') }}" alt="">
            </a>
            <a onclick="return confirm('Deseja mesmo fazer isso ?')" href="{{route('excluirCliente', [
                'id' => $id
            ])}}">
                <img style="max-width: 22.5px" src="{{ asset('assets/images/closed.png') }}" alt="">
            </a>
        @else
            Ações
        @endif
    </div>
</div>