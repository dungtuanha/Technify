function Change(){
    var id = prompt("Pls enter id of user you want to edit!!");
    if (document.getElementById(id)){
        createCookie("change_user_id", id, 30)
        var ele = prompt("which detail you want to change?", "email, password...")
        if (ele == "email") {
            var change = prompt("Đổi thành gì thế? ")
            createCookie("edit_email", change, 30)
        } else if (ele == "password") {
            var change = prompt("Đổi thành gì thế? ")
            createCookie("edit_password", change, 30)
        } else {
            window.alert("Invalid Input!!!")
        }
        window.alert("Change successfull!! Reload page in 30s to see change")
    }else{
        window.alert("Invalid Id!!!")
    }
}


function Add(what){
    if (what == "user"){
        window.location.replace('/index.php?url=Admin/add_user')
    } else{
        window.location.replace('/index.php?url=Admin/add_stuff')
    }
}

function remove(what){
    var id = prompt("Please enter id to remove", "01");
    if (what == "user"){
        createCookie("remove_user_id", id, 10);
    } else{
        createCookie("remove_stuff_id", id, 10);
    }
   window.alert("Remove successfull, pls reload page to updata change!!")

    // $.ajax({
    //     type: "post",
    //     url: "/index.php?url=Admin/" + what,
    //     dataType : 'text',
    //     data: {
    //         remove_id: id
    //     },
    //     cache: false,
    //     success: function(id){

    //     },
    //     error: function(xhr, status, error){
    //         console.error(xhr)
    //     }
    // });
}
function createCookie(name, value, secs) {
    var expires;
    if (secs) {
    var date = new Date();
    date.setTime(date.getTime() + (secs * 1000));
    expires = "; expires=" + date.toGMTString();
    }
    else {
    expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}