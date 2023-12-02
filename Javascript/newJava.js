
// https://www.encodedna.com/javascript/how-to-add-dash-after-every-3rd-character-using-javascript-or-jquery.htm
function addHyphen (element) {
    let ele = document.getElementById(element.id);
    ele = ele.value.split('-').join('');

    let finalVal = ele.match(/.{1,4}/g).join('-');
    document.getElementById(element.id).value = finalVal;
}

function enterCouponNo(coupon) {
    let text;
    let number = prompt("Please enter coupon number (eg:- \"123456\"):", "");
    if (number == null || number == "") {
        text = "User cancelled request!";
    } else if (number.toString().length != 6 || !number.match(/^\d+/)){
        text = "Invalid Coupon!";
     } else {
        text = "Coupon added!";
    }
    document.getElementById("result").innerHTML = text;
}