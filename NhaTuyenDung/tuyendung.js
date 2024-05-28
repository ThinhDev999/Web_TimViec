function bang_dang_tin() {
    var x = document.getElementById("BangDangTin");
    if (x.style.display === "none") {
        // x.style.display = "block";
         x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}
function sua_du_lieu() {
    var x = document.getElementById("from_sua");
    if (x.style.display === "none") {
        // x.style.display = "block";
         x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}
function dang_tin() {
    var x = document.getElementById("dangtin");
    if (x.style.display === "none") {
        x.style.display = "block";
       
    } else {
        x.style.display = "none";
    }
}
const input_anh = document.querySelector("#input-anh");
var uploaded_image = "";
input_anh.addEventListener("change",function(){

    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.querySelector(".display-anh").style.backgroundImage= `url(${uploaded_image})`;
       
    });
    reader.readAsDataURL(this.files[0]);


});