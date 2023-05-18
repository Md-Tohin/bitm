const listGroup = document.getElementById('list-group');
const plusButton = document.getElementById('plus-button');

plusButton.addEventListener('click', function(e){
    // e.preventDefault();  
    const newLi = document.createElement('li');
    newLi.classList.add('list-unstyled');
    newLi.classList.add('d-inline-flex');
    newLi.innerHTML = `
        <input type="text" name="name" class="form-control" placeholder="Name">
        <input type="text" name="price" class="form-control" placeholder="Price">
        <input type="text" name="qty" class="form-control" placeholder="Quantity">
        <button class="btn btn-success mx-2" id="plus-button">+</button>  
        <button class="btn btn-danger" id="minus-button">-</button>
    `;
    listGroup.appendChild(newLi);
    // e.target.parentNode.removeChild(e.target)
    // console.log(e.target.parentNode.removeChild(e.target));
});

// document.getElementById('plus-button').addEventListener('click', function(e){
//     e.preventDefault();
    
//     console.log(addRemoveContainer);
// });