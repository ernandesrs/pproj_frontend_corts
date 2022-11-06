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

let photoViewModal = document.querySelector("#photo-view");
if (photoViewModal) {
    let loadingArea = photoViewModal.querySelector(".loading-area");
    let imageArea = photoViewModal.querySelector(".image-area");

    photoViewModal.addEventListener("shown.bs.modal", (event) => {
        let clickedLink = event.relatedTarget;
        let imageElement = document.createElement("img");

        imageElement.classList.add("img-fluid");
        imageElement.src = clickedLink.getAttribute("data-image");

        loadingArea.classList.add("d-none");
        imageArea.classList.remove("d-none");
        imageArea.append(imageElement);
    });

    photoViewModal.addEventListener("hidden.bs.modal", () => {
        loadingArea.classList.remove("d-none");
        imageArea.classList.add("d-none");
        imageArea.innerHTML = "";
    });
}