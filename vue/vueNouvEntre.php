<!-- DEBUT CODE -->
<div class="container">
    <center><h1 class="pt-5">Nouvelle entrée</h1></center>
    <!-- GAUCHE -->
    <div class="row g-3 needs-validation pt-5" novalidate>
        <div class="col-6">
            <div class="row mb-3">
                <label for="inputEmail3" class="col col-form-label">Nombre d'entrée Adulte</label>
                <div class="col-8">
                    <input type="number" class="form-control" id="inputEmail3" value="0" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col scol-form-label">Nombre d'entrée Enfant</label>
                <div class="col-8">
                    <input type="number" class="form-control" id="inputPassword3" value="0" required>
                </div>
            </div>
        </div>
        <!-- DROITE -->
        <div class="col-6">
        <?php
        for ($i = 0; $i < count($listeExpos); $i++) { ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <?= $listeExpos[$i]["nomExpo"] ?>
                </label>
            </div>
            <?php
        }
        ?>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </div>
</div>
