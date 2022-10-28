<?php
    echo'<main id="confirmation-page-main">
            <form action="" method="post" id="confirmation-form">
                <label for="confirmation-code">Enter Confirmation Code</label><br/><br/>
                <input type="text" name="confirmation-code" id="confirmation-code" maxlength="8" required><br/>
                <label for="userid" hidden>UserID</label><br/>
                <!--This value is not supposed to be required, it should generate a random 5 digit number as user id and submits it to the database-->
                <input type="text" name="userid" id="userid" required hidden><br/>
                <!--This should lead to passwordconfirmation.html-->
                <input type="submit" value="Confirm"><br/>
            </form>
        </main>';
?>