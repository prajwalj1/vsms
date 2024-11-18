// Sample data of spare parts
const spareParts = [
    { name: 'Brake Pads', price: '$50', image: 'https://via.placeholder.com/100' },
    { name: 'Oil Filter', price: '$20', image: 'https://via.placeholder.com/100' },
    { name: 'Air Filter', price: '$15', image: 'https://via.placeholder.com/100' },
    { name: 'Battery', price: '$100', image: 'https://via.placeholder.com/100' },
    { name: 'Spark Plugs', price: '$25', image: 'https://via.placeholder.com/100' },
    { name: 'Headlight Bulb', price: '$10', image: 'https://via.placeholder.com/100' }
];

// Populate spare parts section dynamically
const sparePartsContainer = document.querySelector('.spare-parts');

spareParts.forEach(part => {
    const partCard = document.createElement('div');
    partCard.classList.add('part-card');
    partCard.innerHTML = `
        <img src="${part.image}" alt="${part.name}">
        <h2>${part.name}</h2>
        <p>Price: ${part.price}</p>
    `;
    sparePartsContainer.appendChild(partCard);
});
