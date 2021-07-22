<html>
    <head>
        <title>Cadastro de turmas</title>
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
                                Cadastro de turmas
                            </div>
                        </div>
                        <div class="card-body">
                           <table class="table table-bordered table-hover" id="tabelaalunos">
                               <thead>
                                   <tr>
                                       <th>Codigo</th>
                                       <th>Ano</th>
                                       <th>Nível de ensino</th>
                                       <th>Série</th>
                                       <th>Turno</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($turmas as $t)
                                   <tr>
                                       <td>{{$t->id}}</td>
                                       <td>{{$t->year}}</td>
                                       <td>{{$t->level}}</td>
                                       <td>{{$t->serie}}</td>
                                       <td>{{$t->shift}}</td>
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