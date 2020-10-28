<div class="layout">
    <div class="layout__nav">
        <div class="layout__nav-wrap">
            @include('components.molecules.nav.default')
        </div>
        <div class="layout__close">
            @include('components.atoms.close-button.default')
        </div>
    </div>
    <div class="layout__side">
        @include('components.atoms.hamburger.default')
    </div>
    <div class="layout__content">
        @include('components.organisms.page.default')
    </div>
</div>
