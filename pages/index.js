function sendEmail() {
            Email.send({
                Host: "smtp.mailtrap.com",
                Username : "374dfe3ee60f63",
                Password : "7c215416c0f894",
                To : "crazyideaz1998@gmail.com",
                From : "crazyideaz1998@gmail.com",
                Subject : "resut link",
                Body : "link",
            })
            .then(function(message){
                alert("mail sent successfully")
            });
        }