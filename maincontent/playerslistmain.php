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
            <button class="list-label" disabled>SELECT PLAYER</button>
            <button class="players" id="players" onclick="savePlayer()" value="DeGea">De Gea</button>
            <button class="players" id="players" onclick="savePlayer()" value="Dalot">Dalot</button>
            <button class="players" id="players" onclick="savePlayer()" value="RVarane">R. Varane</button>
            <button class="players" id="players" onclick="savePlayer()" value="LMartinez">L. Martinez</button>
            <button class="players" id="players" onclick="savePlayer()" value="TMalacia">T. Malacia</button>
            <button class="players" id="players" onclick="savePlayer()" value="Caseimero">Caseimero</button>
            <button class="players" id="players" onclick="savePlayer()" value="CEriksen">C. Eriksen</button>
            <button class="players" id="players" onclick="savePlayer()" value="BFernandez">B. Fernandez</button>
            <button class="players" id="players" onclick="savePlayer()" value="Antony">Antony</button>
            <button class="players" id="players" onclick="savePlayer()" value="JSancho">J.Sancho</button>
            <button class="players" id="players" onclick="savePlayer()" value="CRonaldo">C. Ronaldo</button>
        </aside>
        <aside class="ads"><img src="../images/contact-us-smallest.png" alt="adverts" srcset=""></aside>
    </main>';
?>