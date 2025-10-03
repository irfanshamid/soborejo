@props(['style'])

<div class="video1 {{ isset($style) ? $style : '' }}">
    <div class="video1__thumb">
        <img src="{{ asset("assets/images/video/video-thumb1_1.jpg") }}" alt="thumb">
    </div>
    <div class="video1-button">
        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="play-btn ripple popup-video">
            <i class="fa-solid fa-play"></i>
        </a>
    </div>
</div>
