<! DOCTYPE html>
<HTML>
<HEAD>
    <TITLE> Your Order </TITLE>
    <H1> Your Order </H1>
</HEAD>
<BODY>
    <?php echo $order['order'] ?>

    <a href = "https://chart.googleapis.com/chart?chl=<?php echo $order['status'] ?>&chs=500x500&cht=qr&chld=H%7C0">
    <img src="https://chart.googleapis.com/chart?chl=<?php echo $order['status'] ?>&chs=200x200&cht=qr&chld=H%7C0"> </a>
</BODY>
</HTML>