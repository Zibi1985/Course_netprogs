
<h2>Dodawanie nowego pokoju do obiektu / edycja</h2>
<form method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="roomNumber" class="col-lg-2 control-label">Nr pokoju *</label>
            <div class="col-lg-10">
                <input name="room_number" required type="number" class="form-control" id="roomNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="peopleNumber" class="col-lg-2 control-label">Iluosobowy pokój *</label>
            <div class="col-lg-10">
                <input name="room_size" required type="number" class="form-control" id="peopleNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Cena *</label>
            <div class="col-lg-10">
                <input name="price" required type="number" class="form-control" id="price" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Opis pokoju *</label>
            <div class="col-lg-10">
                <textarea name="description" required class="form-control" rows="3" id="descr"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="roomPictures">Zdjęcia pokoju</label>
                <input type="file" name="roomPictures[]" id="roomPictures" multiple>
                <p class="help-block">Dodaj galerię zdjęć pokoju</p>
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


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Zapisz pokój</button>
            </div>
        </div>

    </fieldset>
</form>
