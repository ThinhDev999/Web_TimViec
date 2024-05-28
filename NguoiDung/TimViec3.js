$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

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








const cap_bac = document.querySelector(".cap-bac");
const hinh_thuc_lam_viec = document.querySelector(".hinh-thuc-lam-viec");
const kinh_nghiem_lam_viec = document.querySelector(".kinh-nghiem-lam-viec");
const muc_luong = document.querySelector(".muc-luong");




selectBtn4 = cap_bac.querySelector(".select-btn");
options4 = cap_bac.querySelector(".options");
searchInput4 = cap_bac.querySelector("input");

selectBtn5 = hinh_thuc_lam_viec.querySelector(".select-btn");
options5 = hinh_thuc_lam_viec.querySelector(".options");
searchInput5 = hinh_thuc_lam_viec.querySelector("input");

selectBtn6 = kinh_nghiem_lam_viec.querySelector(".select-btn");
options6 = kinh_nghiem_lam_viec.querySelector(".options");
searchInput6 = kinh_nghiem_lam_viec.querySelector("input");

selectBtn7 = muc_luong.querySelector(".select-btn");
options7 = muc_luong.querySelector(".options");
searchInput7 = muc_luong.querySelector("input");




let CapBac = [

    "Nhân Viên",
    "Trưởng Nhóm",
    "Phó Giám Đốc",
    "Thực Tập Sinh",

];

let HinhThucLamViec = [

    "Toàn Thời Gian",
    "Bán Thời Gian",
    "Thực Tập",

];

let KinhNghiemLamViec = [

    "Chưa Có Kinh Nghiệm",
    "Dưới 1 năm",
    "1 năm",
    "2 năm",
    "3 năm",


];

let MucLuong = [
    "Dưới 3 Triệu",
    "3-5 triệu",
    "5-7 triệu",
    "7-10 triệu",
];





function addCapBac(selectedCapBac) {


    options4.innerHTML = "";

    CapBac.forEach(capbac => {

        // console.log(country)
        let isSelected = capbac == selectedCapBac ? "selected" : "";

        let li = `<li onclick="updateCapBac(this)" class="${isSelected}">${capbac}</li>`;

        options4.insertAdjacentHTML("beforeend", li);

    });

}

addCapBac();

function updateCapBac(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput4.value = "";
    addCapBac(selectedLi.innerText);
    cap_bac.classList.remove("active");
    selectBtn4.firstElementChild.innerText = selectedLi.innerText;
}

searchInput4.addEventListener("keyup", () => {


    let arr4 = [];
    // console.log(searchInput.value);
    let searchedVal4 = searchInput4.value;
    arr4 = CapBac.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal4.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateCapBac(this)">${data}</li>`).join("");

    // console.log(arr);
    options4.innerHTML = arr4 ? arr4 : `<p>Oops! CapBac not found</p>`;

});


selectBtn4.addEventListener("click", () => {

    cap_bac.classList.toggle("active");

});


function addHinhThucLamViec(selectedHinhThucLamViec) {


    options5.innerHTML = "";

    HinhThucLamViec.forEach(hinhthuclamviec => {

        // console.log(country)
        let isSelected = hinhthuclamviec == selectedHinhThucLamViec ? "selected" : "";

        let li = `<li onclick="updateHinhThucLamViec(this)" class="${isSelected}">${hinhthuclamviec}</li>`;

        options5.insertAdjacentHTML("beforeend", li);

    });

}

addHinhThucLamViec();

function updateHinhThucLamViec(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput5.value = "";
    addHinhThucLamViec(selectedLi.innerText);
    hinh_thuc_lam_viec.classList.remove("active");
    selectBtn5.firstElementChild.innerText = selectedLi.innerText;
}

searchInput5.addEventListener("keyup", () => {


    let arr5 = [];
    // console.log(searchInput.value);
    let searchedVal5 = searchInput5.value;
    arr5 = HinhThucLamViec.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal5.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateHinhThucLamViec(this)">${data}</li>`).join("");

    // console.log(arr);
    options5.innerHTML = arr5 ? arr5 : `<p>Oops! HinhThucLamViec not found</p>`;

});


selectBtn5.addEventListener("click", () => {

    hinh_thuc_lam_viec.classList.toggle("active");

});

function addKinhNghiemLamViec(selectedKinhNghiemLamViec) {


    options6.innerHTML = "";

    KinhNghiemLamViec.forEach(kinhnghiemlamviec => {

        // console.log(country)
        let isSelected = kinhnghiemlamviec == selectedKinhNghiemLamViec ? "selected" : "";

        let li = `<li onclick="updateKinhNghiemLamViec(this)" class="${isSelected}">${kinhnghiemlamviec}</li>`;

        options6.insertAdjacentHTML("beforeend", li);

    });

}

addKinhNghiemLamViec();

function updateKinhNghiemLamViec(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput6.value = "";
    addKinhNghiemLamViec(selectedLi.innerText);
    kinh_nghiem_lam_viec.classList.remove("active");
    selectBtn6.firstElementChild.innerText = selectedLi.innerText;
}

searchInput6.addEventListener("keyup", () => {


    let arr6 = [];
    // console.log(searchInput.value);
    let searchedVal6 = searchInput6.value;
    arr6 = KinhNghiemLamViec.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal6.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateKinhNghiemLamViec(this)">${data}</li>`).join("");

    // console.log(arr);
    options6.innerHTML = arr6 ? arr6 : `<p>Oops! DiaDiem not found</p>`;

});


selectBtn6.addEventListener("click", () => {

    kinh_nghiem_lam_viec.classList.toggle("active");

});

function addMucLuong(selectedMucLuong) {


    options7.innerHTML = "";

    MucLuong.forEach(mucluong => {

        // console.log(country)
        let isSelected = mucluong == selectedMucLuong ? "selected" : "";

        let li = `<li onclick="updateMucLuong(this)" class="${isSelected}">${mucluong}</li>`;

        options7.insertAdjacentHTML("beforeend", li);

    });

}

addMucLuong();

function updateMucLuong(selectedLi) {
    // console.log(selectedLi.innerText);
    searchInput7.value = "";
    addMucLuong(selectedLi.innerText);
    muc_luong.classList.remove("active");
    selectBtn7.firstElementChild.innerText = selectedLi.innerText;
}

searchInput7.addEventListener("keyup", () => {


    let arr7 = [];
    // console.log(searchInput.value);
    let searchedVal7 = searchInput7.value;
    arr7 = MucLuong.filter(data => {

        return data.toLocaleLowerCase().includes(searchedVal7.toLocaleLowerCase());
    }).map(data => `<li  onclick="updateMucLuong(this)">${data}</li>`).join("");

    // console.log(arr);
    options7.innerHTML = arr7 ? arr7 : `<p>Oops! MucLuong not found</p>`;

});


selectBtn7.addEventListener("click", () => {

    muc_luong.classList.toggle("active");

});