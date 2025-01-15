<div class="inputArea">
    <label for={{ $name }}>{{$label ?? '' }}</label>
    <select id="{{$name}}" name="{{$name }}" required>
        <option selected disabled value="">Selecione uma Opção</option>
        <option>Valor qualquer</option>
        {{$slot}}
    </select>
</div>
