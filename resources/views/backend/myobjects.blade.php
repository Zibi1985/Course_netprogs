@extends('layouts.backend')

@section('content')
    <h2>Lista obiektów</h2>
    <?php for ($i = 1; $i <= 3; $i++): ?>

        <div class="panel panel-success top-buffer">
            <div class="panel-heading">
                <h3 class="panel-title">Obiekt X <small><a href="{{ route('saveObject') }}" class="btn btn-danger btn-xs">edytuj</a> <a href="{{ route('saveRoom') }}" class="btn btn-danger btn-xs">dodaj pokój</a> <a title="usuń" href=""><span class="glyphicon glyphicon-remove"></span></a></small> </h3>
            </div>

            <div class="panel-body">
                <?php for ($j = 1; $j <= 4; $j++): ?>
                    <span class="my_objects">
                        Pokój 1 <a title="edytuj" href="{{ route('saveRoom') }}"><span class="glyphicon glyphicon-edit"></span></a> <a title="usuń" href=""><span class="glyphicon glyphicon-remove"></span></a> </span>
                        <?php endfor; ?>
            </div>

        </div>

    <?php endfor; ?>
@endsection


