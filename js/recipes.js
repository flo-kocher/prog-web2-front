let messagesContainer = document.getElementById('recipes')
let button = document.getElementById('more')

button.addEventListener('click', () => {
    fetch('http://localhost:8000')
        .then(response => {
            response.json()
                .then(data => {
                    data.forEach(recipe => {
                        let article = document.createElement('article')
                        let liste = document.querySelector('ul')
                        let element = document.createElement('li')
                        element.innerHTML = recipe.quantity + " " + recipe.unity + " " + recipe.ingredient
                        liste.appendChild(element)
                        messagesContainer.appendChild(article)
                    })
                })
        })
        .catch(() => {
            let errorMessage = document.createElement('p')
            errorMessage.innerText = 'Une erreur est survenue avec la demande serveur'
            errorMessage.classList.add('error_message')
            messagesContainer.innerHTML = ''
            messagesContainer.appendChild(errorMessage)
        })

})



