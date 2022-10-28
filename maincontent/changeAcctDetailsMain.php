<?php
    echo '<main style="height: 120vh;">
            <nav class="leagues" id="leagues"></nav>
            <aside class="opposition"></aside>
            <article class="selected-team">
                <!--Displays information about -->
                //this input fields apart from the password should already be filled with the information already produced in the database
                <form action="" method="post">
                    <!--Display all information on the text field so the user can only edit the one he or she does not need anymore-->
                    <input type="text" name="newaccount" id="newaccount" value="EDIT ACCOUNT" disabled><br/>
                    <label for="email">Email</label><br/>
                    <input type="email" name="email" id="email"><br/>
                    <input type="text" name="info" id="email" value="A valid email is needed to register and withdraw funds" disabled><br/>
                    <label for="firstname">First name</label><br/>
                    <input type="text" name="firstname" id="firstname"><br/>
                    <input type="text" name="info" id="firstname" value="Use the same first name used in withdrawal bank account" disabled><br/>
                    <label for="surname" >Surname</label><br/>
                    <input type="text" name="surname" id="surname"><br/>
                    <input type="text" name="info" id="surname" value="Use the same surname used in withdrawal bank account" disabled><br/>
                    <label for="dateofbirth">Date of birth</label><br/>
                    <input type="date" name="dateofbirth" id="dateofbirth"><br/><br/>
                    <label for="bankaccountnumber" >Bank account number</label><br/>
                    <input type="text" name="bankaccountnumber" id="bankaccountnumber"><br/><br/>
                    <label for="bankname">Bank name</label><br/>
                    <select name="bankname" id="bankname">
                        <option value="uba" selected>United Bank of Africa</option>
                        <option value="zenith">Zenith</option>
                        <option value="firstbank">First Bank</option>
                    </select><br/><br/>
                    <label for="accounttype">Account type</label><br/>
                    <select name="accounttype" id="accounttype">
                        <option value="savings">Savings</option>
                        <option value="current">Current</option>
                    </select><br/><br/>
                    <input type="text" name="newaccount" id="newaccount" value="CHANGE ACCOUNT PASSWORD" disabled><br/>
                    <label for="password">Old Password</label><br/>
                    <input type="password" name="oldPassword" id="password"><br/>
                    <input type="text" name="info" id="password" value="Enter old password"><br/>
                    <label for="password">New Password</label><br/>
                    <input type="password" name="newPassword" id="password"><br/>
                    <input type="text" name="info" id="password" value="Enter a new password"><br/>
                    <label for="firstname">Confirm New password</label><br/>
                    <input type="password" name="confirmpassword" id="password"><br/>
                    <input type="text" name="info" id="password" value="Re-enter new password for confirmation"><br/><br/>
                    <!--This should lead to confirmationcode.html-->
                    <input type="submit" value="Save Changes"><br/>
                </form>
            </article>
            <aside class="teams-and-players-list"></aside>
            <aside class=""></aside>
        </main>';
?>