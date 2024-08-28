function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function login() {
    document.querySelector('form').onsubmit = (e) => {

        e.preventDefault()



        let username = "admin",

            password = "admin",

            inputUser = document.querySelector('#Uname').value,

            inputPass = document.querySelector('#pass').value


        if (inputUser != username || inputPass != password) {
            document.querySelector('#messageDetails').innerHTML = "Username and Password do not match.<br>Please try again."

        }

        if (inputUser == username && inputPass == password) {
            location.replace("inventory.php")

        }



        document.querySelector('#frmLogin').classList.add("hide")

        document.querySelector('.message').classList.remove("hide")

    }
}