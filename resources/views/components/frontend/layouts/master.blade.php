<!DOCTYPE html>
<html lang="en">
<x-Frontend.Layouts.Partial.Headlinks />

<body>

    <div class="boxed_wrapper ltr">
        <div class="loader-wrap">
            <x-Frontend.Layouts.Partial.Preloader />
        </div>
        <div class="chat-icon"><button type="button" class="chat-toggler"><i class="icon-26"></i></button></div>

        <div id="chat-popup" class="chat-popup">
            <x-Frontend.Layouts.Partial.ChatPopup />
        </div>
        <div id="search-popup" class="search-popup">
            <x-Frontend.Layouts.Partial.SearchPopup />
        </div>

        {{-- main header --}}
        <header class="main-header">
            {{-- topbar --}}
            <div class="header-top">
                <x-Frontend.Layouts.Partial.Topbar />
            </div>
            {{-- topbar end --}}
            {{-- navbar --}}
            <div class="header-lower">
                <x-Frontend.Layouts.Partial.Navbar />
            </div>
            {{-- navbar end --}}

            {{-- sticky Header --}}
            <div class="sticky-header">
                <x-Frontend.Layouts.Partial.StickyHeader />
            </div>
            {{-- sticky Header End --}}
        </header>
        {{-- main header end --}}

        {{-- Mobile menu --}}
        <div class="mobile-menu">
            <x-Frontend.Layouts.Partial.MobileMenu />
        </div>
        {{-- Mobile menu end --}}
        {{ $slot }}
        <x-Frontend.Layouts.Partial.ScrollToTop />
    </div>
    <x-Frontend.Layouts.Partial.Footlinks />
</body>

</html>
