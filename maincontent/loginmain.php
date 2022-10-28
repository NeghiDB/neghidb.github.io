<?php
    echo '<main>
        <form action="" method="post">
            <input type="text" name="newaccount" id="newaccount" value="LOG IN" disabled><br/>
            <label for="email">Email</label><br/>
            <input type="email" name="email" id="email" required><br/>
            <input type="text" name="info" id="email" value="Enter the email linked with your eleven account" disabled><br/>
            <label for="password">Password</label><br/>
            <input type="password" name="password" id="password" required><br/>
            <input type="text" name="info" id="password" value="Enter your eleven account password"><br/><br/>
            <!--This should lead to logged/homepage.html-->
            <input type="submit" value="Continue" onclick="location.replace(`logged/homepage.php`)"><br/>
        </form>
    </main>';
?>