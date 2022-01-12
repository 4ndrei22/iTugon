function Login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username == "admin" && password == "admin"){
        //alert("Login Successfully");

        //location.href="dashboard.html";
        //window.location.href="dashboard.html";
        location.replace("dashboard.html");
    }
    else if(username == "superadmin" && password == "admin"){
        alert("Login Successfully");
        location.replace("E:\HTML\BulSU iTugon(Admin)\examples\SuperAdmin\dashboard.html");
    }
    else{
        location.replace("E:\HTML\BulSU iTugon(Super Admin)\Html\LoginPage.html");
    }
}