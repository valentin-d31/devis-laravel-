
/*const formValue = document.getElementById('search-form');

formValue.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log(e);
    const token = document.querySelector('meta[name="csrf-token"]').content;
    /* envoyer la méthod ajax sur l'utl */
    //deja dans le formulaire donc nous pouvons faire un this. au lieu du getElementById
    //action correspond à la route
   /* const url = this.getAttribute('action');
    const q = document.getElementById('q').value;

});*/

$( document ).ready(function() {

    const form = document.getElementById('search-form');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const token = document.querySelector('meta[name="csrf-token"]').content;
        const url = this.getAttribute('action');
        const  q = document.getElementById('q').value;

        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            method: 'post',
            body: JSON.stringify({
                q: q
            })
        }).then(response => {
            response.json().then(data => {
                const produits = document.getElementById('produits');
                produits.innerHTML = '';

                Object.entries(data)[0][1].forEach(element => {
                    produits.innerHTML += `<h1>${element.name}</h1>
                                    <p>${element.reference}</p>
                                    `
                });
            })
        }).catch(error => {
            console.log(error)
        })
    });
});
