<body>
  <main class="container">
    <!-- jumbotron -->
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid" id="jumbotron1">
          <div class="container">
            <h1 class="display-4" id="Jumbotron_title">Invoerformuleer Robotica</h1>
            <h3 id="jumbotron_text">Geef hier je gegevens op!</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Burgerservicenummer -->
      <div class="col-6">
        <form action="./index.php?content=create" method="POST">
          <div class="form-group">
            <label for="firstname" id="administratieText">Burgerservicenummer</label>
            <input type="text" class="form-control" id="Burgerservicenummer" aria-describedby="BurgerservicenummerHelp"
              name="Burgerservicenummer" placeholder="Invoer Burgerservicenummer">
            <small id="BurgerservicenummerHelp" class="form-text text-muted">(9 cijfers)</small>
          </div>
          <!-- email -->
          <div class="form-group">
            <label for="infix" id="administratieText">E-mailadres</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email"
              placeholder="Invoer E-mailadres">
          </div>
          <!-- voornaam -->
          <div class="form-group">
            <label for="firstname" id="administratieText">Voornaam</label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname"
              placeholder="Invoer Voornaam">
          </div>
          <!-- geboortedatum -->
          <div class="form-group">
            <label for="Geboortedatum" id="administratieText">Geboortedatum</label>
            <input type="text" class="form-control" id="Geboortedatum" aria-describedby="GeboortedatumHelp" name="Geboortedatum"
              placeholder="Invoer Geboortedatum">
          </div>
          <!-- Mobiel Nummer -->
          <div class="form-group">
            <label for="MobielNummer" id="administratieText">Mobiel Nummer</label>
            <input type="text" class="form-control" id="MobielNummer" aria-describedby="MobielNummerHelp" name="MobielNummer"
              placeholder="Invoer Mobiel Nummer">
          </div>
          <button type="submit" class="btn btn-primary">Versturen</button>
        </form>
      </div>
      <div class="col-6">
        <img src="./img/RobotInloggen.png" alt="Robot inloggen">
      </div>
    </div>
  </main>
</body>