let so_luong = document.querySelectorAll(".soluongsp");
so_luong.forEach(function (item, index) {
    let priceThanhTien = document.querySelectorAll('.priceThanhTien');
    item.onchange = function () {
        let price_oo = document.querySelectorAll('.pricesp');
        priceThanhTien[index].innerHTML = (Number(item.value) * Number(price_oo[index].innerHTML))
        tongtienCart()
    }
});
function tongtienCart(){
    let priceThanhTien = document.querySelectorAll('.priceThanhTien');
    let tongtienphu = document.querySelector('#tongtienphu');
    let tongtieninput = document.querySelector('#tongtien_input');
    let tongtien = document.querySelector('#tongtien');
    let tong = 0;
    priceThanhTien.forEach(function (item){
        tong+= Number(item.innerHTML);
    })
    tongtien.innerHTML=tong.toLocaleString() +" VND";
    tongtienphu.innerHTML=tong.toLocaleString() +" VND";
    tongtieninput.innerHTML=tong;
}
tongtienCart();