/*function add_new_form() {
    console.log("in function add new form");
    var new_form = document.querySelector("form");
    var element = document.getElementById("formular");
    element.appendChild(new_form);
}

document.querySelector('form button').addEventListener('click', add_new_form)*/

/*on va faire une partie qui incrément l'id a chaque fois qu'on clique sur le bouton*/

let id = 0;

function new_ingredient() {
    // General valors
    let division_general = document.createElement('div')
    division_general.id = `div_${id}`;
    let division_q = document.createElement('div');
    let division_u = document.createElement('div');
    let division_i = document.createElement('div');

    // Creation of every elements of form
    let label_q = document.createElement('label');
    label_q.setAttribute('for', 'quantity_' + id);
    label_q.innerText = 'Quantité';
    let input_q = document.createElement('input')
    input_q.type = "number"
    input_q.id = `quantity_${id}`
    input_q.name = `quantity_${id}`
    input_q.min = "0"
    input_q.step = "0.1";

    let label_u = document.createElement('label');
    label_u.for = `unity_'${id}`;
    label_u.innerHTML = 'Unité de mesure';
    let select_u = document.createElement('select');
    select_u.id = `unity_${id}`
    select_u.name = `unity_${id}`;
    let option1 = document.createElement('option');
    option1.value = `gram_${id}`;
    option1.innerHTML = 'Grammes';
    let option2 = document.createElement('option');
    option2.value = `liter_${id}`;
    option2.innerHTML = 'Litres';
    let option3 = document.createElement('option');
    option3.value = `tablespoon_${id}`;
    option3.innerHTML = 'Cuillères à soupe';
    let option4 = document.createElement('option');
    option4.value = `teaspoon_${id}`;
    option4.innerHTML = 'Cuillères à café';
    //putting all options in select
    select_u.appendChild(option1);
    select_u.appendChild(option2);
    select_u.appendChild(option3);
    select_u.appendChild(option4);

    let label_i = document.createElement('label');
    label_i.innerHTML = 'Ingrédient';
    label_i.setAttribute('for', 'ingredient_' + id);
    let input_i = document.createElement('input');
    input_i.type = "text";
    input_i.id = `ingredient_${id}`;
    input_i.name = `ingredient_${id}`;

    // Assemble of the form
    division_q.appendChild(label_q)
    division_q.appendChild(input_q);
    division_u.appendChild(label_u)
    division_u.appendChild(select_u);
    division_i.appendChild(label_i)
    division_i.appendChild(input_i);
    division_general.appendChild(division_q)
    division_general.appendChild(division_u)
    division_general.appendChild(division_i);

    let formular = document.querySelector('form').appendChild(division_general);

    id++;
}

document.getElementById('add_formular').addEventListener('click', new_ingredient);