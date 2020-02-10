@extends("templates.mailTemplate")
@section("titulo")
    Confirmação de envio
@stop
@section("conteudo")
    <div class="row">
        <div class="col-md-12">
            Prezado usuário, a seguinte mensagem foi enviada. Segue o resumo das informações enviadas.
            <br>
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td>Nome</td>
                    <td>{{$contact->nome}}</td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>{{$contact->email}}</td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td>{{$contact->telefone}}</td>
                </tr>
                <tr>
                    <td>Mensagem</td>
                    <td>{{$contact->mensagem}}</td>
                </tr>

                <tr>
                    <td>Arquivo</td>
                    <td>{{$contact->files->nome}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

