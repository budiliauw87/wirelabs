// Import our custom CSS
import '../scss/styles.scss'
//import bootstrap-icons
import 'bootstrap-icons/font/bootstrap-icons.css'

import cartJS from '../js/cart'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'


const cart = new cartJS();

const btnCart = document.getElementsByClassName('btn-add-cart');
for( let index = 0; index < btnCart.length; index++ ){
    btnCart[index].addEventListener('click',(event)=>{
      cart.insertCart('tester');
      event.preventDefault();
    });
  }  