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
                           <table class="table table-bordered table-hover" id="tabelaalunos">
                               <thead>
                                   <tr>
                                       <th>Codigo</th>
                                       <th>Nome</th>
                                       <th>Contato</th>
                                       <th>E-mail</th>
                                       <th>Data de nascimento</th>
                                       <th>Genero</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($alunos as $a)
                                   <tr>
                                       <td>{{$a->id}}</td>
                                       <td>{{$a->name}}</td>
                                       <td>{{$a->phone}}</td>
                                       <td>{{$a->email}}</td>
                                       <td>{{$a->birth}}</td>
                                       <td>{{$a->gender}}</td>
                                   </tr>
                                   @endforeach
                               </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>