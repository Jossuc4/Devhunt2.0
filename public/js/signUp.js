var filePath="";
//---focus input
document.querySelectorAll('.input-box label').forEach(element => {
    element.addEventListener('click',function(e) {
        var input=document.querySelector(`input[name="${element.getAttribute('for')}"]`)
        input.focus();
    })
});

document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
    const dropZoneElement = inputElement.closest(".drop-zone");
    dropZoneElement.addEventListener("click", (e) => {
      inputElement.click();
    });
  
    inputElement.addEventListener("change", (e) => {
      if (inputElement.files.length) {
        updateThumbnail(dropZoneElement, inputElement.files[0],document.querySelector('.drop-zone__input').value);
      }
    });
  });
  /**
   * Updates the thumbnail on a drop zone element.
   *
   * @param {HTMLElement} dropZoneElement
   * @param {File} file
   */
  function updateThumbnail(dropZoneElement, file,path) {
    let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
  
    // First time - remove the prompt
    if (dropZoneElement.querySelector(".drop-zone__prompt")) {
      dropZoneElement.querySelector(".drop-zone__prompt").remove();
    }

    // First time - there is no thumbnail element, so lets create it
    if (!thumbnailElement) {
        thumbnailElement = document.createElement("div");
        thumbnailElement.classList.add("drop-zone__thumb");
        dropZoneElement.appendChild(thumbnailElement);
    }
    thumbnailElement.dataset.label = file.name;
    filePath=path;
}

var pseudo="";
var matricule="";
var mdp="";
var niveau="";
var mail="";


var valid;
/*
document.getElementById('inscrire').addEventListener('click',function(e) {
    e.preventDefault();
    if(document.getElementById('pass_in').value==document.getElementById('pass_in2').value){
      valid=true;
      document.querySelectorAll('.errMDP').forEach(function(element) {
          element.style.display="none";
      })
      getValues();
      document.getElementById('reset').click();
    }else{
        document.querySelectorAll('.errMDP').forEach(function(element) {
            element.style.display="inline";
        })
        valid = false;
    } 
})*/

/*function getValues() {
    pseudo=document.getElementById('pseudo_in').value
    matricule=document.getElementById('matricule_in').value
    mdp=document.getElementById('pass_in').value
    niveau=document.getElementById('niveau_in').options[document.getElementById('niveau_in').selectedIndex].innerText
    mail=document.getElementById('mail_in').value
    if(filePath==''){
      filePath='../img/pngegg.jpg'
    }
    //console.log(filePath);
    
    //console.log(pseudo,matricule,mdp,niveau,mail,filePath);
    $(document).ready(function(){
        $.ajax(
          {
            url:"SignUpController.php",
            type:"POST",
            data:{
              pseudo:pseudo,
              mail:mail,
              matricule:matricule,
              mdp:mdp,
              filePath:filePath
            },
            cache: false,
            success: function(dataResult){
              //var dataResult = JSON.parse(dataResult);
              if(dataResult.statusCode==200){
                console.log("hi");
               /* $("#butsave").removeAttr("disabled");
               $('#register_form').find('input:text').val('');
                $("#success").show();
                $('#success').html('Registration successful !'); 						
              }
              else if(dataResult.statusCode==201){
                console.log("Error");
              }
              
            }
          }
        )
    });
}

document.querySelector('.back').addEventListener('click',function(e) {
  window.history.back();  
})*/