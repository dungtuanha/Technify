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
    if (sessionStorage.getItem("userCart") != NULL){
        loadCart()
    }

    var obj = {};

    obj.addStuff = function(id, name, price, count) {
        for (var i in cart) {
            if(cart[i].name === name){
                cart[i].count ++;
                saveCart();
                return;
            }
        }

        var stuff = new Stuff(id, name, price, count);
        cart.push(stuff);
        saveCart() 
    }

    
})