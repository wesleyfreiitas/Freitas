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
                                Cadastro de aluno
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/aluno" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Nome do Aluno</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome do Aluno">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Número do Aluno</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="558596310234">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do Aluno</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail do Aluno">
                                </div>
                                <div class="form-group">
                                    <label for="birth">Data de nascimento do Aluno</label>
                                    <input type="date" id="birth" name="birth" class="form-control" placeholder="00-00-00">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gênero</label>
                                    <input type="text" id="gender" name="gender" class="form-control" placeholder="Masculino">
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