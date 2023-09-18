const items = [];
const itms = document.querySelectorAll('.item');
itms.forEach(item => {
    item.addEventListener('click', (e)=>{
        e.preventDefault()
        const data = e.target.value
        const name = document.getElementById('name').textContent
        const price = document.getElementById('price').textContent
        const img = document.getElementById('img').scr
        const filename = img.replace(/^.*[\\\/]/,'')
        console.log([name,price,filename,data])
        items.push({data,name,price,filename})
        const added = localStorage.setItem("cartlist", JSON.stringify(items))
        if(added){
            alert('added')
        }
        console.log(localStorage.getItem('cartlist'))
    })
    
})
const item = document.querySelector('.item').addEventListener('click', addIUtem)

function addIUtem(e){
    e.preventDefault()
    const value = e.target.value;
    const tm = {id: value}
    items.push(tm)
    console.log(items)
    const senddata = fetch('send.php',{
        method: "POST",
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(items)
    }).then(res => {return res}).then(data =>console.log(data.text()))




}
// class cartItem{
//     constructor(name,img,price){
//         this.name=name
//         this.img=img
//         this.price=price
//         this.quantity=1
//     }
// }


// class LocalCart{
//     static key="cartItems"
//     static getLocalCartItems(){
//         let cartMap=new Map()
//         const cart = localStorage.getItem(LocalCart.key)
//         if(cart===null || cart.length===0) return cartMap
//         return new Map(Object.entries(JSON.parse(cart)))
//     }


//     static addItemToLocalCart(id,items){
//         let cart = localStorage.getLocalCartItems()
//         if(cart.has(id)){
//             let mapItem = cart.get(id)
//             mapItem.quantity +=1
//             cart.set(id, mapItem)
//         }else{
//             cart.set(id.item)
//             localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)))
//             updateCartUI()
//         }
//     }


//     static removeItemFromCart(id){
//         let cart=LocalCart.getLocalCartItems()
//         if(cart.has(id)){
//             let mapItem = cart.get(id)
//             if(mapItem.quantity>1){
//                 mapItem.quantity -=1
//                 cart.set(id,mapItem)
//             }else{
//                 cart.delete(id)
//             }
//         }
//         if(cart.length===0){
//             localStorage.clear()
//         }else{
//             localStorage.setItem(key, JSON.stringify(Object.fromEntries(cart)))
//             updateCartUI()
//         }
//     }
// }

// const addToCartBtns = document.querySelectorAll('.add-to-cart-btn')
// addToCartBtns.addEventListener('click', addItemFunction())

// function addItemFunction(e) {
//     console.log(e.target)    
// }

// const addToCartBtn = document.getElementsByClassName('addToCart');
// let items=[];
// for(let i=0; i<addToCartBtn.length; i++){
//     addToCartBtn[i].addEventListener("click", function(e){
//         if(typeof(Storage) !== 'undefined'){
//             let item={
//                 id:i+1,
//                 name:e.target.parentElement.children[1].textContent,
//                 price:e.target.parentElement.children[2].children[0].textContent,
//                 no:1
//             };
//             if(JSON.parse(localStorage.getItem('items')) === null){
//                 items.push(item);
//                 localStorage.setItem("items",JSON.stringify(items));
//             }else{
//                 const localItems = JSON.parse(localStorage.getItem("items"));
//                 localItems.map(data=>{
//                     if(item.id == data.id){
//                         item.no = data.no +1;
//                     }else{
//                         items.push(data);
//                     }
//                 });
//                 items.push(items);
//                 localStorage.setItem('items',JSON.stringify(items));
//                 window.location.reload();
//             }
//         }else{
//             alert('storage is not working on your browser');
//         }
//     })
// }


// Initialize the cart from Local Storage or create an empty array
// let cart = JSON.parse(localStorage.getItem('cart')) || [];

// // Function to add a product to the cart
// function addToCart(productId) {
//     // Find the product by its ID in the products array
//     const product = products.find(p => p.id === productId);
    
//     if (product) {
//         // Add the product to the cart
//         cart.push(product);
        
//         // Update the cart in Local Storage
//         localStorage.setItem('cart', JSON.stringify(cart));
        
//         // Update the cart display (you can customize this)
//         updateCartDisplay();
//     }
// }

// // Function to update the cart display (e.g., show items in the cart)
// function updateCartDisplay() {
//     const cartDiv = document.getElementById('cart');
//     cartDiv.innerHTML = ''; // Clear previous content
    
//     cart.forEach(product => {
//         const itemDiv = document.createElement('div');
//         itemDiv.textContent = product.name;
//         cartDiv.appendChild(itemDiv);
//     });
// }

// // Call updateCartDisplay when the page loads to show the initial cart items
// window.addEventListener('load', updateCartDisplay);
// function removeFromCart(productId) {
//     const index = cart.findIndex(product => product.id === productId);
//     if (index !== -1) {
//         cart.splice(index, 1);
//         localStorage.setItem('cart', JSON.stringify(cart));
//         updateCartDisplay();
//     }
// }
