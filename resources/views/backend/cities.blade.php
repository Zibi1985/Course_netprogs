
<h1>Miasta <small><a class="btn btn-success" href="#" data-type="button"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Nowe miasto </a></small></h1>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>Nazwa miasta</th>
            <th>Edytuj / Usuń</th>
        </tr>
        <?php for($i=1;$i<=10;$i++): ?>
            <tr>
                <td>Warszawa</td>
                <td>
                    <a href=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a onclick="return confirm('Na pewno usunąć?');" href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</div>



<h1>Utwórz / edytuj nowe miasto</h1>
<form method="POST" action="#">
<h3>Nazwa * </h3>
<input class="form-control" type="text" required name="name"><br>
<button class="btn btn-primary" type="submit">Utwórz</button>
</form>






