window.onscroll = () => 
{
  const nav = document.querySelector('#navbar');
  if(this.scrollY <= 8) nav.className = 'nav-bar';
    else nav.className = 'nav-bar--scrolled';
};


function myFunction() {
    var x = document.getElementById("mylinks");
    if (x.style.display === "block") 
    {
      x.style.display = "none";
    } 
    else 
    {
      x.style.display = "block";
    }
  }

  function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }


const CartIn = () => {

const x = document.querySelector('.product-item');
const y = document.querySelector('.product-cart');

  x.addEventListener('mouseover', () => {
  y.classList.toggle('product-cart-active');
});

}

CartIn();

// const CartOut = () => {

//   const x = document.querySelector('.product-item');
//   const y = document.querySelector('.product-cart-active');
  
//     x.addEventListener('mouseout', () => {
//     y.classList.toggle('product-cart');
//   });
  
//   }
  
//   CartOut();

var header = document.getElementById("category");
var cats = header.getElementsByClassName("btn");
for (var i = 0; i < cats.length; i++) {
  cats[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

