<?php
    echo'<main>
        <nav class="leagues" id="leagues">
            <!--Save data of any pressed button here using javascript-->
            <button class="select-league-button" onclick="location.href=`choose-epl-players.php`">EPL</button>
            <button class="select-league-button" onclick="alert(`There are no teams available for selection here yet`)">LA LIGA</button>
            <button class="select-league-button" onclick="alert(`There are no teams available for selection here yet`)">BUNDESLIGA</button>
            <button class="select-league-button" onclick="alert(`There are no teams available for selection here yet`)">SERIE A</button>
            <button class="select-league-button" onclick="alert(`There are no teams available for selection here yet`)">LIGUE 1</button>
            <button class="select-league-button" onclick="alert(`There are no teams available for selection here yet`)">LIGUE NOS</button>
        </nav>
        <aside class="opposition"></aside>
        <article class="selected-team">
            <!--Takes you straight to chooseplayers.php-->
            <button class="select-players-button" onclick="myNavButtonsDisplay()">SELECT LEAGUE</button>
        </article>
        <aside class="teams-and-players-list"></aside>
        <aside class="ads"><img src="../images/contact-us-smallest.png" alt="adverts" srcset=""></aside>
    </main>';
?>