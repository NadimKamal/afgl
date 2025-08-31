<!-- banner-section -->
<section class="banner-section p_relative">
    {{-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div> --}}
    <!-- Carousel -->
    <div id="demo" class="carousel slide">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <!-- Image slide (2s interval) -->
            <div class="carousel-item active">
                <img src="{{asset('assets/images/banner/slide6.jpg')}}" alt="Los Angeles" class="d-block w-100">
            </div>
        
            <!-- Video slide (disable interval, wait for JS) -->
            <div class="carousel-item" data-bs-interval="false">
                <video id="carouselVideo" class="d-block w-100" muted playsinline>
                    <source src="{{asset('assets/videos/banner/golf1.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        
            <!-- Image slides (2s interval) -->
            <div class="carousel-item">
                <img src="{{asset('assets/images/banner/slide7.png')}}" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/banner/slide8.jpg')}}" alt="New York" class="d-block w-100">
            </div>
        </div>        

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
<!-- banner-section end -->


@push('css')
    <style>
    .carousel-item img,
    .carousel-item video {
    height: 75vh;
    width: 100%;
    object-fit: cover;   /* show full image, no crop */
}
    </style>
@endpush
@push('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('demo');

    // Create the carousel with no auto-interval (we'll manage it)
    const carousel = new bootstrap.Carousel(el, {
        interval: false,
        ride: false,
        pause: false, // don't pause on hover
        wrap: true
    });

    let timerId = null;
    let currentVideo = null;

    function clearTimer() {
        if (timerId) {
            clearTimeout(timerId);
            timerId = null;
        }
    }

    function stopVideoListener() {
        if (currentVideo) {
            currentVideo.pause();
            // remove previous 'ended' handler by cloning (simple way to drop listeners)
            const clone = currentVideo.cloneNode(true);
            currentVideo.replaceWith(clone);
            currentVideo = null;
        }
    }

    function scheduleNext() {
        clearTimer();
        stopVideoListener();

        const active = el.querySelector('.carousel-item.active');
        const vid = active ? active.querySelector('video') : null;

        if (vid) {
            // Video slide logic: wait until it ends
            currentVideo = vid;
            // Always start from beginning and make sure it's muted for autoplay
            currentVideo.muted = true;
            try { currentVideo.currentTime = 0; } catch (_) {}
            const playPromise = currentVideo.play?.();
            if (playPromise && typeof playPromise.then === 'function') {
                playPromise.catch(() => {/* ignore autoplay blocking if any */});
            }
            currentVideo.addEventListener('ended', () => {
                carousel.next();
            }, { once: true });
        } else {
            // Image slide logic: advance after 2 seconds
            timerId = setTimeout(() => {
                carousel.next();
            }, 3000);
        }
    }

    // When a slide is about to change, clear timers & video listeners
    el.addEventListener('slide.bs.carousel', () => {
        clearTimer();
        stopVideoListener();
    });

    // When a new slide finished showing, schedule what happens next
    el.addEventListener('slid.bs.carousel', scheduleNext);

    // Kick things off for the initial active slide
    scheduleNext();
});
</script>
@endpush

