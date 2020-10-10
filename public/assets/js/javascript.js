(function(win, doc) {
    'use strict';

    function confirmDel(event) {
        event.preventDefault();

        let token = doc.getElementsByName("_token")[0].value;
        if (confirm('Deseja Deletar?')) {
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function() {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    win.location.href = "/todos";
                }
            }
            ajax.send();

        } else {
            return false;
        }

    }


    if (doc.querySelector('.js-del')) {
        let btn = doc.querySelectorAll('.js-del');

        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click', confirmDel, false);
        }

    }



})(window, document)




$('body').on('click', '.editBtn', function() {

    var id = $(this).data('id');
    var name = $(this).data('name');
    var input = document.querySelector('.input2');


    document.querySelector('#formEdit').setAttribute('action', `/todos/${id}`);
    input.value = name;
    input.setAttribute('value', name);




})