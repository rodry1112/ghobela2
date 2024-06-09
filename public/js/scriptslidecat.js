var swiper = new Swiper (".slideprodcontenido", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 2,
    loop: true,
    loopFillGroupWithBlack: true,
    pagination: {
        el: ".ps",
        clickable: true,
    },
    navigation: {
        nextEl: ".ps",
        prevEl: ".ps",
    },
    breakpoints:{
        500: {
            slidesPerView: 1,
        },
        1445: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
    },
    
    });
    
    var swiper = new Swiper (".slideContenido", {
        slidesPerView: 3,
        spaceBetween: 40,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlack: true,
        pagination: {
            el: ".c",
            clickable: true,
        },
        navigation: {
            nextEl: ".c",
            prevEl: ".c",
        },
        breakpoints:{
            0: {
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
            720: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
        });