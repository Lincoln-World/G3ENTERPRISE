class cartItem{
    constructor(name,img,price){
        this.name=name
        this.img=img
        this.price=price
        this.quantity=1
    }
}


class LocalCart{
    static key="cartItems"
    static getLocalCartItems(){
        let cartMap=new Map()
        const cart = localStorage.getItem(LocalCart.key)
        if(cart===null || cart.length===0) return cartMap
        return new Map(Object.entries(JSON.parse(cart)))
    }


    static addItemToLocalCart(id,items){
        let cart = localStorage.getLocalCartItems()
        if(cart.has(id)){
            let mapItem = cart.get(id)
            mapItem.quantity +=1
            cart.set(id, mapItem)
        }else{
            cart.set(id.item)
            localStorage.setItem(LocalCart.key, JSON.stringify(Object.fromEntries(cart)))
            updateCartUI()
        }
    }


    static removeItemFromCart(id){
        let cart=LocalCart.getLocalCartItems()
        if(cart.has(id)){
            let mapItem = cart.get(id)
            if(mapItem.quantity>1){
                mapItem.quantity -=1
                cart.set(id,mapItem)
            }else{
                cart.delete(id)
            }
        }
        if(cart.length===0){
            localStorage.clear()
        }else{
            localStorage.setItem(key, JSON.stringify(Object.fromEntries(cart)))
            updateCartUI()
        }
    }
}

const addToCartBtns = document.querySelectorAll('.add-to-cart-btn')
addToCartBtns.addEventListener('click', addItemFunction())
function addItemFunction(e){
    console.log(e.target)    
}