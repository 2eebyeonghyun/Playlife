/**
 * 헤더 자바스크립트
 */
$(function () {
  let lastScrollTop = 0,
    menuWrapper = document.getElementById("header");
  window.addEventListener(
    "scroll",
    function () {
      let e = window.pageYOffset || document.documentElement.scrollTop;
      e > lastScrollTop && e > 100
        ? (menuWrapper.style.transform = "translateY(-100%)")
        : (menuWrapper.style.transform = "translateY(0)"),
        (lastScrollTop = e <= 0 ? 0 : e);
    },
    { passive: !0 }
  ),
    window.addEventListener(
      "mousemove",
      function (e) {
        e.clientY <= 100 && (menuWrapper.style.transform = "translateY(0)");
      },
      { passive: !0 }
    );
});

window.addEventListener("scroll", function () {
  var header = document.getElementById("header");

  if (window.scrollY > 50) {
    // 스크롤이 50px 이상일 때
    header.classList.add("scroll");
  } else {
    header.classList.remove("scroll");
  }
});

/**
 * 헤더 메뉴 버튼 자바스크립트
 */
document.addEventListener("DOMContentLoaded", function () {
  const linkBtn = document.querySelector(".header .sitemap__btn");
  const sitemapWr = document.querySelector(".sitemap__wr");
  const header = document.querySelector(".header");

  linkBtn.addEventListener("click", function (event) {
    event.preventDefault();
    sitemapWr.classList.toggle("open");
    header.classList.toggle("open");
  });
});

/**
 * 이메일 셀렉트 박스 자바스크립트
 */
$(function () {
  $("#subSelectEmail").change(function () {
    $("#subSelectEmail option:selected").each(function () {
      if ($(this).val() == "1") {
        //직접입력일 경우
        $("#subEmail2").val(""); //값 초기화
        $("#subEmail2").attr("disabled", false); //활성화
      } else {
        //직접입력이 아닐경우
        $("#subEmail2").val($(this).text()); //선택값 입력
        $("#subEmail2").attr("disabled", true); //비활성화
      }
    });
  });
});

/**
 * clip 클래스 화면 노출 시 active 클래스 추가
 */
document.addEventListener("DOMContentLoaded", function () {
  const targets = document.querySelectorAll(".clip__");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        } else {
          entry.target.classList.remove("active");
        }
      });
    },
    {
      threshold: 0.2, // 요소가 10% 이상 보일 때 클래스 추가
    }
  );

  targets.forEach((target) => {
    observer.observe(target);
  });
});

/**
 * 스와이퍼 슬라이드 자바스크립트
 */
$(function () {
  /** 메인 상단 슬라이드 */
  var swiper = new Swiper(".mainSwiper", {
    navigation: {
      nextEl: ".mainSwiper .swiper-button-next",
      prevEl: ".mainSwiper .swiper-button-prev",
    },
  });

  /** 메인 사람 슬라이드 */
  var swiper = new Swiper(".peopleSwiper", {
    spaceBetween: 70,
    pagination: {
      el: ".cont7 .swiper__navi__wr .swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
        pagination: {
          el: ".cont7 .swiper__navi__wr .swiper-pagination",
        },
      },
      1440: {
        slidesPerView: 3,
      },
    },
  });

  /** people view 슬라이드 */
  var swiper = new Swiper(".people__swiper", {
    spaceBetween: 35,
    pagination: {
      el: ".people__sec .cont1 .swiper__navi__wr .swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
        pagination: {
          el: ".people__sec .cont1 .swiper__navi__wr .swiper-pagination",
        },
      },
      1440: {
        slidesPerView: 3,
      },
    },
  });

  /** ARCHIVES 슬라이드 */
  var swiper = new Swiper(".arc__swiper", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".arc__swiper__wr .swiper__navi__wr .swiper-button-next",
      prevEl: ".arc__swiper__wr .swiper__navi__wr .swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      430: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
    },
  });

  /** QUOTE 슬라이드 */
  $(document).ready(function () {
    slideAct();
  });

  function slideAct() {
    var view = 0; //보이는 슬라이드 개수
    var realInx = 0; //현재 페이지
    var swiper = undefined;

    //디바이스 체크
    var winWChk = "";
    $(window).on("load resize", function () {
      var winW = window.innerWidth;
      if (winWChk != "mo" && winW <= 768) {
        //모바일 버전으로 전환할 때
        slideList();
        winWChk = "mo";
      }
      if (winWChk != "pc" && winW >= 769) {
        //PC 버전으로 전환할 때
        slideList();
        winWChk = "pc";
      }
    });

    function slideList() {
      //리스트 초기화
      if ($(".quote__swiper .list").parent().hasClass("swiper-slide")) {
        $(".quote__swiper .swiper-slide-duplicate").remove();
        $(".quote__swiper .list").unwrap("swiper-slide");
      }

      //보이는 슬라이드 개수 설정
      if (window.innerWidth <= 430) {
        // 430px 이하
        view = 1;
      } else if (window.innerWidth <= 1240) {
        // 1240px 이하
        view = 2;
      } else {
        // 1240px 이상
        view = 6;
      }

      //리스트 그룹 생성 (swiper-slide element 추가)
      var num = 0;
      $(".quote__swiper")
        .find(".list")
        .each(function (i) {
          $(this).addClass("list" + Math.floor((i + view) / view));
          num = Math.floor((i + view) / view);
        })
        .promise()
        .done(function () {
          for (var i = 1; i < num + 1; i++) {
            $(".quote__swiper")
              .find(".list" + i + "")
              .wrapAll('<ul class="swiper-slide"></ul>');
            $(".quote__swiper")
              .find(".list" + i + "")
              .removeClass("list" + i + "");
          }
        });

      sliderStart();
    }

    //슬라이드 시작
    function sliderStart() {
      //슬라이드 초기화
      if (swiper != undefined) {
        swiper.destroy();
        swiper == undefined;
      }

      //슬라이드 실행
      swiper = new Swiper(".quote__swiper .inner", {
        slidesPerView: 1,
        initialSlide: Math.floor(realInx / view),
        resistanceRatio: 0,
        navigation: {
          nextEl: $(".quote__sec").find(".swiper-button-next")[0],
          prevEl: $(".quote__sec").find(".swiper-button-prev")[0],
        },
        on: {
          slideChange: function () {
            realInx = this.realIndex * view;
          },
        },
      });
    }
  }
  
  /** 뉴스레터 슬라이드 */
  var swiper = new Swiper(".newsletter__swiper", {
    spaceBetween: 40,
    navigation: {
      nextEl: ".newsletter__top__wr .swiper__navi__wr .swiper-button-next",
      prevEl: ".newsletter__top__wr .swiper__navi__wr .swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1240: {
        slidesPerView: 3,
      },
    },
  });
});

/**
 * 탭 메뉴 자바스크립트
 */
function contentsTab(index) {
  var tabs = document.querySelectorAll(".tab__wr .list .tab__item");
  var tabContents = document.querySelectorAll(
    ".contents__view__box .tab__inner__wr .tab__inner"
  );

  tabs.forEach(function (tab) {
    tab.classList.remove("active");
  });
  tabContents.forEach(function (tabContent) {
    tabContent.classList.remove("active");
  });

  tabs[index].classList.add("active");
  tabContents[index].classList.add("active");
}

// AOS 자바스크립트
$(function () {
  AOS.init({
    once: true,
  });
});
