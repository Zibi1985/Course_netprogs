@extends('layouts.backend')

@section('content')
    <h2>Dane użytkownika</h2>
    <form method="POST" class="form-horizontal" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Imię *</label>
                <div class="col-lg-10">
                    <input name="name" type="text" required class="form-control" id="name" value="Imię">
                </div>
            </div>
            <div class="form-group">
                <label for="surname" class="col-lg-2 control-label">Nazwisko *</label>
                <div class="col-lg-10">
                    <input name="surname" type="text" required class="form-control" id="surname" value="Nazwisko">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email *</label>
                <div class="col-lg-10">
                    <input name="email" type="email" required class="form-control" id="inputEmail" value="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <label for="userPicture">Dodaj swoje zdjęcie</label>
                    <input name="userPicture" type="file" id="userPicture">
                </div>
            </div>

            <div class="col-lg-10 col-lg-offset-2">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://lorempixel.com/275/150/people/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                            <div class="caption">
                                <p><a href="#" class="btn btn-primary btn-xs" role="button">Usuń</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>
@endsection
