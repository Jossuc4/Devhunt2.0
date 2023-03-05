
document.querySelector('.pseudo').addEventListener('mouseenter',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(1)";    
})
document.querySelector('.pseudo').addEventListener('mouseleave',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(0)";    
})
var titre_msg="";
document.querySelectorAll('.filtre-i').forEach(element => {
    element.addEventListener('click',function() {
        document.querySelectorAll('.activeFilter').forEach(ele => {
            ele.classList.remove('activeFilter');
        });
        element.classList.add("activeFilter");
    })
});

document.querySelector('.b').addEventListener('click',function(e) {
    document.querySelector('.modif').style.animation='monter .3s forwards';
})
document.querySelector('#res').addEventListener('click',function(e) {
    document.querySelector('.modif').style.animation='descend .3s forwards';
})