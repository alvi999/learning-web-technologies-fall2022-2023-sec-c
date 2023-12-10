function validateForm() {
    let name = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let gender = document.querySelector('input[name="gender"]:checked').value;

    let error = "";
    //console.log(gender, userType);

    if (name === "") {
        error += "name must be filled out<br>";
    }
    if (username === "") {
        error += "username must be filled out<br>";
    }

    if (email === "") {
        error += "Email must be filled out<br>";
    }

    if (password === "") {
        error += "Password must be filled out<br>";
    }

    if (confirmPassword === "") {
        error += "Confirm Password must be filled out<br>";
    }

    if (password !== confirmPassword) {
        error += "Passwords do not match<br>";
    }

    if (!gender) {
        error += "Gender must be selected<br>";
    }

    document.getElementById("error").innerHTML = error;
    if (!error) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../controller/registrationCheck.php", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        let data = {
            name: name,
            username: username,
            email: email,
            password: password,
            gender: gender,
        };
        let jsonData = JSON.stringify(data);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                let res = JSON.parse(this.responseText);
                if (res.success) {
                    window.location.replace("./login.php");
                } else if (res.error) {
                    document.getElementById("error").innerHTML = res.error;
                }
            }
        };

        xhttp.send("data=" + jsonData);
    }
}

// function checkLoggedIN() {
//     let xhttp = new XMLHttpRequest();
//     xhttp.open("GET", "../../controller/common/checkLogin.php", true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.onreadystatechange = function () {
//         if (this.readyState == 4) {
//             if (this.status == 200) {
//                 console.log(this.responseText);
//                 let response = JSON.parse(this.responseText);
//                 if (response.loggedIn) {
//                     if (response.userType === "admin") {
//                         window.location.replace(
//                             "../Dashboard/dashboardAdmin.php"
//                         );
//                     } else {
//                         window.location.replace(
//                             "../Dashboard/dashboardApplicant.php"
//                         );
//                     }
//                 }
//             } else {
//                 reject(new Error(`Request failed with status ${this.status}`));
//             }
//         }
//     };

//     xhttp.send();
//}
//checkLoggedIN();