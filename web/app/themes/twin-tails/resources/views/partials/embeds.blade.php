@php
  /** @var array $embeds */
@endphp

@if($embeds)
  <div class="tt-wrapper">
    <div class="tt-media">
      <div class="tt-media-list">
        @foreach($embeds as $embed)
          <div class="tt-media-list__item">
            <a target="_blank"
               href="{{ Arr::get($embed, 'link') }}">
              <img class="tt-cover" src="{{ Arr::get($embed, 'image') }}"
                   alt="{{ Arr::get($embed, 'title') }} thumbnail">
              <p>{{ Arr::get($embed, 'title') }}</p>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endif
