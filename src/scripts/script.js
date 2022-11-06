const options = {
    type: "loop",
    perPage: 1,
    arrows: false,
    pagination: 'splide__pagination',
    grid: {
        rows: 2,
        cols: 3,
        gap: {
            row: '.25rem',
            col: '.25rem',
        },
    },
    breakpoints: {
        1200: {
            grid: {
                rows: 2,
                cols: 3
            }
        },
        768: {
            grid: {
                rows: 2,
                cols: 2
            }
        },
        576: {
            grid: {
                rows: 2,
                cols: 2
            }
        },
        320: {
            grid: {
                rows: 3,
                cols: 1
            }
        }
    }
};

// splide
(new Splide("#photos-galery", options)).mount(window.splide.Extensions);

// header
(new CHeader()).init();