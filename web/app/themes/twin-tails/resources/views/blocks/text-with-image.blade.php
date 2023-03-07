@php use Illuminate\Support\Arr; @endphp
  <div class="flex flex-col desktop:flex-row desktop:items-center gap-24">
    <div class="w-full desktop:w-1/2 flex justify-center items-center">
      <img src="{{ Arr::get($blockData, 'image.url' ) }}" alt="">
    </div>
    <div class="w-full desktop:w-1/2">

      @if(Arr::has($blockData, 'content.title') && Arr::get($blockData, 'content.title' ) !== '')
        <h2 class="h2">
          {{ Arr::get($blockData, 'content.title' ) }}
        </h2>
      @endif

      <p class="p">
        {!! Arr::get($blockData, 'content.paragraph' ) !!}
      </p>

    </div>
  </div>
