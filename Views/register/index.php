
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
     <span class="loading"></span>
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">It's Free!</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
             <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person prefix"></i>
            <input id="firstname" type="text">
            <label for="firstname" class="center-align">Firstname</label>
          </div>
        </div>
             <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="lastname" type="text">
            <label for="lastname" class="center-align">Lastname</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
          <div class="row">
          <div class="input-field col s12">
            <button class="register indigo lighten-1 btn waves-effect waves-light" type="submit">register</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="<?= URL; ?>">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
