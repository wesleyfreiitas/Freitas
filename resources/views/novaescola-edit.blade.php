<html>
    <head>
        <title>Cadastro de aluno</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
            body {padding:20px;}
        </style>
    </head>
    <body>
        <main role="main">
            <div class="row">
                <div class="container col-md-8 offset-md-2">
                    <div class="card-border">
                        <div class="card-header">
                            <div class="card-title">
                                Cadastro de escola
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/escola" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="nameScool">Nome da escola</label>
                                    <input type="text" id="nameScool" name="nameScool" class="form-control" value="{{$escola->nameScool}}" placeholder="Nome da escola">
                                </div>
                                <div class="form-group">
                                    <label for="address">Endereço</label>
                                    <input type="text" id="address" name="address" class="form-control" value="{{$escola->address}}" placeholder="Rua parnamirim, 191, Passaré.">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                            </form>
                        </div>
@if ($errors->any())
<div class="card-footer">
    @foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
{{$error}}    
</div>
    @endforeach
    </div>
@endif
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>