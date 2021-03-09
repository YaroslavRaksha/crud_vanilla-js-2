let order = document.getElementById('clientOrder');

order.onclick = function(event) {
    if (event.target.className != 'delete__pane') return;
    let pane = event.target.closest('.item__pane');
    pane.classList.add('there');
    let index = [...document.querySelectorAll('#clientOrder > #pane')].findIndex(n => n.classList.contains('there'));
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    pane.remove();
  };
  
let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [] 

if (cart.length) {
  cart.forEach(function(item) {
    addToCart(item, true)
  })
}

function addToCart(item, noNeedToStore) {
    let itemInfo = item.split(',');
    let itemName = itemInfo[0];
    let itemPrice = itemInfo[1];
    let itemImg = itemInfo[2];

    let deleteOrder = document.createElement('div');
    deleteOrder.classList.add('col-2')
    deleteOrder.innerHTML = '<a class="delete__pane">x</a>';

    let shellInfo = document.createElement('div');
    shellInfo.append(itemName + itemPrice + itemImg);
    shellInfo.classList.add('col-10');

    let shellForOrder = document.createElement('div');
    shellForOrder.classList.add('row');
    shellForOrder.classList.add('item__pane');
    shellForOrder.setAttribute("id", "pane");
    shellForOrder.append(shellInfo);
    shellForOrder.append(deleteOrder);
    order.append(shellForOrder);

    if(!noNeedToStore) {
        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart));
    }
}