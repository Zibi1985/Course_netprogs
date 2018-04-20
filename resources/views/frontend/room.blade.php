
<div class="container places">
    <h1 class="text-center">Pokój w obiekcie <a href="{{ route('object') }}">X</a></h1>

    <?php for ($i = 1; $i <= 2; $i++): ?>

        <div class="row top-buffer">

            <div class="col-md-4">
                <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
            </div>

        </div>

    <?php endfor; ?>


    <section>

        <ul class="list-group">
            <li class="list-group-item">
                <span class="bolded">Opis:</span> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            </li>
            <li class="list-group-item">
                <span class="bolded">Ilość osób w pokoju:</span> 3
            </li>
            <li class="list-group-item">
                <span class="bolded">Cena za dobę:</span> 150 PLN
            </li>
            <li class="list-group-item">
                <span class="bolded">Adres:</span> Vestibulum ante ipsum primis
            </li>
        </ul>
    </section>

    <section id="reservation">

        <h3>Rezerwacja</h3>

        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="dayin">Data przyjazdu</label>
                        <input required name="dayin" type="text" class="form-control datepicker" id="dayin" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="dayout">Data wyjazdu</label>
                        <input required name="dayout" type="text" class="form-control datepicker" id="dayout" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Rezerwuj</button> 
                    <p class="text-danger">Brak wolnych miejsc</p>
                </form>
            </div><br>
            <div class="col-md-6">
                <div id="avaiability_calendar"></div>
            </div>
        </div>


    </section>

</div>


