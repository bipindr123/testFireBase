<html>
<title>THE DATA</title>

<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script src="fire.js"></script>
<script>
    var ref = firebase.database().ref("users/");
    ref.on("value", function (snapshot) {
        console.log(snapshot.val());
        snapshot.forEach(function (childSnapshot) {
            var childData = childSnapshot.val();              // childData will be the actual contents of the child
            var name_val = childSnapshot.val().username;
            var email_val = childSnapshot.val().email;
            var phone_val = childSnapshot.val().phone;

            var card = document.createElement('div');
            card.setAttribute('class', 'card');
            document.body.appendChild(card);

            var cardname = document.createElement('li');
            cardname.innerHTML =name_val; // added this
            card.appendChild(cardname);
            var cardemail = document.createElement('li');
            cardemail.innerHTML =email_val; // added this
            card.appendChild(cardemail);
            var cardphone = document.createElement('li');
            cardphone.innerHTML =phone_val; // added this
            card.appendChild(cardphone);

            document.createElement('br');

        });
    }, function (error) {
        console.log("Error: " + error.code);
    });
</script>
<body>
<h1>THE DATA</h1>

</body>


</html>