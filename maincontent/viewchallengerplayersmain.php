<?php
echo'<main>
            <nav class="leagues">
                <button class="select-league-button">EPL</button>
                <button class="select-league-button">LA LIGA</button>
                <button class="select-league-button">BUNDESLIGA</button>
                <button class="select-league-button">SERIE A</button>
                <button class="select-league-button">LIGUE 1</button>
                <button class="select-league-button">LIGUE NOS</button>
            </nav>
            <aside class="opposition"></aside>
            <article class="selected-team">
                <button class="select-player-button" disabled>CHALLENGER</button>

                <button class="select-player-button" title="You can only select 1 player per league" disabled>PLAYER SELECTED</button>
                <button class="select-player-button-info" title="Player you`ve selected from the league" style="margin-bottom: 0;" disabled>Keylor Navas</button>
                <button class="select-player-button" title="You can only select 1 player per league" style="width:40vw;" disabled>POINT:</button>
                <button class="select-player-button-info" title="Point of players you`ve selected from the league" style="height: 3vh; width:40vw; background-color: rgb(0, 115, 69); font-weight: lighter; font-size: 1.5em; letter-spacing: 0.175em;" disabled>54</button>
            </article>
            <aside class="teams-and-players-list"></aside>
            <aside class="ads"><img src="../images/contact-us-smallest.png" alt="adverts" srcset=""></aside>
    </main>';
?>