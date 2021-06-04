// document.querySelector('#is').addEventListener('click', ()=>{
//     document.querySelector('#connexion').classList.add('none');
//     document.querySelector('#inscription').classList.remove('none');
// })

function switchForm(){
    document.querySelector('#connexion').classList.toggle('none');
    document.querySelector('#inscription').classList.toggle('none');
}

function myEye(){

    let input = document.querySelector('#mdp')
    document.querySelector(".eye1").classList.toggle('none');
    document.querySelector(".eye").classList.toggle('none');
    if(input.type === "password"){
        input.type = "text";
    }else{
        input.type ="password";
    }
}
    

 
