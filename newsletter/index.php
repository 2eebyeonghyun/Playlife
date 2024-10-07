<?
$cheditor = "no";
$_dep = array(7, 1);
$_tit = array('NEWSLETTER', 'NEWSLETTER');

include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/common.php";
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/header.php"; ?>

    <!-- https://rota.agency/blog/ -->
    <main id="main" class="main">
        <section class="section newsletter__sec">
            <article class="cont cont1">
                <div class="newsletter__top__wr">
                    <div class="inner">
                        <div class="text__wr">
                            <div class="text__box">
                                <span class="cont__tit">뉴스레터</span>
                                <p class="cont__txt">소중한 자신의 가치를 찾도록 도와주는 마음 성장 콘텐츠를 뉴스레터로 만나보세요.</p>
                            </div>

                            <div class="swiper__navi__wr">
                                <div class="swiper__btn__wr">
                                    <div class="swiper__btn swiper-button-prev"><i class="axi axi-chevron-left"></i></div>
                                    <div class="swiper__btn swiper-button-next"><i class="axi axi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="cont__wr">
                            <div class="swiper newsletter__swiper">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__box">
                                                <img class="newsletter__img" src="<?= DIR ?>/img/essay/essay_img1.png" alt="">
                                            </div>
                                            <div class="infos__box">
                                                <p class="letter__date">2024.09.12</p>
                                                <span class="letter__tit">구독자님도 오늘 울고 싶은 하루였나요?</span>
                                                <p class="letter__txt">오늘날의 우리는 자리를 잘못 찾은 퍼즐 조각처럼 느껴지는 날들이 더 많은 것 같습니다. 이번 뉴스레터는 스스로가 어느 방향으로 돌려도 덜컥거리는 퍼즐 조각처럼 느껴지는 분들을 위해 준비했습니다.</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__box">
                                                <img class="newsletter__img" src="<?= DIR ?>/img/essay/essay_img2.jpg" alt="">
                                            </div>
                                            <div class="infos__box">
                                                <p class="letter__date">2024.08.29</p>
                                                <span class="letter__tit">방학 없는 당신을 위한 일상의 한 텀</span>
                                                <p class="letter__txt">우리는 매일 고속도로를 달리듯 바쁘지만, 정작 출구는 없는 것 같아요. 이번 뉴스레터는 방학이 없는 어른들에게도 작은 숨구멍을 찾아주기 위해 준비했습니다. 잠깐 멈춰서, 마음에 작은 놀이터를 만들어보는 건 어떨까요?</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__box">
                                                <img class="newsletter__img" src="<?= DIR ?>/img/essay/essay_img3.png" alt="">
                                            </div>
                                            <div class="infos__box">
                                                <p class="letter__date">2024.08.08</p>
                                                <span class="letter__tit">어서오세요, 새로운 플레이라이프입니다</span>
                                                <p class="letter__txt">플레이라이프 웹진이 새롭게 개편됐습니다. 여러분들의 마음 성장의 여정이 이전보다 훨씬 편하고, 즐거울 수 있도록 하는데 집중했습니다. 새롭게 탈바꿈한 플레이라이프와 함께하는 독자님들의 마음 성장의 여정이 한층 쾌적해지길 바랍니다.</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__box">
                                                <img class="newsletter__img" src="<?= DIR ?>/img/essay/essay_img4.png" alt="">
                                            </div>
                                            <div class="infos__box">
                                                <p class="letter__date">2024.07.25</p>
                                                <span class="letter__tit">나, 지금 잘 살고 있나?</span>
                                                <p class="letter__txt">이번 달 인터뷰를 진행했던 김신지 작가는 기록을 '미래의 '나'에게 부쳐두는 편지'라고 정의했습니다. 미래의 '나'는 '어떤 것을 의미있어 할까?'를 생각하며 현재를 살고, 그것을 기록하기 때문이라고 말하면서요. 이 말은 '나'의 속도와 방향으로 삶을 살아가려면 기록이 필요하다는 의미이기도 합니다. 이번 뉴스레터는 기록이 삶에 미치는 긍정적인 힘을 이야기합니다. 삶의 방향을 찾고 싶다면 오늘을 기록해 보세요.</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="swiper-slide">
                                        <a href="#none">
                                            <div class="img__box">
                                                <img class="newsletter__img" src="<?= DIR ?>/img/essay/essay_img1.png" alt="">
                                            </div>
                                            <div class="infos__box">
                                                <p class="letter__date">2024.07.11</p>
                                                <span class="letter__tit">혹시 지금 불안한가요?</span>
                                                <p class="letter__txt">'불안'이나 '실패'가 두려우신가요? 그 두려움은 막연한 것일지도 모릅니다. 모든 것에는 양면이 존재하듯 마냥 부정적일 것만 같던 불안이나 실패도 성장과 발전의 원동력이 되거든요. 이번 뉴스레터에서는 실패와 불안을 인정하고, '나'를 지혜롭게 돌보는 기술을 소개합니다. 불안과 실패에서 느끼는 무기력을 건강하게 극복하는 방법들로 오늘을 의미 있게 채워 보세요.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="newsletter__bot__wr">
                    <div class="inner">
                        <div class="top__text__box">
                            <span class="newsletter__text">Playlife Newsletter</span>
                        </div>

                        <div class="bot__form__box">
                            <div class="lef">
                                <div class="row">
                                    <span class="nl__tit">개인정보 수집 및 이용약관</span>

                                    <div class="scroll__box">
                                        <ul class="list">
                                            <li>
                                                <span class="list_tit">1. 목적</span>
                                                <ul class="sub2__list">
                                                    <li>
                                                        <p class="list_txt">생명보험사회공헌재단은 플레이라이프 플랫폼에서 다뤄지는 개개인 또는 협력회사와의 개인정보에 관한 보호규정을 정하고 실천함으로써 소중한 개인정보의 보호에 힘쓰고 정보의 유출방지를 위해 체계적이고 적극적으로 대처합니다.</p>
                                                        <p class="list_txt">본 약관은 생명보험사회공헌재단(이하 ‘재단’)이 제공하는 플레이라이프 서비스(이하 ‘서비스’)를 이용함에 있어 재단과 회원과의 권리, 의무, 및 책임 사항, 서비스 이용 조건과 절차 사항, 기타 필요한 사항을 규정함을 목적으로 합니다.</p>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="list_tit">2. 적용범위</span>
                                                <ul class="sub2__list">
                                                    <li>
                                                        <p class="list_txt">본 규정은 서비스에서 취급하는 모든 개인정보에 대해 적용됩니다.</p>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="list_tit">3. 개인정보 보호정책의 게시</span>
                                                <ul class="sub2__list">
                                                    <li>
                                                        <p class="list_txt">아래의 당사 개인정보 보호정책은 서비스의 홈페이지(https://lbh6154.cafe24.com/playlife/newsletter/) 에 게시하여 누구든지 열람 가능합니다.</p>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="rig">
                                <form action="?" method="post" name="nlFrm" id="newsletterFrm" class="newsletter__frm">
                                    <div class="row">
                                        <span class="nl__tit">이름</span>
                                        <input type="text" name="nlName" id="newsletterName" class="newsletter__name input__" placeholder="이름을 입력해주세요.">
                                    </div>

                                    <div class="row">
                                        <span class="nl__tit">이메일</span>
                                        <div class="email__wr">
                                            <input type="text" name="nlEmail1" id="newsletterEmail1" class="newsletter__em1 input__" placeholder="이메일 주소를 입력해주세요">

                                            <div class="email__wr2">
                                                <input type="text" name="nlEmail2" id="newsletterEmail2" class="newsletter__em2 input__" placeholder="이메일 주소를 입력해주세요">
                                                <select name="nlSelect" id="newsletterSelect" class="newsletter__select input__ select__">
                                                    <option value="1">직접입력</option>
                                                    <option value="naver.com">naver.com</option>
                                                    <option value="hanmail.net">hanmail.net</option>
                                                    <option value="nate.com">nate.com</option>
                                                    <option value="yahoo.co.kr">yahoo.co.kr</option>
                                                    <option value="gmail.com">gmail.com</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row__flex">
                                        <label for="newsletterCheck">
                                            <input type="checkbox" id="newsletterCheck" class="newsletter__check">
                                            <span class="data__link">개인정보 수집 및 이용약관</span>
                                        </label>
                                    </div>

                                    <div class="btn__row">
                                        <button type="submit" class="nl__submitBtn">Subscribe <span class="icon"><i class="axi axi-chevron-right"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <? include $_SERVER['DOCUMENT_ROOT'] . "/playlife/inc/footer.php"; ?>
</body>

</html>