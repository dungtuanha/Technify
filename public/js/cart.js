var userCart = (function() {
    cart = [];
    function Stuff(id, name, price, count) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.count = count;
    }

    function saveCart() {
        sessionStorage.setItem('userCart', JSON.stringify(cart));
    }
    
    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('userCart'));
    }
    if (sessionStorage.getItem("userCart") != null){
        loadCart();
    }

    var obj = {};

    obj.addToCart = function(id, name, price, count) {
        for (var item in cart) {
            if(cart[item].name === name){
                cart[item].count ++;
                saveCart();
                return;
            }
        }

        var stuff = new Stuff(id, name, price, count);
        cart.push(stuff);
        saveCart();
    }

    obj.setCount = function(name, count){           //Đếm số lượng item người dùng mua
        for(var item in cart){
            if (cart[i].name === name){
                cart[i].count = count;
                break;
            }
        }
    }

    obj.removeFromCart = function(name) {
        for(var item in cart) {
            if(cart[item].name === name) {
                cart[item].count --;
                if(cart[item].count === 0){
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    }

    obj.removeItemAll = function(name) {
        for(var item in cart) {
            if(cart[item].name === name) {
                cart.splice(item, 1);
            }
        }
        saveCart();
    }

    obj.clearCart = function(){
        cart = [];
        saveCart();
    }

    obj.totalCount = function() {
        var totalCount = 0;
        for(var item in cart){
            totalCount += cart[item].count;
        }
        return totalCount;
    }


    obj.bill = function() {       //Tiền hóa đơn phải trả
        var billPrice = 0;
        for(var item in cart) {
            billPrice += cart[item].price * cart[item].count;
        }
        return Number(billPrice.toFixed(2));
    }

    obj.userCartInfomation = function(){    //Thông tin đơn hàng
        var copyCart = [];
        for(i in cart){
            item = cart[i];
            copyItem = {};
            for(j in item){
                copyItem[j] = item[j];
            }
            
            copyItem.total = Number(item.price * item.count).toFixed(2);
            copyCart.push(copyItem);
        }
        return copyCart;
    }

    return obj;
})();


function displayCart() {
    var cartArr = userCart.userCartInfomation();
    var output = "";
    for(var i in cartArr){
        output += "<tr>"
        + "<td>" + cartArr[i].name + "</td>"
        + "<td>(" + cartArr[i].price + ")</td>"
        + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArr[i].name + ">-</button>"
        + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArr[i].name + ">+</button></div></td>"
        + "<td><button class='delete-item btn btn-danger' data-name=" + cartArr[i].name + ">X</button></td>"
        + " = " 
        + "<td>" + cartArr[i].total + "</td>" 
        +  "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(userCart.bill());
    $('.total-count').html(userCart.totalCount());
}

//Ajax handle

$('.add-to-cart').click(function(event){
    event.preventDefault(); //Ngăn chặn cách xử lý mặc định của trình duyệt
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    userCart.addToCart(name, price, 1);
    displayCart();
});

$('.clear-cart').click(function() {
    userCart.clearCart();
    displayCart();
});

$('.show-cart').on("click", ".minus-item", function(event){
    var name = $(this).data("name");
    userCart.removeFromCart(name);
    displayCart();
});

$('.show-cart').on('click', '.plus-item', function(event){
    var name = $(this).data('name');
    userCart.addToCart(name);
    displayCart();
});

// Đếm số lượng input
$('.show-cart').on('change', '.item-count', function(event){
    var name = $(this).data('name');
    var count = Number($(this).val());
    userCart.setCount(name, count);
    displayCart();
});

displayCart();
