@props(['vision'])
@props(['mission'])

<section class="about1 section-padding  pb-65 fix bg-theme2" id="company">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="section-top section-top--wrapper brBt-1 pb-30 mb-30 pt-40">
                    <div class="title-area">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">VISION</h2>
                    </div>
                </div>
                <p class="about1__desc">{!! $vision->description !!}</p>
                <div class="about1__thumb about1__thumb--one wow img-custom-anim-top pt-40" data-wow-duration="1s" data-wow-delay=".1s">
                    <img 
                        src="{{ asset('storage/' . $vision->image) }}" 
                        alt="{{ $vision->title ?? 'Image' }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about1__thumb about1__thumb--two wow img-custom-anim-top  " data-wow-duration="1s" data-wow-delay=".1s">
                    <img 
                        src="{{ asset('storage/' . $mission->image) }}" 
                        alt="{{ $mission->title ?? 'Image' }}">
                </div>
                <div class="section-top section-top--wrapper brBt-1 pb-30 mb-30 pt-40">
                    <div class="title-area">
                        <div class="square-icon"></div>
                        <h2 class="section-top__title wow img-custom-anim-zoom-out" data-wow-duration="1s" data-wow-delay=".1s">MISSION</h2>
                    </div>
                </div>
                <div class="about1__desc2">
                    <p>{!! $mission->description !!}</p>
                </div>
            </div>
        </div>
        <!-- <div class="about1-counterBox">
            <div class="about1-counterBox__numb">10k+</div>
            <div class="about1-counterBox__text">Complete project</div>
        </div> -->
    </div>
</section>
