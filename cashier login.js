function myFunction() {
    var x = document.getElementById("pass2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function login() {
    document.querySelector('form').onsubmit = (e) => {

        e.preventDefault()



        let username = "cashier",

            password = "cashier",

            inputUser = document.querySelector('#Uname2').value,

            inputPass = document.querySelector('#pass2').value


        if (inputUser != username || inputPass != password) {
            document.querySelector('#messageDetails').innerHTML = "Username and Password do not match.<br>Please try again."

        }

        if (inputUser == username && inputPass == password) {
            location.replace("/WEBSYSTEM/order/order.php")

        }



        document.querySelector('#frmLogin').classList.add("hide")

        document.querySelector('.message').classList.remove("hide")

    }
}