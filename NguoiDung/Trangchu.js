$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

    $('.main-khung .main-khung-box .khung3 .khung3-1 .items-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: `<button type='button' class='slick-prev pull-left slick-arrow'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>`,
        nextArrow: `<button type='button' class='slick-next pull-right slick-arrow'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>`,
        dots: true,
    });


    $(".box-smart-list-location .box-smart-item").on('click', function() {

        var filter = $(this).data('filter');
        $(".main-khung .main-khung-box .khung3 .khung3-1 div.items-slider").slick('slickUnfilter');

        if (filter == 'ngau-nhien') {

            $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").css({
                "display": "none",
            });

            $("div.items-slider").css({
                "display": "block",
            });

            $(".main-khung .main-khung-box .khung3 .khung3-1 div.items-slider").slick('slickUnfilter');

            $(".box-smart-item").css({
                "background": "#f4f4f4",
                "border": "1px solid #eee",
                // "border-radius": "20px",
                "color": "#999",
            });
            $(".active").css({
                "background": "#00b4d8",
                "border": "1px solid #00b14f",
                "color": "#fff",
            });

        } else if (filter == 'ha-noi' || filter == 'ho-chi-minh' || filter == 'mien-bac' || filter == 'mien-nam') {


            $(".main-khung .main-khung-box .khung3 .khung3-1 div.items-slider").css({
                "display": "none",
            });
            $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").css({
                "display": "block",
            });


            if (filter == 'ha-noi') {

                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickUnfilter');

                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickFilter', '.ha-noi');

                $(".box-smart-item").css({
                    "background": "#f4f4f4",
                    "border": "1px solid #eee",
                    // "border-radius": "20px",
                    "color": "#999",
                });
                $(".ha_noi").css({
                    "background": "#00b4d8",
                    "border": "1px solid #00b14f",
                    "color": "#fff",
                })
            } else if (filter == 'ho-chi-minh') {

                // $("div.items-slider").css({
                //     "display": "none",
                // });
                // $("section.items-slider").css({
                //     "display": "block",
                // });
                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickUnfilter');

                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickFilter', '.ho-chi-minh');


                $(".box-smart-item").css({
                    "background": "#f4f4f4",
                    "border": "1px solid #eee",
                    // "border-radius": "20px",
                    "color": "#999",
                });
                $(".ho_chi_minh").css({
                    "background": "#00b4d8",
                    "border": "1px solid #00b14f",
                    "color": "#fff",
                })
            } else if (filter == 'mien-bac') {

                // $("div.items-slider").css({
                //     "display": "none",
                // });
                // $("section.items-slider").css({
                //     "display": "block",
                // });
                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickUnfilter');
                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickFilter', '.mien-bac');



                $(".box-smart-item").css({
                    "background": "#f4f4f4",
                    "border": "1px solid #eee",
                    // "border-radius": "20px",
                    "color": "#999",
                });
                $(".mien_bac").css({
                    "background": "#00b4d8",
                    "border": "1px solid #00b4d8",
                    "color": "#fff",
                })
            } else if (filter == 'mien-nam') {


                // $("div.items-slider").css({
                //     "display": "none",
                // });
                // $("section.items-slider").css({
                //     "display": "block",
                // });
                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickUnfilter');
                $(".main-khung .main-khung-box .khung3 .khung3-1 section.items-slider").slick('slickFilter', '.mien-nam');


                $(".box-smart-item").css({
                    "background": "#f4f4f4",
                    "border": "1px solid #eee",
                    // "border-radius": "20px",
                    "color": "#999",
                });
                $(".mien_nam").css({
                    "background": "#00b4d8",
                    "border": "1px solid #00b4d8",
                    "color": "#fff",
                })
            }



        }


    })

});


const nganh_nghe = document.querySelector(".Tat-ca-nganh-nghe");
const linh_vuc_cong_ty = document.querySelector(".Tat-ca-linh-vuc-cong-ty");
const dia_diem = document.querySelector(".Tat-ca-dia-diem");

selectBtn1 = nganh_nghe.querySelector(".select-btn");
options1 = nganh_nghe.querySelector(".options");
searchInput1 = nganh_nghe.querySelector("input");

selectBtn2 = linh_vuc_cong_ty.querySelector(".select-btn");
options2 = linh_vuc_cong_ty.querySelector(".options");
searchInput2 = linh_vuc_cong_ty.querySelector("input");

selectBtn3 = dia_diem.querySelector(".select-btn");
options3 = dia_diem.querySelector(".options");
searchInput3 = dia_diem.querySelector("input");




let NganhNghe = [

    "Công nghệ thông tin",
    "It phần mềm",
    "It phần cứng/mạng",
    "Thực phẩm/Đồ uống",
    "Y tế/Dược",
    "Bảo Hiểm",

];

let LinhVucCongTy = [
    "Tư Vấn",
    "Xây Dựng",
    "Viễn Thông",
    "Thương Mại Điện Tử",
    "Tự Động Hóa",
    "Xuất Nhập Khẩu",
];


let DiaDiem = [

    "Hà Nội",
    "Hồ Chí Minh",
    "Quảng Ninh",
    "Quảng Bình",
    "Hà Tĩnh",
    "Hòa Bình",
];



function addNganhNghe(selectedNganhNghe) {


    options1.innerHTML = "";

    NganhNghe.forEach(nganhnghe => {

        // console.log(country)
        let isSelected = nganhnghe == selectedNganhNghe ? "selected" : "";

        let li = `<li onclick="updateNganhNghe(this)" class="${isSelected}">${nganhnghe}</li>`;

        options1.insertAdjacentHTML("beforeend", li);

    });

}


addNganhNghe();

function updateNganhNghe(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput1.value = "";
    addNganhNghe(selectedLi.innerText);
    nganh_nghe.classList.remove("active");
    selectBtn1.firstElementChild.innerText = selectedLi.innerText;
}


searchInput1.addEventListener("keyup", () => {

    let arr1 = [];
    // console.log(searchInput.value);
    let searchedVal1 = searchInput1.value;
    arr1 = NganhNghe.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal1.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateNganhNghe(this)">${data}</li>`).join("");

    // console.log(arr);
    options1.innerHTML = arr1 ? arr1 : `<p>Oops! NganhNghe not found</p>`;


});


selectBtn1.addEventListener("click", () => {

    nganh_nghe.classList.toggle("active");

});


function addLinhVucCongTy(selectedLinhVucCongTy) {


    options2.innerHTML = "";

    LinhVucCongTy.forEach(linhvuccongty => {

        // console.log(country)
        let isSelected = linhvuccongty == selectedLinhVucCongTy ? "selected" : "";

        let li = `<li onclick="updateLinhVucCongTy(this)" class="${isSelected}">${linhvuccongty}</li>`;

        options2.insertAdjacentHTML("beforeend", li);

    });

}

addLinhVucCongTy();


function updateLinhVucCongTy(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput2.value = "";
    addLinhVucCongTy(selectedLi.innerText);
    linh_vuc_cong_ty.classList.remove("active");
    selectBtn2.firstElementChild.innerText = selectedLi.innerText;
}



searchInput2.addEventListener("keyup", () => {


    let arr2 = [];
    // console.log(searchInput.value);
    let searchedVal2 = searchInput2.value;
    arr2 = LinhVucCongTy.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal2.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateLinhVucCongTy(this)">${data}</li>`).join("");

    // console.log(arr);
    options2.innerHTML = arr2 ? arr2 : `<p>Oops! linhvuccongty not found</p>`;

});


selectBtn2.addEventListener("click", () => {

    linh_vuc_cong_ty.classList.toggle("active");

});


function addDiaDiem(selectedDiaDiem) {


    options3.innerHTML = "";

    DiaDiem.forEach(diadiem => {

        // console.log(country)
        let isSelected = diadiem == selectedDiaDiem ? "selected" : "";

        let li = `<li onclick="updateDiaDiem(this)" class="${isSelected}">${diadiem}</li>`;

        options3.insertAdjacentHTML("beforeend", li);

    });

}

addDiaDiem();

function updateDiaDiem(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput3.value = "";
    addDiaDiem(selectedLi.innerText);
    dia_diem.classList.remove("active");
    selectBtn3.firstElementChild.innerText = selectedLi.innerText;
}

searchInput3.addEventListener("keyup", () => {


    let arr3 = [];
    // console.log(searchInput.value);
    let searchedVal3 = searchInput3.value;
    arr3 = DiaDiem.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal3.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateDiaDiem(this)">${data}</li>`).join("");

    // console.log(arr);
    options3.innerHTML = arr3 ? arr3 : `<p>Oops! DiaDiem not found</p>`;

});

selectBtn3.addEventListener("click", () => {

    dia_diem.classList.toggle("active");

});

