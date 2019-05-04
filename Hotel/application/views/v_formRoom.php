<! DOCTYPE html>
<HTML>
<HEAD>
    <TITLE> Order Room </TITLE>
    <H1> Order Room </H1> </a>
</HEAD>
<BODY>
    <div>
        <H3> KAMAR SUPER </H3>
        <form action = "<?php echo base_url('hotel/orderRoom');?>" method = 'post' >
            <input type='hidden' name='type' value='Super'>
            <img src="<?php echo $roomSuper_image ?>" alt="Simply Easy Learning" width="400" height="200"> </a>
            <br>
            Available Room : <?php echo $super ?> <br>
            Harga : Rp. <?php echo $roomSuper_price ?>/malam <br>
            Quota : Rp. <?php echo $roomSuper_quota ?> orang <br>
            Fasilitas : <?php echo $roomSuper_desc ?> <br>
            <input type = 'submit' value="Book">
        </form>
    </div>

    <div>
        <H3> KAMAR HYPER </H3>
        <form action= "<?php echo base_url('hotel/orderRoom');?>" method="post">
            <input type='hidden' name='type' value='Hyper'>
            <img src="<?php echo $roomHyper_image ?>" alt="Simply Easy Learning" width="400" height="200"> </a>
            <br>
            Available Room : <?php echo $hyper ?> <br>
            Harga : Rp. <?php echo $roomHyper_price ?>/malam <br>
            Quota : Rp. <?php echo $roomHyper_quota ?> orang <br>
            Fasilitas : <?php echo $roomHyper_desc ?> <br>
            <input type = 'submit' value="Book">
        </form>
    </div>
</BODY>
</HTML>