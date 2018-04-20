@extends('layouts.backend')
    <h2>Dodawanie nowego obiektu / edycja</h2>
    <form method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="city" class="col-lg-2 control-label">Miasto *</label>
                <div class="col-lg-10">
                    <select name="city" class="form-control" id="city">
                        <option>Warszawa</option>
                        <option>Kraków</option>
                        <option>Gdańsk</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Nazwa *</label>
                <div class="col-lg-10">
                    <input name="name" required type="text" class="form-control" id="name" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="street" class="col-lg-2 control-label">Ulica *</label>
                <div class="col-lg-10">
                    <input name="street" required type="text" class="form-control" id="street" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="number" class="col-lg-2 control-label">Numer *</label>
                <div class="col-lg-10">
                    <input name="number" required type="number" class="form-control" id="number" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="descr" class="col-lg-2 control-label">Opis obiektu *</label>
                <div class="col-lg-10">
                    <textarea name="description" required class="form-control" rows="3" id="descr"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <label for="objectPictures">Zdjęcia obiektu</label>
                    <input type="file" name="objectPictures[]" id="objectPictures" multiple>
                    <p class="help-block">Dodaj galerię zdjęć obiektu</p>
                </div>
            </div>

            <div class="col-lg-10 col-lg-offset-2">

                <?php for ($i = 1; $i <= 2; $i++): ?>

                    <div class="row">


                        <?php for ($j = 1; $j <= 4; $j++): ?>

                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="http://lorempixel.com/275/150/city/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                                    <div class="caption">
                                        <p><a href="#" class="btn btn-primary btn-xs" role="button">Usuń</a></p>
                                    </div>

                                </div>
                            </div>

                        <?php endfor; ?>

                    </div>


                <?php endfor; ?>

            </div>

            <div class="col-lg-10 col-lg-offset-2">
                Artykuły:
                <ul class="list-group">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <li class="list-group-item">
                            Tutuł artykułu <a href="">usuń</a>
                        </li>
                    <?php endfor; ?>

                </ul>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Zapisz obiekt</button>
                </div>
            </div>

        </fieldset>
    </form>

    <div class="col-lg-10 col-lg-offset-2">

        <form method="POST" class="form-horizontal">
            <fieldset>

                <div class="form-group">
                    <label for="textTitle" class="col-lg-2 control-label">Tytuł *</label>
                    <div class="col-lg-10">
                        <input name="title" required type="text" class="form-control" id="textTitle" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Treść *</label>
                    <div class="col-lg-10">
                        <textarea name="content" required class="form-control" rows="3" id="textArea"></textarea>
                        <span class="help-block">Dodaj artykuł na temat tego obiektu.</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
@section('content')

@endsection

