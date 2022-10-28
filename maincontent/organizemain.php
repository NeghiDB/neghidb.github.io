<?php
    echo '<main>
        <nav class="leagues" id="leagues"></nav>
        <aside class="opposition"></aside>
        <article class="selected-team" style="height: 81vh;background-image: none; color: black;">
            <!--Displays information about -->
            <h1>CASH DEPOSIT</h1>
            <p>This section talks about how cash can be deposited to eleven</p>
            <h2>Through Bank Account</h2>
            <p>Transfer amount to --account number-- using description "eleven credit --user id--". That means if --user id-- is "fstadr" you would use "eleven credit fstadr".</p>
            <h2>Through OPay</h2>
            <p>Transfer amount to --account number-- using description "eleven credit"</p>
            <br/><br/>
            <h1>CASH WITHDRAWAL</h1>
            <p>This section talks about how cash can be withdrawn from eleven</p>
            <h2>Through Bank Account</h2>
            <p>Transfer amount to --account number-- using description "eleven credit --user id--". That means if --user id-- is "fstadr" you would use "eleven credit fstadr".</p>
            <h2>Through OPay</h2>
            <p>Transfer amount to --account number-- using description "eleven credit"</p>
        </article>
        <aside class="teams-and-players-list"></aside>
        <aside class=""></aside>
    </main>
    <script>
        function myNavButtonsDisplay(){
            //document.getElementById(`leagues`).style.visibility=`hidden`;
            if (document.getElementById(`leagues`).style.display==`block`){
                document.getElementById(`leagues`).style.display="";
            }else{
                document.getElementById(`leagues`).style.display=`block`;
            }
        }
        function leave(){
            if(confirm("Log out?")==true){
                location.replace("../index.php");
            }
        }
    </script>';
?>