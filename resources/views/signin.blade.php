<x-Frontend.Layouts.Master>
    {{-- sign-section --}}
    <section class="sign-section pt_140 pb_150">
        <div class="large-container">
            <div class="sec-title centred mb_60">
                <h2>Log in</h2>
            </div>
            <div class="form-inner">
                <form method="post" action="login.html">
                    <div class="form-group">
                        <label>Email <span>*</span></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password <span>*</span></label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Log In</button>
                    </div>
                    <div class="other-option">
                        <div class="check-box">
                            <input class="check" type="checkbox" id="checkbox1">
                            <label for="checkbox1">Remember me</label>
                        </div>
                        <button class="forgot-password">Forget password?</button>
                    </div>
                    <div class="text"><span>or</span></div>
                    <ul class="social-links clearfix">
                        <li>
                            <a href="login.html"><img src="assets/images/icons/icon-3.png" alt="">Continue with
                                Google</a>
                        </li>
                        <li>
                            <a href="login.html"><img src="assets/images/icons/icon-4.png" alt="">Continue with
                                Facebook</a>
                        </li>
                    </ul>
                </form>
                <div class="lower-text centred">
                    <p>Not registered yet? <a href="signup.html">Create an Account</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- sign-section end --}}

<x-Frontend.Sections.NextLevel/>
</x-Frontend.Layouts.Master>
