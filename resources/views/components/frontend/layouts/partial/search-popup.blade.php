{{-- Search Popup --}}
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box">
            <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/images/logo-3.png') }}"
                        alt=""></a>
            </figure>
            <div class="close-search"><span class="fas fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Type your keyword and hit" required>
                            <button type="submit"><i class="icon-4"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
