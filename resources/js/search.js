const form = document.getElementById('search-form');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const token = document.querySelector('meta[name="csrf-token"]').content;
    console.log(token);
    /* envoyer la méthod ajax sur l'utl */
    //deja dans le formulaire donc nous pouvons faire un this. au lieu du getElementById
    //action correspond à la route
    const url = this.getAttribute('action');
    const q = document.getElementById('q').value;
    console.log(q);

});
