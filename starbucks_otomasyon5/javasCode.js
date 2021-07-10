function getir()
{
    var kahve_adı = document.getElementById("secenek1").value;
    if(kahve_adı == "Latte" || kahve_adı == "Mocha" || kahve_adı == "Maccihiato" || kahve_adı == "Americano" )
    {
        document.getElementById("secenek2").style.display ="flex";
        document.getElementById("secenek3").style.display = "flex";
    }
    else {
        document.getElementById("secenek2").style.display ="none";
        
    }
}

function getir2()
{
    var espresso_secimi_stil_kontrol = document.getElementById("secenek2").style;
    if(espresso_secimi_stil_kontrol.display == "flex")
    {
        document.getElementById("secenek3").style.display = "flex";
        document.getElementById("secenek4").style.display = "flex"
    }
    else {
        document.getElementById("secenek3").style.display = "none";
    }
    
}
 



function getir4()
{
    var  value = document.getElementById( "secenek1" );  
    var  getvalue = value.options[value.selectedIndex].value;  
    
    document.getElementById("degeral").innerText = getvalue;
}

function scrollWin() {
    window.scrollBy(0, 100);
  }