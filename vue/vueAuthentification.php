<body>
    <div class="container">
        <center><h1 class="pt-5">Connexion</h1></center>
        <form class="row g-3 needs-validation pt-5" novalidate action="./?action=connexion" method="POST">
            <div class="row">
                <div class="col-6">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="text" name="mailU" class="form-control" id="mailU" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="validationCustom02" class="form-label">Mot de passe</label>
                    <input type="password" name="mdpU" class="form-control" id="mdpU" required>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Se connecter</button>
                <a href="./?action=inscription">Inscription</a>
            </div>
        </form>

        <hr>
        Utilisateur de test : <br />
        login : test@bts.sio<br />
        mot de passe : sio
    </div>
</body>