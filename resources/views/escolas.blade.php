<html>
    <head>
        <title>Cadastro de escolas</title>
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
                                Cadastro de escolas
                            </div>
                        </div>
                        <div class="card-body">
                           <table class="table table-bordered table-hover" id="tabelaalunos">
                               <thead>
                                   <tr>
                                       <th>Codigo</th>
                                       <th>Nome</th>
                                       <th>Endereço</th>
                                       <th>Total de turmas</th>
                                       <th>Total de alunos</th>
                                       <th>Editar</th>
                                       <th>Apagar</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($escolas as $e)
                                   <tr>
                                       <td>{{$e->id}}</td>
                                       <td>{{$e->nameScool}}</td>
                                       <td>{{$e->address}}</td>
                                       <td>{{$e->totalturmas}}</td>
                                       <td>{{$e->totalalunos}}</td>
                                       <td>
                                           <form  action="/escola-edit/{{$e->id}}/edit" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="submit" value="Editar">
                                            </form>
                                        </td>
                                       <td>
                                           <form  action="/escola/{{$e->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Apagar">
                                            </form>
                                        </td>
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