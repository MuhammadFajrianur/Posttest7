const sun = document.getElementById('sun');
const moon = document.getElementById('moon');


sun.addEventListener("click",function(){
    var darkMode = document.body;
    darkMode.classList.add('terang');
    alert("Mode Terang")
})

moon.addEventListener("click",function(){
    var darkMode = document.body;
    darkMode.classList.remove('terang');
    alert("Mode Gelap")
})

function test(){
    document.getElementById("image").src = "Canon.jpg"
}