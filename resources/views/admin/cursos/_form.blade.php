<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label>Titulo</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descricao</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
    <img src="{{asset($registro->imagem)}}" width="120px">
</div>
@endif

<div>
    <p>
        <label>
            <input type="checkbox" name="publicado" class="filled-in" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked="checked"' : ''}} value="true" />
            <span>Publicado</span>
        </label>
    </p>
    <br>
</div>