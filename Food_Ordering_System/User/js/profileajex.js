function profileajex()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("ajex").innerHTML=this.responseText;
            }
    };
    xhttp.open("GET","../control/profileajex.php",true);
    xhttp.send();
}