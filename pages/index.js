function sendEmail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username : "ashweenr1998@gmail.com",
                Password : "ashram1998",
                To : "crazyideaz1998@gmail.com",
                From : "crazyideaz1998@gmail.com",
                Subject : "resut link",
                Body : "link",
            })
            .then(function(message){
                alert("mail sent successfully")
            });
        }