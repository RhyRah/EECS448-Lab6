<script>

function onSubmit() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var ballnum = document.getElementById('ballnum').value;
    var billnum = document.getElementById('billnum').value;
    var fpjnum = document.getElementById('fpjnum').value;
    var ship = document.getElementById('free').value;
                
    console.log(document.getElementById('password').value);
                
    if(username == "" || password == ""){
        alert("Please fill out username and/or password");
    }
                
    else if ((ballnum == "" || billnum == "" || fpjnum == "") || (ballnum < 0 || billnum < 0 || fpjnum < 0)){
        alert("Please input a number 0 or greater for items");
    }
                
    else if(ship == ""){
        alert("Select a shipping time");
    }
                
  
}
             
document.getElementById("button").addEventListener("click",onSubmit);

</script>
