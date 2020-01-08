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
            <label for="number" id="administratieText">Burgerservicenummer</label>
            <input type="text" class="form-control" id="number" aria-describedby="numberHelp"
              name="number" placeholder="Invoer Burgerservicenummer">
            <small id="numberHelp" class="form-text text-muted">(9 cijfers)</small>
          </div>
          <!-- email -->
          <div class="form-group">
            <label for="email" id="administratieText">E-mailadres</label>
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
            <label for="date" id="administratieText">Geboortedatum</label>
            <input type="text" class="form-control" id="date" aria-describedby="dateHelp"
              name="date" placeholder="YYYY-MM-DD">
          </div>
          <!-- Mobiel Nummer -->
          <div class="form-group">
            <label for="Mnumber" id="administratieText">Mobiel Nummer</label>
            <input type="text" class="form-control" id="Mnumber" aria-describedby="MnumberHelp"
              name="Mnumber" placeholder="Invoer Mobiel Nummer">
          </div>
          <!-- de buttons -->
          <button type="submit" class="btn btn-secondary">Versturen</button>
          <a class="btn btn-secondary" href="index.php?content=read" role="button">Alle aanmeldingen</a>
        </form>
      </div>
      <div class="col-6">     
        <img src="./img/RobotInloggen.png" alt="Robot inloggen">
      </div>
    </div>
  </main>
</body>
