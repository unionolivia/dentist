

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <span class="loading"></span>
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <!--<img src="public/image/logo.png" alt="" class="circle responsive-img valign profile-image-login">-->
                    <!--<h1 class="center login-form-text header">e-Dentist</h1>-->
                    <h4>e-Dentist</h4>
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
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">          
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="login indigo lighten-1 btn waves-effect waves-light" type="submit">login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="<?= URL; ?>register">Register Now!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <!--<p class="margin right-align medium-small"><a href="#">Forgot password ?</a></p>-->
                </div>          
            </div>

        </form>
    </div>
</div>
