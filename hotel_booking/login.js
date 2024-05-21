
let el=document.getElementById('abc');
alert(el.innerHTML);
el.innerHTML=" ";
el.onclick=kr();
function kr(){
window.location.replace("http://localhost/phpproject/login.php");                 
}
