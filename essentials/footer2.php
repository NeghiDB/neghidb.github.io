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
    function onChallenge(){
        /* This function would be executed after the system has found a challenger */
        /* Remember to revert it after challenger has been gotten*/
        /*also remember to first check if the player has up to 500 naira in his/her account which would be the amount standard and
        compulsory amount staked per challenge*/
        let element = document.getElementById(`appearanceOnChallenge2`);
        let hidden = element.getAttribute("hidden");

        if(hidden){
            element.removeAttribute("hidden");
            if(document.getElementById(`appearOnChallenge`).style.display=`none`){
                document.getElementById(`appearOnChallenge`).style.display=`block`;
                document.getElementById(`disappearOnChallenge`).style.display=`none`;
            }
        }else{
            element.setAttribute("hidden","hidden");
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
</body>
</html>';
?>