@props(['counterData', 'style'])

@php
    $counters = [
        [
            'number' => $counterData->total_counter_1,
            'label' => $counterData->title_counter_1,
        ],
        [
            'number' => $counterData->total_counter_2,
            'label' => $counterData->title_counter_2,
        ],
        [
            'number' => $counterData->total_counter_3,
            'label' => $counterData->title_counter_3,
        ],
    ];
@endphp

<section class="counter {{ isset($style) ? $style : 'pt-60 pb-0' }} fix">
    <div class="container">
        <div class="counter__text">
            <p>{!! $counterData->content !!}</p>
        </div>

        <div class="counter-item">
            @foreach ($counters as $counter)
                <div class="counter-item-box">
                    <h3 class="counter-item-box__value">
                        <span class="counter-number">{{ $counter['number'] }}</span>
                    </h3>
                    <div class="counter-item-box__label">
                        <p>{{ $counter['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
