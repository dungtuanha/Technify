function Change(){
    var id = prompt("Pls enter id of user you want to edit!!");
    if (document.getElementById(id)){
        sessionStorage.setItem("user_id", id)
        var ele = prompt("which detail you want to change?", "email, password...")
        if (ele == "email") {
            var change = prompt("Đổi thành gì thế? ")
            sessionStorage.setItem("edit_email", change)
        } else if (ele == "password") {
            var change = prompt("Đổi thành gì thế? ")
            sessionStorage.setItem("edit_password", change)
        } else {
            window.alert("Invalid Input!!!")
        }
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
        sessionStorage.setItem('remove_user_id', id);
    } else {
        sessionStorage.setItem('remove_stuff_id', id)
    }
   window.alert("Remove successfull, pls reload page to updata change!!")
}