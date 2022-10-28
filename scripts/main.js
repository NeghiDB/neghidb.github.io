// the premium sub function would best be done with php or something to avoid html documents getting affected
function premSub(){
        /*if user is a premium subsciber then the user should have a message prompt otherwise, the user should be
        directed to a different web page*/
        const x = document.getElementById('top-btn');
        const y = document.getElementById('btn');
        
        x.addEventListener("click",()=>{
            alert("Only premium subsribers can choose a player from here")
            if(confirm("Do you want to become a premium subscriber?")==true){
                if(confirm("400 will be deducted from your account balance every week")==true){
                    //over here there would be a code to update the person's package to premium on the database
                    alert("You are now a premium subscriber")
                    //over here there would be a code to update the accessibility of the top-clubs here 
                }
            }
        })

        y.addEventListener("click",()=>{
            location.href='playerslist.html';
        })
}

function savePlayer(){
    /*De Gea in this case is player picked, the value would be a variable depending on the actual button clicked*/
    let x = document.getElementById('players').value;
    if(confirm("Select "+ x +" as player pick")==true){
        /*if money not enough
        alert('You have to have at least 500 naira to select this player');*/
        location.href='../logged/selectplayers.html';
    }else{
        alert(x +" was not selected.");
    }
}