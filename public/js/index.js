var tagList = ["PHP",'JS','HTML'];

/**
 * ajouter un tag
 * @param {string} tag le nom du tag a ajouter 
 */
function addTagToNav(tag) {
    const ul=document.querySelector('.nav_tag_list');
    var li=document.createElement('li');
    li.innerHTML=tag;
    ul.appendChild(li);
}
tagList.forEach(tag => {
    addTagToNav(tag);
});



document.querySelector('.pseudo').addEventListener('mouseenter',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(1)";    
})
document.querySelector('.pseudo').addEventListener('mouseleave',function(event) {
    document.querySelector('.pseudo ul').style.transform="scaleY(0)";    
})

document.querySelectorAll('.filtre-i').forEach(element => {
    element.addEventListener('click',function() {
        document.querySelectorAll('.activeFilter').forEach(ele => {
            ele.classList.remove('activeFilter');
        });
        element.classList.add("activeFilter");
    })
});











/**
 * creer les elements avec ses attributs
 * @param {string} tagName 
 * @param {object} properties 
 */
function createElements(tagName,properties={}){
    var element = document.createElement(tagName);
    for (const [key,value] of Object.entries(properties)) {
        element.setAttribute(key,value)
    }
    return element;
}
/**
 * 
 * @param {string} titre 
 * @param {string} contenu 
 * @param {string} auteur 
 * @param {string} pdp 
 * @param {Int16Array} nbVote 
 * @param {Int16Array} nbReponse 
 * @param {date} date 
 */
function addMsgToList(titre,contenu,auteur,pdp,nbVote,nbReponse,date) {
    var container=createElements('div',{
        class:'msg-container'
    })
    var contenu=`
        <h1>${titre}</h1>
        <div class="auteur">
        <img src="${pdp}" alt="pdp">@<p class="nom">${auteur}</p> 
        </div>
        <h4>${contenu}</h4>
        <div class="msg-foot">
            <div class="msg-foot-repondre">repondre</div>
            <div class="char">
                <div class="value">${nbVote}</div>
                <span class="prop"> votes</span>
            </div>
            <div class="char">
                <div class="value">${nbReponse}</div>
                <span class="prop"> reponses</span>
            </div>
            <div class="char">
                <span class="prop">le: </span>
                <div class="value">${date}</div>
            </div>
        </div>
    `
    container.innerHTML=contenu;
    document.querySelector('.list-container').appendChild(container);
}

addMsgToList("titre","contenu","tsilavo","img/pngegg.png",10,0,'2023-03-05');