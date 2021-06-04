document.querySelector('#is').addEventListener('click', ()=>{
    document.querySelector('#connexion').classList.add('none');
    document.querySelector('#inscription').classList.remove('none');
})

document.querySelector('.eye').addEventListener('click', ()=>{
    let input = document.querySelector('#mdp')
    if(input.type === "password"){
        input.type = "text";
    }else{
        input.type ="password";
    }
    
})

 
