<article class="article">
    <header class="article__header">
        <div class="article__title">
            @include('components.atoms.title.default')
        </div>
        <div class="article__intro">
            @include('components.atoms.intro.default')
        </div>
    </header>
    <div class="article__section">
        @include('components.molecules.text-block.default')
    </div>
    <div class="article__section">
        @include('components.molecules.text-block.default')
    </div>
    <div class="article__section article__section--wide">
        @include('components.molecules.two-col.default')
    </div>
    <div class="article__section">
        @include('components.molecules.text-block.default')
    </div>
    <div class="article__section article__section--small">
        @include('components.atoms.quote.default')
    </div>
</article>
