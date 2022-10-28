<?php
    echo '<main>
            <form action="" method="post">
                <input type="text" name="newaccount" id="newaccount" value="NEW ACCOUNT" disabled><br/>
                <label for="email">Email</label><br/>
                <input type="email" name="email" id="email" required><br/>
                <input type="text" name="info" id="email" value="A valid email is required to register and withdraw funds" disabled><br/>
                <label for="firstname">First name</label><br/>
                <input type="text" name="firstname" id="firstname" required><br/>
                <input type="text" name="info" id="firstname" value="Use the same first name used in withdrawal bank account" disabled><br/>
                <label for="surname" required>Surname</label><br/>
                <input type="text" name="surname" id="surname"><br/>
                <input type="text" name="info" id="surname" value="Use the same surname used in withdrawal bank account" disabled><br/>
                <label for="dateofbirth">Date of birth</label><br/>
                <input type="date" name="dateofbirth" id="dateofbirth" required><br/><br/>
                <label for="bankaccountnumber" required>Bank account number</label><br/>
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
                <!--This should lead to confirmationcode.html-->
                <input type="submit" value="Continue"><br/>
            </form>
        </main>';
?>