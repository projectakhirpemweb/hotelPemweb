<! DOCTYPE html>
<HTML>
<HEAD>
    <TITLE> Order Room </TITLE>
    <H1> Order Room </H1> </a>
</HEAD>
<BODY>
<H3> <?php echo $dataRoom; ?> </H3>
<FORM action ="<?php echo base_url('hotel/reserve');?>" method = 'post' name='register' onsubmit="return CheckInput()">
    <INPUT type="hidden" name="regist" value=<?php echo $dataRoom; ?>>
    Front Name <INPUT type = 'text' placeholder="Mr. Robertus" name="f-name" required >
    <BR>
    Last Name <INPUT type = 'text' placeholder="Ari" name="l-name" required>
    <BR>
    NIK <INPUT type = 'number' placeholder="351411******" name="nik" required>
    <BR>
    PIN <INPUT type = 'password' placeholder="******" name="pin" required>
    <BR>
    Confirmation PIN <INPUT type = 'password' placeholder="******" name="conf-pin" required>
    <BR>
    Alamat <INPUT type = 'text' placeholder="Jl. Watugong" name="address" required>
    <BR>
    Telephone <INPUT type = 'number' placeholder="082254923023" name="telephone" required>
    <BR>
    Nomor Kamar <INPUT type = 'number' placeholder="3" name="room_number" required>
    <BR>
    Lama Menginap <INPUT type = 'number' placeholder="3" name="stayDays" required>
    <BR>
    Jumlah Orang <INPUT type = 'number' placeholder="4" name="quota" required>
    <BR>

    <INPUT type="submit" value="Register">
</FORM>

<SCRIPT>
    function CheckInput()
    {
        var pin = document.forms["register"]["pin"].value;
        var confPin = document.forms["register"]["conf-pin"].value;

        if (pin == confPin) {
            return true;
        } else {
            alert("Mohon perhatikan PIN dan Confirmation PIN, Transaction PIN dan Confirmation Transaction PIN");
            return false;
        }
    }
</SCRIPT>
</BODY>
</HTML>