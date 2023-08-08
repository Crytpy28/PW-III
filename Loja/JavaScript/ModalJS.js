function abrirModal(){
    const modal= document.getElementById('Jlogin')
    modal.classList.add('abrir')
    
    modal.addEventListener('click',(e) =>{
        if(e.target.id== 'fechar' || e.target.id == 'Jlogin '){
            modal.classList.remove('abrir')
        }
    })
}