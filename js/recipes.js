let messagesContainer = document.getElementById('recipes')

let button = document.createElement('button')
messagesContainer.appendChild(button)

/*
window.addEventListener('scroll', () => {
  
})
*/
button.addEventListener('click', () => {
    fetch('http://localhost:8000')
        .then(response => {
            console.log(response)
            response.json()
                .then(data => {
                    console.log(data)
                    data.forEach(recipe => {
                        let article = document.createElement('article')
                        let paragraph = document.createElement('p')
                        paragraph.innerText = recipe.ingredient+ " " +recipe.quantity+ " "+recipe.unity

                        article.appendChild(paragraph)

                        messagesContainer.appendChild(article)
                /*
                let article = document.createElement('article')
                let paragraph = createElement('p')
                //paragraph.innerText = recipe
                console.log(recipe)

                article.appendChild(paragraph)
                messagesContainer.appendChild(article)
        */
                /*
                        let article = document.createElement('article')
                        let title = document.createElement('h2')
                        title.innerText = message.subject

                        let link = document.createElement('a')
                        link.href = 'mailto:' + message.email
                        link.innerText = message.name

                        let text = document.createElement('p')
                        text.innerText = message.text

                        article.appendChild(title)
                        article.appendChild(link)
                        article.appendChild(text)
                        messagesContainer.appendChild(article)
            */
                    })
                })


        // response.json()
        //   .then(data => {
        //     let messageContainer = null
        //     let title = null
        //     let userLink = null
        //     let text = null
        //
        //     data.messages.forEach(message => {
        //       title = document.createElement('h2')
        //       title.innerText = message.subject
        //
        //       userLink = document.createElement('a')
        //       userLink.href = 'mailto:' + message.email
        //       userLink.innerText = message.name
        //
        //       text = document.createElement('p')
        //       text.innerText = message.text
        //
        //       messageContainer = document.createElement('article')
        //       messageContainer.appendChild(title)
        //       messageContainer.appendChild(userLink)
        //       messageContainer.appendChild(text)
        //       messagesContainer.appendChild(messageContainer)
        //     })
        //   })

        })
        .catch(() => {
            let errorMessage = document.createElement('p')
            errorMessage.innerText = 'Une erreur est survenue avec la demande serveur'
            errorMessage.classList.add('error_message')
            messagesContainer.innerHTML = ''
            messagesContainer.appendChild(errorMessage)
        })

})



