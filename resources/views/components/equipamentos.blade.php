<div class="equip {{ $class2 ?? '' }}">
    <div class="item1">
        {{ $modelo ?? 'Modelo' }}
    </div>
    <div class="item2">
        {{ $marca ?? 'Marca ' }}
    </div>
    <div class="item3">
        {{ $descricao ?? 'Descrição' }}
    </div>
    <div class="item4">
        @if ($modelo ?? 'Model' === 'Modelo')
            <a href="{{route('editarEquipamento', [
                'id' => $id
            ])}}">
                <img style="max-width: 22.5px" src="{{ asset('assets/images/edit (1).png') }}" alt="">
            </a>
            <a href="{{route('excluirEquipamento', [
                'id' => $id
            ])}}" onclick="return confirm('Deseja mesmo fazer isso ?')">
                <img style="max-width: 22.5px" src="{{ asset('assets/images/closed.png') }}" alt="">
            </a>
        @else
            Ações
        @endif
    </div>
</div>
