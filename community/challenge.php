<?
$cheditor = "no";
$_dep = array(2, 2);
$_tit = array('Community', 'Challenge');

include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/common.php";
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/header.php"; ?>

    <!-- https://www.evolutionaryscale.ai/ -->
    <!-- https://www.soundethics.org/updates/the-eu-ai-act -->

    <main id="main" class="main">
        <section class="section community__sec work__sec">
            <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/svis.php"; ?>

            <article class="cont cont1 arc__swiper__wr">
                <div class="inner">
                    <div class="contents__view__box">
                        <div class="lef">
                            <span class="contents__tit">ARCHIVES</span>

                            <div class="swiper__navi__wr">
                                <div class="swiper__btn__wr">
                                    <div class="swiper__btn swiper-button-prev"><i class="axi axi-chevron-left"></i></div>
                                    <div class="swiper__btn swiper-button-next"><i class="axi axi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <div class="swiper arc__swiper">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__wr">
                                                <img src="<?= DIR ?>/img/community/arc__img1.png" alt="하루 5분 감정기록 챌린지 [9월]">
                                                <span class="arc__state">모집중</span>
                                            </div>
                                            <div class="infos__wr">
                                                <span class="infos__tit">하루 5분 감정기록 챌린지 [9월]</span>
                                                <p class="infos__date">9/24 ~ 10/23 온라인 인증</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__wr">
                                                <img src="<?= DIR ?>/img/community/community_img1.jpg" alt="[도파민 중독에서 벗어나기] 스마트폰을 멈추는 하루 1시간 [7월]">
                                                <span class="arc__state disabled">모집마감</span>
                                            </div>
                                            <div class="infos__wr">
                                                <span class="infos__tit">[도파민 중독에서 벗어나기] 스마트폰을 멈추는 하루 1시간 [7월]</span>
                                                <p class="infos__date">7/19 ~ 8/17 온라인 인증</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__wr">
                                                <img src="<?= DIR ?>/img/community/community_img2.png" alt="하루 5분 감정기록 챌린지 [6월]">
                                                <span class="arc__state disabled">모집마감</span>
                                            </div>
                                            <div class="infos__wr">
                                                <span class="infos__tit">하루 5분 감정기록 챌린지 [6월]</span>
                                                <p class="infos__date">6/3 ~ 6/11 온라인 인증</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__wr">
                                                <img src="<?= DIR ?>/img/community/community_img3.png" alt="지친 마음의 회복을 위한 감정드로잉 [6월]">
                                                <span class="arc__state disabled">모집마감</span>
                                            </div>
                                            <div class="infos__wr">
                                                <span class="infos__tit">지친 마음의 회복을 위한 감정드로잉 [6월]</span>
                                                <p class="infos__date">6/12 온라인 진행</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__wr">
                                                <img src="<?= DIR ?>/img/community/community_img4.jpeg" alt="">
                                                <span class="arc__state disabled">모집마감</span>
                                            </div>
                                            <div class="infos__wr">
                                                <span class="infos__tit"></span>
                                                <p class="infos__date">9/5 온라인 진행</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </article>

            <article class="cont cont2">
                <div class="inner">
                    <div class="contents__view__box">
                        <div class="lef">
                            <span class="contents__tit">Review</span>
                        </div>

                        <div class="rig">
                            <ul class="contents__list">
                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">하루 5분 감정기록 챌린지 [6월]</p>
                                        <span class="infos__tit">하루 님의 후기</span>
                                        <p class="infos__writer">By 하루</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">스마트폰을 멈추는 하루 1시간 [2월]</p>
                                        <span class="infos__tit">Na나나 님의 후기</span>
                                        <p class="infos__writer">By Na나나</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">일상이 정리되는 미니멀라이프 [5월]</p>
                                        <span class="infos__tit">일상의 기준을 다잡아 준 정리의 힘</span>
                                        <p class="infos__writer">By 심플하게</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">위로의 미장센 : 내 삶을 영화로 써 본다면 [2월]</p>
                                        <span class="infos__tit">상자 속 이야기를 꺼내 ‘다시’ 써보는 일</span>
                                        <p class="infos__writer">By 마린</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">상처 주고 상처 받지 않는 대화법 [2월]</p>
                                        <span class="infos__tit">이제는 내 의견을 표현할 수 있어요</span>
                                        <p class="infos__writer">By 젼</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt"></p>
                                        <span class="infos__tit">좋은 대화의 시작, 서로에 대한 '이해'</span>
                                        <p class="infos__writer">By 리리</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">지친 마음의 회복을 위한 감정드로잉 [6월]</p>
                                        <span class="infos__tit">내면의 ‘나’와 진정한 소통을 했던 감정 드로잉</span>
                                        <p class="infos__writer">By 리아</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">일상이 정리되는 미니멀라이프 [5월]</p>
                                        <span class="infos__tit">일상의 기준을 다잡아 준 정리의 힘</span>
                                        <p class="infos__writer">By 심플하게</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">위로의 미장센 : 내 삶을 영화로 써 본다면 [2월]</p>
                                        <span class="infos__tit">상자 속 이야기를 꺼내 ‘다시’ 써보는 일</span>
                                        <p class="infos__writer">By 마린</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#none">
                                        <p class="infos__top__txt">상처 주고 상처 받지 않는 대화법 [2월]</p>
                                        <span class="infos__tit">이제는 내 의견을 표현할 수 있어요</span>
                                        <p class="infos__writer">By 젼</p>
                                    </a>
                                </li>
                            </ul>

                            <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/pagenation.php"; ?>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/footer.php"; ?>
</body>

</html>