<section class="error-section pt_150 pb_150 centred bg-color-3">
    <div class="auto-container">
        <div class="content-box">
            {{-- <figure class="error-image mb_40">
                <img src="{{asset('assets/images/icons/error-1.png')}}" alt="">
            </figure> --}}
            <h2 class="my-5">This page is in under development.</h2>
            <a href="{{route('home')}}" class="theme-btn btn-one">Back to home</a>
        </div>
    </div>
</section>

@push('css')
    <style>
        .bg-color-3{
            background-color: #DEE0E2;
        }
    </style>
@endpush
