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
    Front Name <INPUT type = 'text' name="f-name" autocomplete="off"  required >
    <BR>
    Last Name <INPUT type = 'text' name="l-name" autocomplete="off"  required>
    <BR>
    NIK <INPUT type = 'number' name="nik" autocomplete="off"  required>
    <BR>
    PIN <INPUT type = 'password' name="pin" autocomplete="off"  required>
    <BR>
    Confirmation PIN <INPUT type = 'password' name="conf-pin" autocomplete="off"  required>
    <BR>
    Alamat <INPUT type = 'text'  name="address" autocomplete="off"  required>
    <BR>
    Telephone <INPUT type = 'number' name="telephone" autocomplete="off"  required>
    <BR>
    Nomor Kamar <input list="room" name="room_number" autocomplete="off" required>
    <datalist id="room">
        <?php
            for ($i = 1; $i<=5 ;$i++) {
                if(strpos($availableRoom,"$i") !== false) echo "<option value='".$i."'>";
            }
        ?>
    </datalist>
    <BR>
    Tanggal Pesan <INPUT type = 'date' name="firstDate" autocomplete="off"  required>
    <BR>
    Tanggal Selesai <INPUT type = 'date' name="lastDate" autocomplete="off"  required>
    <BR>
    Jumlah Orang <INPUT type = 'number' name="quota" autocomplete="off"  required>
    <BR>

    <INPUT type="submit" value="Register">
</FORM>

<SCRIPT>
    function CheckInput()
    {
        var pin = document.forms["register"]["pin"].value;
        var confPin = document.forms["register"]["conf-pin"].value;

        var firstDate = document.forms["register"]["firstDate"].value;
        var lastDate = document.forms["register"]["lastDate"].value;

        var diff =  Math.floor(( Date.parse(lastDate) - Date.parse(firstDate) ) / 86400000);

        var date,validate,nowDate;

        if (diff > 0) {
            date = true;
        } else {
            alert("Tidak bisa mengambil hari sebelumnya");
            date = false;
        }

        diff =  Math.floor(( Date.parse(firstDate) - Date.parse(CheckDate()) ) / 86400000);

        if (diff >= 0) {
            date = true;
        } else {
            alert("Tidak bisa mengambil hari sebelumnya");
            date = false;
        }

        if (pin == confPin) {
            validate = true;
        } else {
            alert("Mohon perhatikan PIN dan Confirmation PIN, Transaction PIN dan Confirmation Transaction PIN");
            validate = false;
        }

        return validate && date;
    }

    function CheckDate(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        return yyyy + '/' + mm + '/' + dd;
    }
</SCRIPT>
</BODY>
</HTML>