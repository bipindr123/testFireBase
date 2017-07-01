<html xmlns="http://www.w3.org/1999/html">
<body>
Written to database!
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?></br>
Phone number is: <?php echo $_POST["phone"]; ?></br>


<button onclick="window.location.href='showdata.php'">Show data</button>

</body>

<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script src="fire.js"></script>
<script>
    function writeUserData(name, email, phone) {
        firebase.database().ref("users/" + name).set({
            username: name,
            email: email,
            phone: phone
        });
    }
    writeUserData("<?php echo $_POST["name"]; ?>", "<?php echo $_POST["email"]; ?>", "<?php echo $_POST["phone"]; ?>");
</script>


</html>