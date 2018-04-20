
<div class="container-fluid places">

    <h1 class="text-center">Dostępne pokoje</h1>

    <?php for ($i = 1; $i <= 3; $i++): ?>

        <div class="row">

            <?php for ($j = 1; $j <= 4; $j++): ?>

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive img-circle" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                        <div class="caption">
                            <h3>Lorem ipsum  <small class="orange bolded">250 zł</small> </h3>
                            <p>Lorem impsum dolor sit amet. Lorem impsum dolor sit amet.</p>
                            <p><a href="{{ route('room') }}" class="btn btn-primary" role="button">Szczegóły</a><a href="{{ route('room') }}#reservation" class="btn btn-success pull-right" role="button">Rezerwacja</a></p>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>


        </div>

    <?php endfor; ?>

</div>
