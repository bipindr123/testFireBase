<html>
<title>THE DATA</title>

<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script src="fire.js"></script>
<script>
    var ref = firebase.database().ref("users/");
    ref.on("value", function(snapshot) {
        console.log(snapshot.val());
        snapshot.forEach(function(childSnapshot) {
            var childData = childSnapshot.val();              // childData will be the actual contents of the child
            var name_val = childSnapshot.val().username;
            var email_val = childSnapshot.val().email;
            var phone_val = childSnapshot.val().phone;
            document.write("name: "+ name_val+ "</br>");
            document.write("email: " + email_val + "</br>");
            document.write("phone: " + phone_val+ "</br>");
        });
    }, function (error) {
        console.log("Error: " + error.code);
    });
</script>

<body>
    <h1>THE DATA</h1>

</body>


</html>