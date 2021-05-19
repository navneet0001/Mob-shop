<?php
    ob_start();
    //include header.php file
    include('header.php');
?>  

<?php
    /*include products*/
    include('Template/_cart-template.php');
    /*include products*/
?>        

<?php
    /*include top-sale*/
    include('Template/_new-phones.php');
    /*include top-sale*/
?> 



<?php
    //include footer.php
    include('footer.php');
?>