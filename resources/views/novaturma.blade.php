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
                                Cadastro de turma
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/turma" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="year">Ano</label>
                                    <input type="text" id="year" name="year" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="level">Nível de ensino</label>
                                    <input type="text" id="level" name="level" class="form-control" placeholder="Médio">
                                </div>
                                <div class="form-group">
                                    <label for="serie">Série</label>
                                    <input type="text" id="serie" name="serie" class="form-control" placeholder="Série">
                                </div>
                                <div class="form-group">
                                    <label for="shift">Turno</label>
                                    <input type="text" id="shift" name="shift" class="form-control" placeholder="Turno">
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