
<div class="container-fluid places">

    <p class="text-center red bolded">Nie znaleziono ofert spełniających podane kryteria</p>
    <h1 class="text-center">Ciekawe miejsca</h1>

    <?php for ($i = 1; $i <= 3; $i++): ?>

        <div class="row">

            <?php for ($j = 1; $j <= 4; $j++): ?>

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/800/400/city/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                        <div class="caption">
                            <h3>Lorem ipsum  <small>Miasto</small> </h3>
                            <p>Lorem impsum dolor sit amet. Lorem impsum dolor sit amet.</p>
                            <p><a href="{{ route('object') }}" class="btn btn-primary" role="button">Szczegóły</a></p>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>


        </div>

    <?php endfor; ?>

</div>