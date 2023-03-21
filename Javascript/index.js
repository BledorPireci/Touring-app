function formValidation(inputId , pattern){
    const value = document.querySelector(inputId).value;

    if(value.match(pattern)){
        return true;
    } else {
        return false
    }
}
function tittleValidation(){
    const tittlePattern = /[a-zA-Z]/;
    formValidation("title",tittlePattern)
}