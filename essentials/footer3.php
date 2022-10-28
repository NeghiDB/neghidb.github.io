<?php
echo'<script>
    function myNavButtonsDisplay(){
        //document.getElementById(`leagues`).style.visibility=`hidden`;
        if (document.getElementById(`leagues`).style.display==`block`){
            document.getElementById(`leagues`).style.display="";
        }else{
            document.getElementById(`leagues`).style.display=`block`;
        }
    }
    function leave(){
        if(confirm("Log out?")==true){
            //make sure you terminate this page first before opening the new one so the user cannot use the back arrow to re-access account
            location.replace("../index.php");
        }
    }
    </script>
<footer>
    <span class="footer-notes">ELEVEN<br/><a href="homepage.php">HOMEPAGE</a></span>
    <span class="contact-info">
        <img src="images/instagram-logo-smaller.png" alt="" srcset="">
        <img src="images/gmail-logo-smaller.png" alt="" srcset="">
    </span>
    <span class="footer-copy">'. date("Y").' ALL RIGHT RESERVED</span>
</footer>
<script src="../scripts/main.js"></script>
</body>
</html>';
?>