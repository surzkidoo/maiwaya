const  menuToggler = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu-container');
const cancelMenu = document.querySelector('.menu-cancel')
const productContainers = document.querySelectorAll('.product-container');
const testContainer = document.querySelector('.test-img');
const text = document.querySelector('.test-content');


const data = [
    {
        img:'asset/pretty-curly-woman-holds-modern-mobile-phone-types-messages-smartphone-device-enjoys-online-communication-downloads-special-app-chatting-smiles-tenderly-isolated-purple-wall.jpg',
        test:'We move'
    },
    {
        img:'url',
        test:'test2'
    },
]

let init =0;

setInterval(()=>{
        if(init>data.length-1){
            init=0;
        }
        const element = data[init];
        testContainer.src = data[init].img;
        text.textContent = data[init].test; 
        init++;
    
},2000)



console.log(menuToggler)
menuToggler.addEventListener('click',(e)=>{
    menu.style.display = 'flex';
    menu.style.left= 0;

    cancelMenu.addEventListener('click',(e)=>{
        menu.style.left = '-100%'
    })
    
    menu.addEventListener('click',()=>{
        menu.style.left = '-100%'

    })
    
})

productContainers.forEach(productContainer => {
    let listContainer = productContainer.querySelector('.product-list-container');
    let nextBtn = productContainer.querySelector('.more-btn')
    let init =0;
    nextBtn.addEventListener('click',()=>{
        if(init===listContainer.scrollLeft && listContainer.scrollLeft!=0){
            listContainer.scrollLeft =0;
            return
        }
        listContainer.scrollLeft += 200;
        init=listContainer.scrollLeft;
    })

});



// let testContainer = document.querySelectorAll('.test-container');

// testContainer.forEach((test)=>{
//     setTimeout((e)=>{

//     })    
// })