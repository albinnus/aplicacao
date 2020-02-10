@extends("templates.master")
@section("titulo")
    Envio de Mensagem
@stop
@section("conteudo")
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Informações de contato</h4>
            {{Form::open(['route'=>'contact.new.post', 'method'=>'post', 'files'=>true])}}
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nome">Nome<span class="text-muted">(*)</span></label>
                        {{Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome completo'])}}

                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email">E-mail <span class="text-muted">(*)</span></label>
                        {{Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail'])}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="telefone">Telefone<span class="text-muted">(*)</span></label>
                        {{Form::text('telefone',null,['class'=>'form-control','placeholder'=>'Telefone', 'id'=>'telefone'])}}
                    </div>

                    <div class="offset-md-6 mb-3"></div>

                    <div class="col-md-12 mb-3">
                        <label for="mensagem">Mensagem<span class="text-muted">(*)</span></label>
                        {{Form::textarea('mensagem', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="arquivo">Arquivo<span class="text-muted">(*)</span></label>
                         <input type="file" name="arquivo" class="form-control">
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
            {{Form::close()}}
        </div>
    </div>
@stop
@section("javascript")
    {{Html::script(mix('js/newContact.js'))}}
@stop
