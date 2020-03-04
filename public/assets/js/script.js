(function (win, doc) {
    'use strict';

    function confirmarDel(event) {
        event.preventDefault();
        let token = doc.getElementsByName("_token")[0].value; //obtendo o token criado pelo csrf do laravel
        if(
            
            confirm("Deseja mesmo apagar?")

            ){
            let ajax = new XMLHttpRequest(); // Criando o objeto para ajax
            ajax.open("DELETE", event.target.parentNode.href);
                /**
                 * Passando o método DELETE pelo ajax
                 * event.target.parentNode.href => se refere ao link(href) do objeto targeado(target.parentNode) durante o evento click
                 */
            ajax.setRequestHeader('X-CSRF-TOKEN', token); //passando o token obtido
            ajax.onreadystatechange = function (){
                if(ajax.readyState === 4 && ajax.status === 200){ //Verifica se a conexão funciona corretamente
                    win.location.href="dashboard";
                    // console.log('dale');
                }
                
            };
            ajax.send();
        } else {
            return false;
        }
    }

    if(doc.querySelector('#js-del')){
        let btn = doc.querySelectorAll('#js-del');
        for (let index = 0; index < btn.length; index++) {
            btn[index].addEventListener('click', confirmarDel, false);
            
        }
    }

})(window, document);