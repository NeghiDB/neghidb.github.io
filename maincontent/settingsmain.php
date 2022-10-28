<?php
echo '<main>
            <nav class="leagues" id="leagues"></nav>
            <aside class="opposition"></aside>
            <article class="selected-team" style="height: 81vh;background-image: none; color: black;">
                <!--Displays information about -->
                <button class="list-label" disabled>SETTINGS</button>
                <button class="players" id="setBtn" onclick="location.href=`../logged/changeAcctDetails.php`" value="changePassword">CHANGE PASSWORD</button>
                <button class="players" id="setBtn" onclick="location.href=`../logged/changeAcctDetails.php`" value="changeAcctNo">CHANGE ACCOUNT NUMBER</button>
                <button class="players" id="setBtn" onclick="location.href=`../logged/changeAcctDetails.php`" value="changeAcctName">CHANGE ACCOUNT NAME</button>
            </article>
            <aside class="teams-and-players-list"></aside>
            <aside class=""></aside>
        </main>';
?>