<?php
echo'<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8"/>
        <meta name="eleven" content="A money making challenge site. Compete against others and win big."/>
        <meta name="viewport" content="width=device-width"/>
        <title>Eleven</title>
        <link rel="stylesheet" href="../styles/selectplayers.css">
    </head>
    <body>
        <header>
            <ul class="help-start">
                <a href="../logged/help.php">HELP</a>
                <a href="stats.php">STATS</a>
            </ul>
            <div class="dropdown">
                <!--The number 1000 at the front of the my account is the amount the user has available in his/her account-->
                <button class="dropbtn">My Account 1000</button>
                <div class="dropdown-content">
                    <p style="text-align: left; font-size: small; padding-left: 0.55em; padding-right: 0.55em;">User ID:<br/>213345<br/><br/>Name:<br/>Eghianruwa Nosamudiana</p>
                    <a href="organize.php">Cash</a>
                    <a onclick="leave()">Log out</a>
                    <a href="settings.php">Settings</a>
                </div>
            </div>
        </header>';
?>