<?php
    echo'<main id="password-confirmation-main">
            <form action="" method="post" id="password-form">
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" required><br/>
                <input type="text" name="info" id="password" value="Enter a new password"><br/>
                <label for="firstname">Confirm password</label><br/>
                <input type="password" name="confirmpassword" id="password" required><br/>
                <input type="text" name="info" id="password" value="Re-enter the password above for confirmation"><br/><br/>
                <!--This should lead to logged/homepage.html-->
                <input type="submit" value="Continue"><br/>
            </form>
        </main>';
?>