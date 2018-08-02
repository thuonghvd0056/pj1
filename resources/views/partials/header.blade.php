<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light bg-dark" id="pb-navbar"
     style="height: 50px">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="images/logo/logo.png" alt="Instant Logo" class="light" style="width: 80px; height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
                aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Home</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">About</a></li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2"
                    style="margin-top: 30px; margin-bottom: 30px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="/">
                        <img src="images/logo/logo.png" alt="Instant Logo" class="light"
                             style="width: 80px; height: 80px;">
                    </a>
                </li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Shop Accessories</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Pet Spa</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    {{--<ul class="nav navbar-nav navbar-right">--}}
    {{--<li><a data-toggle="modal" data-target="#loginModal" href="#" style="color: #9A8D7B"><span class="glyphicon glyphicon-log-in"></span> <i class="fas fa-user-circle"></i></a></li>--}}
    {{--</ul>--}}
    <div>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

        <div id="id01" class="modal">
            {{--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>--}}
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                        In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign
                        Up</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" type="text" class="input" required placeholder="Username"
                                       pattern=".{6,}" title=" Must contain at least one number and one uppercase and
                                       lowercase letter, and at least 8 or more characters">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" type="password" class="input" data-type="password" required
                                       placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign In">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="sign-up-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" type="text" class="input" required placeholder="Username"
                                       pattern=".{6,}">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" type="password" class="input" data-type="password" required
                                       placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="pass" type="password" class="input" data-type="password" required
                                       placeholder="Repeat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input id="pass" type="email" class="input" required placeholder="Email">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <label for="tab-1">Already Member?</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<style>
    .navbar-nav li:hover > ul.dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
    }

    /* rotate caret on hover */
    .dropdown-menu > li > a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
    }

    /* Mask for background, by default is not display */
    #mask {
        display: none;
        background: #000;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        z-index: 999;
    }

    body {
        margin: 0;
        color: #448c01;
        background: #c8c8c8;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }

    *, :after, :before {
        box-sizing: border-box
    }

    .clearfix:after, .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 100%;
        margin: auto;
        max-width: 525px;
        min-height: 720px;
        position: relative;
        /*background:url(https://i.pinimg.com/736x/85/60/d7/8560d77b609b2703597abf83fd9e92aa--timeline-photos-cute-puppies.jpg) no-repeat center;*/
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
    }

    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(40, 57, 101, .8);
    }

    .login-html .sign-in-htm,
    .login-html .sign-up-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked + .tab,
    .login-html .sign-up:checked + .tab {
        color: #fff;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }

    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        background: #1161ee;
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked + label {
        color: #fff;
    }

    .login-form .group .check:checked + label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked + label .icon:before {
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked + label .icon:after {
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm {
        transform: rotate(0);
    }

    .login-html .sign-up:checked + .tab + .login-form .sign-up-htm {
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }

</style>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>