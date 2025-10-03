@props(['counterData', 'style', 'hasCounterText'])

<section class="counter {{ isset($style) ? $style : 'pt-60 pb-0' }} fix">
    <div class="container">
        @if (isset($hasCounterText) && $hasCounterText == true)
            <div class="counter__text">
                <p>{{ $counterData->text_content }}</p>
            </div>
        @endif

        <div class="counter-item">
            @foreach ($counterData->counters as $counter)
                <div class="counter-item-box">
                    <h3 class="counter-item-box__value">
                        {{ $counter->value_prefix }}<span class="counter-number">{{ $counter->number }}</span>{{ $counter->value_suffix }}
                    </h3>
                    <div class="counter-item-box__label">
                        <p>{{ $counter->label }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
