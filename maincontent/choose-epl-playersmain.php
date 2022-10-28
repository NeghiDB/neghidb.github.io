<?php
echo '<main>
            <nav class="leagues">
                <button class="select-league-button">EPL</button>
                <button class="select-league-button">LA LIGA</button>
                <button class="select-league-button">BUNDESLIGA</button>
                <button class="select-league-button">SERIE A</button>
                <button class="select-league-button">LIGUE 1</button>
                <button class="select-league-button">LIGUE NOS</button>
            </nav>
            <aside class="opposition"></aside>
            <article></article>
            <aside class="teams-list">
                <button class="list-label" disabled>SELECT TEAM</button>
                <!--on clicking any of the buttons you display checkboxes containing only the players that have the team value
                also displaying them too
                example of a js code: document.getElementById("id").value-->
                <button class="players-list" onclick="premSub()" id="top-btn" value="ARS">Arsenal</button>
                <button class="players-list" onclick="premSub()" id="btn" value="AST">Aston Villa</button>
                <button class="players-list" onclick="premSub()" id="btn" value="BOU">Bournemouth</button>
                <button class="players-list" onclick="premSub()" id="btn" value="BRE">Brentford</button>
                <button class="players-list" onclick="premSub()" id="btn" value="BHA">Brighton and Hove Albion</button>
                <button class="players-list" onclick="premSub()" id="top-btn" value="CHE">Chelsea</button>
                <button class="players-list" onclick="premSub()" id="btn" value="CRY">Crystal Palace</button>
                <button class="players-list" onclick="premSub()" id="btn" value="EVE">Everton</button>
                <button class="players-list" onclick="premSub()" id="btn" value="FUL">Fulham</button>
                <button class="players-list" onclick="premSub()" id="btn" value="LEE">Leeds United</button>
                <button class="players-list" onclick="premSub()" id="btn" value="LEI">Leicester</button>
                <button class="players-list" onclick="premSub()" id="btn" value="LIV">Liverpool</button>
                <button class="players-list" onclick="premSub()" id="top-btn" value="MNC">Manchester City</button>
                <button class="players-list" onclick="premSub()" id="btn" value="MNU">Manchester United</button>
                <button class="players-list" onclick="premSub()" id="btn" value="NEWU">Newcastle United</button>
                <button class="players-list" onclick="premSub()" id="btn" value="NOTT">Nottingham Forest</button>
                <button class="players-list" onclick="premSub()" id="btn" value="SOU">Southampton</button>
                <button class="players-list" onclick="premSub()" id="top-btn" value="TOT">Tottenham Hotspurs</button>
                <button class="players-list" onclick="premSub()" id="btn" value="WHU">West Ham United</button>
                <button class="players-list" onclick="premSub()" id="btn" value="WOL">Wolverhamtpon Wanderers</button>
            </aside>
            <aside class="ads"><img src="../images/contact-us-smallest.png" alt="adverts" srcset=""></aside>
        </main>';
?>