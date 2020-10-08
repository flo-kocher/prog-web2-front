/*function add_new_form() {
    console.log("in function add new form");
    var new_form = document.querySelector("form");
    var element = document.getElementById("formular");
    element.appendChild(new_form);
}

document.querySelector('form button').addEventListener('click', add_new_form)*/

/*on va faire une partie qui incrément l'id a chaque fois qu'on clique sur le bouton*/


function new_ingredient(var id) {
    var division_q = document.createElement('div');
    var label_q = document.createElement('label').setAttribute('for', 'quantity_' + id);
    let label = `quantity_${id}`
    var input_q = document.createElement('input').type = number ').setAttribute('
    id ', '
    quantity ' + id).setAttribute('
    name ', '
    quantity ' + id).setAttribute('
    min ', '
    0 ');
}