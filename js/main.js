/**
 * 메인 GSAP 효과
 */
document.addEventListener("DOMContentLoaded", function () {
  "use strict";
  gsap.registerPlugin(ScrollTrigger);

  // main cont1
  function cont1() {
    gsap.to(".top__wr .bot__wr", {
      scrollTrigger: {
        trigger: ".cont1",
        start: "top top",
        scrub: 1.9,
      },
      xPercent: -200,
    });
  }

  // main cont2
  function cont2() {
    const pinnedImageWrappers = document.querySelectorAll("#cont2");

    if (pinnedImageWrappers) {
      pinnedImageWrappers.forEach((wrapper) => {
        const inner = wrapper.querySelector("#cont2 .row");
        const maskedBg = wrapper.querySelector(".masked_bg");

        // Inner 요소의 스크롤 애니메이션
        gsap.to(inner, {
          x: () =>
            -(inner.scrollWidth - document.documentElement.clientWidth) + "px",
          ease: "none",
          scrollTrigger: {
            start: "top",
            trigger: ".cont2",
            pin: true,
            scrub: 1,
            invalidateOnRefresh: true,
            end: () => `+=${inner.offsetWidth}`,
          },
        });

        // masked_bg 요소의 width 애니메이션
        if (maskedBg) {
          gsap.to(maskedBg, {
            width: () => `${inner.scrollWidth}px`, // 너비가 inner의 스크롤 너비에 맞춰 증가
            ease: "none",
            scrollTrigger: {
              start: "top",
              trigger: ".cont2",
              scrub: 1, // 스크롤에 따라 애니메이션이 동기화되도록 설정
              invalidateOnRefresh: true,
              end: () => `+=${inner.offsetWidth}`, // 스크롤 종료 시점 설정
            },
          });
        }
      });
    }
  }

  // main cont3
  function cont3() {
    const mm = gsap.matchMedia();

    mm.add("(min-width: 1640px)", () => {
      gsap.to(".cont3 .text__wr", {
        scrollTrigger: {
          trigger: ".cont3 .contents",
          start: "top bottom",
          scrub: 1.9,
        },
        yPercent: 250,
      });
    });
  }

  // main cont4
  function cont4() {
    const mm = gsap.matchMedia();

    mm.add("(min-width: 320px) and (max-width: 1239px)", () => {
      const mainAni = gsap.timeline();

      mainAni.fromTo(
        ".cont4 .img__box",
        {
          width: "280",
          height: "280",
          borderRadius: "100%",
        },
        {
          width: "100%",
          height: "100%",
          duration: 1,
          borderRadius: "0",
        }
      );

      ScrollTrigger.create({
        animation: mainAni,
        trigger: ".cont3",
        start: "bottom bottom",
        end: "bottom+=100% bottom",
        scrub: 1,
        pin: false,
        pinSpacing: false,
        anticipatePin: 1,
      });
    });

    mm.add("(min-width: 1240px)", () => {
      const mainAni = gsap.timeline();

      mainAni.fromTo(
        ".cont4 .img__box",
        {
          width: "450", // 시작값 조정
          height: "450", // 시작값 조정
          borderRadius: "100%",
        },
        {
          width: "100%",
          height: "100%",
          duration: 1,
          borderRadius: "0",
        }
      );

      ScrollTrigger.create({
        animation: mainAni,
        trigger: ".cont4",
        start: "top top",
        end: "bottom+=100% bottom",
        scrub: 1,
        pin: true,
        anticipatePin: 1,
      });
    });
  }

  cont1();
  cont2();
  cont3();
  cont4();

  // 텍스트 네모박스
  const gsapSq = gsap.utils.toArray(".title__square");
  gsapSq.forEach((gSq, i) => {
    const rotat = gsap.from(gSq, 3, {
      rotation: 720,
    });
    ScrollTrigger.create({
      trigger: gSq,
      animation: rotat,
      start: "top bottom",
      scrub: 1.9,
    });
  });
  
  // svis 
  function svis() {
    gsap.to('.svis__wr .rig .category', {
        scrollTrigger: {
            trigger: '.svis__wr',
            start: 'top top',
            scrub: 1.9
        },
        xPercent: -70,
        yPercent: 1100
    })
    gsap.to('.svis__wr .rig .title', {
        scrollTrigger: {
            trigger: '.svis__wr',
            start: 'top top',
            scrub: 1.9
        },
        xPercent: -70
    })
  }

  // svis 
  function newsletter__text() {
    gsap.to('.newsletter__bot__wr .top__text__box .newsletter__text', {
        scrollTrigger: {
            trigger: '.newsletter__top__wr',
            start: 'bottom bottom',
            scrub: true,
            duration: 5,
        },
        xPercent: -100
    })
  }

  svis();
  newsletter__text();
});


