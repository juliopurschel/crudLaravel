@extends('templates.template')


@section('content')
    <h1 class="text-center">Simple Crud Page</h1>
    <hr>

    <main>

        <form class="form " method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Insira tarefa" required>
        </form>

        <div>
            <ul>

                @csrf
                @foreach ($todos as $todo)


                    <li>
                        <div class="container">
                            <div class="listName">
                                {{ $todo->name }}
                            </div>
                            <div class="listBtn">
                                <i class="material-icons button editBtn" data-toggle="modal" data-target="#exampleModal"
                                    data-id='{{ $todo->id }}' data-name='{{ $todo->name }}'>edit</i>
                                <a href="{{ url('todos/' . $todo->id) }}" class="js-del">
                                    <i class="material-icons button delBtn">clear</i>
                                </a>
                            </div>
                        </div>
                    </li>

                @endforeach

            </ul>
    </main>

@endsection
</div>

<div class="modal fade modaltest" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editando</h5>
            </div>

            <div class="modal-body">

                <form method="post" name="formEdit" id="formEdit">
                    @method("PATCH")
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control input2" type="text" name="name" id="name" placeholder="Insira tarefa"
                            required> <br>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary saveBtn">Enviar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>

<script>

</script>
