function Change(){
    var change = document.querySelectorAll("[contenteditable=false]");
    for(var i=0; i < change.length; i++){
        change[i].setAttribute("contenteditable", true);
    }
}
function Add_User(){
    window.location.replace('/index.php?url=Admin/add_user')
}

function remove(){
    var id = prompt("Please enter id to remove", "01");
    var obj = document.getElementById(id)
    obj.remove();

    $.ajax({
        type: "POST",
        url: "/index.php?url=Admin/user",
        data: {"id": id},
        cache: false,
        success: function(id){
            alert("success" + id);
        },
        error: function(xhr, status, error){
            console.error(xhr)
        }
    });
}