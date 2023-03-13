@php use Illuminate\Support\Arr; @endphp
  <div class="tt-block tt-block-text-with-image">

    <div class="tt-block-text-with-image__image">
      <img class="tt-cover" src="{{ Arr::get($blockData, 'image.url' ) }}" alt="">
    </div>

    <div class="tt-block-text-with-image__content">

      @if(Arr::has($blockData, 'content.title') && Arr::get($blockData, 'content.title' ) !== '')
        <h2 class="h2">
          {{ Arr::get($blockData, 'content.title' ) }}
        </h2>
      @endif

      <p>
        {!! Arr::get($blockData, 'content.paragraph' ) !!}
      </p>

    </div>
  </div>
