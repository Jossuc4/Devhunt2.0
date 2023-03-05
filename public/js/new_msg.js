

document.querySelector('.pseudo').addEventListener('mouseenter',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(1)";    
})
document.querySelector('.pseudo').addEventListener('mouseleave',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(0)";    
})
var titre_msg="";

function getTitre() {
    return document.getElementById('titre').value;
}


var contenu_msg=[];
//------------------------
/*var contenu_msg=[];
document.querySelector('.image').addEventListener('click',function(e) {
    var contenu=`
        <label for="file_in" id="img_lab">cliquer içi pour ajouter l'image</label>
        <input type="file" name="file_in" id="file_in">
    `
    var child =document.createElement('div');
    child.setAttribute("class","image_in");
    child.innerHTML=contenu.trim();
    document.querySelector('.contenu').appendChild(child);
    contenu_msg.push({
        type:'img',
        contenu:'',
        ref:child.childNodes[2]
    })
    console.log(contenu_msg);
})*/


/*
document.querySelector('.texte').addEventListener('click',function(e) {
    var contenu=`<textarea name="textarea" id="text_cont" cols="100" rows="5"></textarea>`
    var child =document.createElement('div');
    child.setAttribute("class","texte_in");
    child.innerHTML=contenu.trim();
    document.querySelector('.contenu').appendChild(child);
    contenu_msg.push({
        type:'txt',
        contenu:'',
        ref:child.firstChild
    })
    console.log(contenu_msg);
})
*/

function getMsgContenu() {
    /*
        contenu_msg.forEach(element => {
        element.contenu=element.ref.value;
    });
    */
    return document.querySelector('.p2 #text_cont').value;
}
///--------content_msg          : values

var tagList=["HTML","JS","PHP","JS","C","C++"]
var msg_tags=[]; 

tagList.forEach(element => {
    const li = document.createElement('li');
    li.innerHTML=element;
    document.getElementById('ul').appendChild(li);
});

document.querySelector('.ok_tag').addEventListener('click',function(e) {
    e.preventDefault();
    if(document.getElementById('tag_in').value!=""){
        const li = document.createElement('li');
        li.innerHTML=document.getElementById('tag_in').value;
        document.getElementById('ul').appendChild(li);
        li.classList.add('selected');
        tagList.unshift(li.value);
        document.getElementById('tag_in').value="";
    }
})

document.querySelectorAll('.tagList_ul li').forEach(element => {
    element.addEventListener('click',function(e){
        if(element.classList.contains('selected')){
            element.classList.remove('selected');
        }else {
            element.classList.add('selected');
        }
    })
});

document.querySelector('.create-tag .input-box label').addEventListener('click',function(params) {
    document.getElementById('tag_in').focus();
})

function getTags() {
    document.querySelectorAll('.tagList_ul li').forEach(element => {
        if(element.classList.contains('selected')){
            msg_tags.push(element.innerHTML);
        }
    });
    return msg_tags;
}


document.getElementById('sub3').style.display="none";

document.getElementById('suivant3').addEventListener('click',function() {
    console.log(getTitre());
    console.log(getMsgContenu());
    console.log(getTags());
    document.getElementById('sub3').click();
})
