@extends('layouts.backend')

@section('content')
    <h2 class="sub-header">Kalendarz rezerwacji</h2>

    <?php for ($i = 1; $i <= 3; $i++): ?>

        <h3 class="red">Obiekt X</h3>


        <?php for ($j = 1; $j <= 4; $j++): ?>

            <h4 class="blue"> Pokój <?= $j ?></h4>

            <div class="row top-buffer">
                <div class="col-md-3">
                    <div class="reservation_calendar" id="<?= $i . $j ?>"></div>
                </div>
                <div class="col-md-9">
                    <div class="center-block loader loader_<?= $i . $j ?>" style="display: none;"></div>
                    <div class="hidden_<?= $i . $j ?>" style="display: none;">


                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nr pokoju</th>
                                        <th>Data przyjazdu</th>
                                        <th>Data wyjazdu</th>
                                        <th>Gość</th>
                                        <th>Potwierdzenie</th>
                                        <th>Usuń</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>12-02-2012</td>
                                        <td>12-03-2015</td>
                                        <td><a target="_blank" href="{{ route('person') }}">Adam</a></td>
                                        <td><a href="#" class="btn btn-primary btn-xs">Potwierdź</a></td>
                                        <td><a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <hr>

        <?php endfor; ?>

    <?php endfor; ?>
@endsection

