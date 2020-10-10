@extends('templates\template')


@section('content')
    <h1 class="text-center">
        @if (isset($todo)) Editar @else Cadastrar @endif
    </h1>
    <hr>
    <div class="col-8 m auto">

        <div class="text-center mt-4 mb-4 p-2 - alert-danger">
            @if (isset($errors) && count($errors) > 0)
                @foreach ($errors->all() as $erro){
                    {{ $erro }}
                    }

                @endforeach

            @endif
        </div>
      
        @if (isset($todo))
            <form name="formEdit" id="formEdit" method="post" action="/todos/{{$todo->id}}">
                @method('PUT')
            @else
                <form name="formCad" id="formCad" method="post" action="/todos">
        @endif

        @csrf
        <input class="form-control text-center" type="text" name="name" id="name" placeholder="Insira tarefa"
            value="{{ $todo->name ?? '' }}"> <br>

        @if (isset($todo))
            <input class="btn btn-primary" type="submit" value="Editar" />

        @else
            <input class="btn btn-primary" type="submit" value="Cadastrar" />
        @endif


        </form>

    </div>
@endsection
