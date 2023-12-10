function validateForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let remember = document.getElementById("remember").checked;
    let error = "";
    console.log(remember);
    if (username === "") {
        error += "username must be filled out<br>";
    }

    if (password === "") {
        error += "Password must be filled out<br>";
    }

    document.getElementById("error").innerHTML = error;
    if (!error) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../controller/Auth/loginCheck.php", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        let data = {
            username: username,
            password: password,
            remember: remember,
        };
        let jsonData = JSON.stringify(data);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let res = JSON.parse(this.responseText);
                if (res.success) {
                    checkLoggedIN();
                } else if (res.error) {
                    document.getElementById("error").innerHTML = res.error;
                }
            }
        };

        xhttp.send("data=" + jsonData);
    }
}

function checkLoggedIN() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../controller/common/checkLogin.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                let response = JSON.parse(this.responseText);
                if (response.loggedIn) {
                    if (response.userType === "admin") {
                        window.location.replace(
                            "../Dashboard/dashboardAdmin.php"
                        );
                    } else if (response.userType === "recruiter") {
                        window.location.replace(
                            "../Dashboard/dashboardRecruiter.php"
                        );
                    } else {
                        window.location.replace(
                            "../Dashboard/dashboardApplicant.php"
                        );
                    }
                }
            } else {
                reject(new Error(`Request failed with status ${this.status}`));
            }
        }
    };

    xhttp.send();
}
checkLoggedIN();
