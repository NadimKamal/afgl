<x-Frontend.Layouts.Master>
    {{-- sign-section --}}
    <section class="sign-section pt_140 pb_150">
        <div class="large-container">
            <div class="sec-title centred mb_60">
                <h2>Sign Up</h2>
            </div>
            <div class="form-inner">
                <form method="post" action="signup.html">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Sign Up</button>
                    </div>
                    <div class="text"><span>or</span></div>
                    <ul class="social-links clearfix">
                        <li>
                            <a href="signup.html"><img src="assets/images/icons/icon-3.png" alt="">Continue with
                                Google</a>
                        </li>
                        <li>
                            <a href="signup.html"><img src="assets/images/icons/icon-4.png" alt="">Continue with
                                Facebook</a>
                        </li>
                    </ul>
                </form>
                <div class="lower-text centred">
                    <p>Already have an account? <a href="login.html">Login Here</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- sign-section end --}}
<x-Frontend.Sections.NextLevel/>
</x-Frontend.Layouts.Master>
