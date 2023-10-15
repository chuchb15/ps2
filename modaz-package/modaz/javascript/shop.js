let product=document.querySelectorAll('.product-item');
let cart__pr=document.querySelector('.product-shop')
console.log(product);
console.log('helllo')
product.forEach((item,index)=>{
    let btn_shop=item.querySelector('.add-to-cart')
    console.log(btn_shop)
    btn_shop.addEventListener('click',(e)=>{
        console.log(e.target)
        cart__pr.innerHTML=`
        <img>
        <div>
        <h3>sdfdsfsd</h3>
        </div>
          
})
