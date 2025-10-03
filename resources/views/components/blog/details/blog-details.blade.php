@props(['quote' => null, 'quoteAuthor' => null, 'additionalParagraph' => null, 'detailImages' => []])
<div class="blog2-details mb-40">
    @if (isset($quote))
        <div class="blog2-details-qoute mb-30">
            <p>{{ $quote }}</p>
            <div class="d-flex align-items-center justify-content-between mt-35">
                <h4 class="fs-15 blog2-details-qoute__name">{{ $quoteAuthor ?? 'Unknown' }}</h4>
                <div class="blog2-details-qoute__icon">
                    <i class="fa-solid fa-quote-right"></i>
                </div>
            </div>
        </div>
    @endif

    @if (isset($additionalParagraph))
        <p>
            {{ $additionalParagraph }}
        </p>
    @endif

    @if (isset($detailImages) && count($detailImages) > 0)
        <div class="row mt-30">
            @foreach ($detailImages as $index => $imagePath)
                <div class="col-md-6 mb-30 mb-lg-0 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="{{ asset($imagePath) }}" alt="Blog Detail Image {{ $index + 1 }}" />
                </div>
            @endforeach
        </div>
    @endif
</div>
