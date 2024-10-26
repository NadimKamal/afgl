<x-Frontend.Layouts.Master>
    {{-- contact-info-section --}}
    <section class="contact-info-section centred pt_150">
        <div class="auto-container">
            <div class="sec-title centred mb_40">
                <span class="sub-title">Contact us</span>
                <h2>Contact Informations</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-41"></i></div>
                            <h3>Our Location</h3>
                            <p>1901 Thornridge Cir. Shiloh, <br />Hawaii 81063</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-42"></i></div>
                            <h3>Email Address</h3>
                            <p><a href="mailto:contact@example.com">contact@example.com</a> (Information)<br /><a
                                    href="mailto:support@example.com">support@example.com</a> (query)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-43"></i></div>
                            <h3>Phone Number</h3>
                            <p><a href="tel:2085550111">+208 555-0111</a> (International)<br /><a
                                    href="tel:2085550112">+208 555-0112</a> (Local)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact-info-section end --}}

    {{-- contact-style-two --}}
    <section class="contact-style-two pt_120 pb_150">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box mr_10">
                        <div class="sec-title mb_55">
                            <span class="sub-title">Get in touch</span>
                            <h2>Send a Message</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your email" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one" name="submit-form">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="map-inner ml_10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"
                            width="100%" height="500" frameborder="0" style="border:0; width: 100%"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact-style-two end --}}
    <x-Frontend.Sections.NextLevel />
</x-Frontend.Layouts.Master>
