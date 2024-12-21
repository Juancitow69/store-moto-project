function addToCart(productName, price) {
    alert(productName + " añadido al carrito por $" + price);
}

function redirectToPage(pageName) {
    window.location.href = pageName;
}

document.getElementById('review-form').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const name = document.getElementById('name').value;
    const rating = document.getElementById('rating').value;
    const comment = document.getElementById('comment').value;

    
    if (!name || !rating || !comment) {
        alert('Por favor, complete todos los campos.');
        return;  
    }

    
    const review = document.createElement('div');
    review.classList.add('review');
    review.innerHTML = `
        <strong>${name}</strong> (${rating} estrellas)
        <p>${comment}</p>
    `;
    document.getElementById('reviews-list').appendChild(review);


});
