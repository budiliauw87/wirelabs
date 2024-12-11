
/**
 * Simple Cart js
 * Created By Budiliauw87
 * 
 */
export default class cartJS{
    constructor(){
        this.items = []
        this.badgeCart =  document.getElementById('nav-cart')
        console.log("cart init");
    }
    insertCart( item = 'Default'){
        this.items.push(item);
        this.badgeCart.textContent = this.items.length;
    }
    get item(){
        return this.items;
    }
}
