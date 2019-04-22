<! DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE> Nabonk Bank Registration </TITLE>
        <a href="../index.php" name="header"><H1> Nabonk Bank Registration </H1> </a>
    </HEAD>
    <BODY>
        <FORM action ="../Controller/index.php" method = 'post' name='register' onsubmit="return CheckInput()">
            <INPUT type="hidden" name="regist">
            Front Name <INPUT type = 'text' placeholder="Mr. Robertus" name="f-name" required>
            <BR>
            Last Name <INPUT type = 'text' placeholder="Ari" name="l-name" required>
            <BR>
            Username <INPUT type = 'text' placeholder="username" name="username" required>
            <BR>
            PIN <INPUT type = 'password' placeholder="******" name="pin" required>
            <BR>
            Confirmation PIN <INPUT type = 'password' placeholder="******" name="conf-pin" required>
            <BR>
            Transaction Password <INPUT type = 'password' placeholder="**********" name="trans-pin" required>
            <BR>
            Confirmation Transaction <INPUT type = 'password' placeholder="**********" name="conf-trans-pin" required>
            <BR>
            Provinsi <INPUT type = 'text' placeholder="Jawa Timur" name="prov" required>
            Kota <INPUT type = 'text' placeholder="Malang" name="city" required>
            <BR>
            Alamat <INPUT type = 'text' placeholder="Jl. Watugong" name="address" required>
            <BR>
            Email <INPUT type = 'text' placeholder="robert@gmail.com" name="email" required>
            <BR>
            Telephone <INPUT type = 'number' placeholder="082254923023" name="telephone" required>
            <BR>
            Saldo <INPUT type = 'number' placeholder="1000000" name="saldo" required>
            <BR>
            <INPUT type="submit" value="Register">
        </FORM>

        <SCRIPT>
            function CheckInput()
            {
                var pin = document.forms["register"]["pin"].value;
                var confPin = document.forms["register"]["conf-pin"].value;
                var transPin = document.forms["register"]["trans-pin"].value;
                var confTransPin = document.forms["register"]["conf-trans-pin"].value;
                if (pin == confPin && transPin == confTransPin) {
                    return true;
                } else {
                    alert("Mohon perhatikan PIN dan Confirmation PIN, Transaction PIN dan Confirmation Transaction PIN");
                    return false;
                }
            }
        </SCRIPT>
    </BODY>
</HTML>