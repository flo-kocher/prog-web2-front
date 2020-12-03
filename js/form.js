let id = 0;

function new_ingredient() {
    // General valors
    let division_general = document.createElement('div')
    division_general.id = `div_${id}`
    let division_q = document.createElement('div')
    let division_u = document.createElement('div')
    let division_i = document.createElement('div')

    // from html
    //let division_n = document.getElementById('div_n')
    //let division_d = document.getElementById('div_d')
    
    // Creation of every elements of form
    let label_q = document.createElement('label')
    label_q.setAttribute('for', 'quantity_' + id)
    label_q.innerText = 'Quantité'
    let input_q = document.createElement('input')
    input_q.type = "number"
    input_q.id = `quantity_${id}`
    input_q.name = `quantity_${id}`
    input_q.min = "0"
    input_q.step = "1"
    input_q.required = true;

    let label_u = document.createElement('label')
    label_u.for = `unity_'${id}`
    label_u.innerHTML = 'Unité de mesure'
    let select_u = document.createElement('select')
    select_u.id = `unity_${id}`
    select_u.name = `unity_${id}`
    let option1 = document.createElement('option')
    option1.value = 'grammes'
    option1.innerHTML = 'Grammes'
    let option2_1 = document.createElement('option')
    option2_1.value = 'litres'
    option2_1.innerHTML = 'Litres'
    let option2_2 = document.createElement('option')
    option2_2.value = 'centilitres'
    option2_2.innerHTML = 'Centilitres'
    let option3 = document.createElement('option')
    option3.value = 'cuillères à soupe'
    option3.innerHTML = 'Cuillères à soupe'
    let option4 = document.createElement('option')
    option4.value = 'cuillères à café'
    option4.innerHTML = 'Cuillères à café'
    let option5 = document.createElement('option')
    option5.value = 'pièces'
    option5.innerHTML = 'Pièces'
    //putting all options in select
    select_u.appendChild(option1)
    select_u.appendChild(option2_1)
    select_u.appendChild(option2_2)
    select_u.appendChild(option3)
    select_u.appendChild(option4)
    select_u.appendChild(option5)

    let label_i = document.createElement('label')
    label_i.innerHTML = 'Ingrédient'
    label_i.setAttribute('for', 'ingredient_' + id)
    let input_i = document.createElement('input')
    input_i.type = "text"
    input_i.id = `ingredient_${id}`
    input_i.name = `ingredient_${id}`
    input_i.required = true;

    // Assemble of the form
    division_q.appendChild(label_q)
    division_q.appendChild(input_q)
    division_u.appendChild(label_u)
    division_u.appendChild(select_u)
    division_i.appendChild(label_i)
    division_i.appendChild(input_i)
    //division_general.appendChild(division_n)
    division_general.appendChild(division_q)
    division_general.appendChild(division_u)
    division_general.appendChild(division_i)
    //division_general.appendChild(division_d)

    let formular = document.querySelector('form').appendChild(division_general)

    id++;
}

document.getElementById('add_formular')
    .addEventListener('click', new_ingredient)

document.getElementById('create_recipe')
    .addEventListener('click',function(event){
        event.preventDefault()

        let number_of_errors = 0

        for (let i = 0; i < id; i++) {

            let hasError = false

            let quantity = document.getElementById(`quantity_${i}`)
            if(quantity.value.match(/^[-+]?[0-9]+(\.[0-9]+)?/) == null){
                quantity.previousElementSibling.style.color = "red"
                hasError = true
                number_of_errors++
            }
            quantity.addEventListener('input',function(){
                if(this.value.match(/^[-+]?[0-9]+(\.[0-9]+)?/) == null)
                    this.previousElementSibling.style.color = "red"
                else{
                    this.previousElementSibling.style.removeProperty('color')
                    hasError = false
                    number_of_errors--
                }
            })

            let ingredient = document.getElementById(`ingredient_${i}`)
            if(ingredient.value.match(/^[a-zA-ZÀ-ÿ]?/) == ""){
                ingredient.previousElementSibling.style.color = "red"
                hasError = true
                number_of_errors++
            }
            ingredient.addEventListener('input',function(){
                if(this.value.match(/^[a-zA-ZÀ-ÿ]?/) == "")
                    this.previousElementSibling.style.color = "red"
                else{
                    this.previousElementSibling.style.removeProperty('color')
                    hasError = false
                    number_of_errors--
                }
            })
        }

        if(number_of_errors == 0){
            document.querySelector('form').submit()
        }

    })
