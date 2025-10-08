<!DOCTYPE html>
<html lang="en">
<x-Frontend.Layouts.Partial.Headlinks />

<body>
    <div class="boxed_wrapper ltr">
        <x-Frontend.Layouts.Partial.Preloader />
        {{-- <x-Frontend.Layouts.Partial.PageDirection /> --}}
        <div class="chat-icon"><button type="button" class="chat-toggler"><i class="icon-26"></i></button></div>

        <x-Frontend.Layouts.Partial.ChatPopup />
        <x-Frontend.Layouts.Partial.SearchPopup />
    </div>

    {{-- main header --}}
    <header class="main-header">
        <x-Frontend.Layouts.Partial.Topbar />
        <x-Frontend.Layouts.Partial.Navbar />
        <x-Frontend.Layouts.Partial.StickyHeader />
    </header>
    {{-- main header end --}}
    <x-Frontend.Layouts.Partial.MobileMenu />
        {{ $slot }}
    <x-Frontend.Layouts.Partial.Footer />
    <x-Frontend.Layouts.Partial.ScrollToTop />
    <x-Frontend.Layouts.Partial.Footlinks />
</body>

</html>
