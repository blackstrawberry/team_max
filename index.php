<?php global $asset_uri;?>
<?php get_header();?>
<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide img1"><img src="<?php echo $asset_uri;?>/img/1.jpeg"></div>
            <div class="swiper-slide img2"><img src="<?php echo $asset_uri;?>/img/2.jpeg"></div>
            <div class="swiper-slide img3"><img src="<?php echo $asset_uri;?>/img/3.jpeg"></div>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>
    <div class="sec1">
        <div class="con1">
            <p class="title"><span>활동 지역</span></p>
            <div class="details">서율시 용산, 마포</div>
        </div>

        <div class="con2">
            <p class="title"><span>활동 시간</span></p>
            <div class="details">공식연습 : 2달에 한번<br>비공식연습 : 매주 토 or 일요일 오전10 ~ 12시</div>
        </div>

        <div class="con3">
            <p class="title"><span>목표</span></p>
            <div class="details">
                <p>1. 농구 대회 참가</p>
                <p>2. 멤버 개개인의 성장</p>
            </div>
        </div>

        <div class="con4">
            <p class="title"><span>추구하는 가치</span></p>
            <ul class="detail">
                <li><span>&#x1F91D;</span>상호 존중</li>
                <li>&#8680;</li>
                <li>실력과 상관없이 서로를 존중하는 문화를 만듭니다.</li>
            </ul>
            <ul class="detail">
                <li><span>&#128293;</span>상승 지향</li>
                <li>&#8680;</li>
                <li>현실에 안주하지 않고 끊임없이 높은 곳을 바라봅니다.</li>
            </ul>
            <ul class="detail">
                <li><span>&#128261;</span>자기 신뢰</li>
                <li>&#8680;</li>
                <li>노력하면 얼마든지 성공할 수 있다는 마음 가짐을 가집니다.</li>
            </ul>
        </div>
    </div>
    <div class="top_btn">
        <a href="#">
            <img class="aside_arrow" src="<?php echo $asset_uri;?>/img/aside_arrow.svg">
            <img class="aside_img" id="aside_img" src="<?php echo $asset_uri;?>/img/aside.svg">
        </a>
    </div>
</main>
<?php get_footer()?>