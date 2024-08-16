const header = document.querySelector("header");

window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 0);
});

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};

window.onscroll = () => {
  menu.classList.remove("bx-x");
  navbar.classList.remove("open");
};

// review section

let arrowIcon = document.getElementsByClassName("arrow-icon");
const slide = document.getElementById("slide");

arrowIcon[0].onclick = () => {
  slide.style.transform = "translateX(0)";
};
arrowIcon[1].onclick = () => {
  slide.style.transform = "translateX(-800px)";
};
arrowIcon[2].onclick = () => {
  slide.style.transform = "translateX(-1600px)";
};
arrowIcon[3].onclick = () => {
  slide.style.transform = "translateX(-2400px)";
};

// media queries

function myFunction(x) {
  let arrowIcon = document.getElementsByClassName("arrow-icon");
  const slide = document.getElementById("slide");
  if (x.matches) {
    // If media query matches
    arrowIcon[0].onclick = () => {
        slide.style.transform = "translateX(0)";
      };
      arrowIcon[1].onclick = () => {
        slide.style.transform = "translateX(-380px)";
      };
      arrowIcon[2].onclick = () => {
        slide.style.transform = "translateX(-760px)";
      };
      arrowIcon[3].onclick = () => {
        slide.style.transform = "translateX(-1000px)";
      };
  } 
}

var x = window.matchMedia("(max-width: 576px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes


// animation 
const animation = ScrollReveal({
  distance: '60px',
  duration: 2500,
  delay: 400,
  reset: true
})
animation.reveal('.banner-content, .products, .about, .categories, .review, footer', {delay: 200, origin: 'top'});
animation.reveal('.banner-img, .review-container', {delay: 200, origin: 'right'});
animation.reveal('.best-selling-content', {delay: 200, origin: 'left'});


//sepetim pop-up

document.addEventListener("DOMContentLoaded", function () {
  const cartIcon = document.querySelector(".ri-shopping-cart-2-line");
  const cartPopup = document.querySelector(".cart-popup");

  cartIcon.addEventListener("click", function () {
    cartPopup.classList.toggle("hidden");
  });
});


//bitki ekranında butona tıklanırken sepete ekleme

// JavaScript kodları
document.addEventListener('DOMContentLoaded', function() {
  // Sepete eklenen ürünleri tutacak bir dizi
  let cartItems = [];

  // Sepet butonlarına click event listener ekleme
  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
          const product = this.getAttribute('data-product');
          addToCart(product);
      });
  });

  // Sepete ürün ekleme fonksiyonu
  function addToCart(product) {
      cartItems.push(product);
      renderCart();
  }

  // Sepet içeriğini oluşturma ve görüntüleme fonksiyonu
  function renderCart() {
      const cartList = document.getElementById('cart-items');
      cartList.innerHTML = '';
      cartItems.forEach(item => {
          const li = document.createElement('li');
          li.textContent = item;
          cartList.appendChild(li);
      });
      // Popup'ı gösterme
      document.getElementById('cart-popup').style.display = 'block';
  }

  // Sepet popup'ını kapatma
  document.querySelector('.close-btn').addEventListener('click', function() {
      document.getElementById('cart-popup').style.display = 'none';
  });

  // Ödeme butonuna click event listener ekleme
  document.getElementById('checkout-btn').addEventListener('click', function() {
      // Ödeme işlemleri buraya eklenebilir
      alert('Ödeme yapılıyor...');
      // Sepeti temizleme
      cartItems = [];
      renderCart();
  });
});


//shopping cart kısmı

document.addEventListener('DOMContentLoaded', function() {
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  const addToCartButtons = document.querySelectorAll('.product button');
  addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
          const product = this.closest('.product');
          const productName = product.querySelector('h3').textContent;
          const productPrice = product.querySelector('button').previousElementSibling.textContent;
          const productImage = product.querySelector('img').src;

          const cartItem = {
              name: productName,
              price: productPrice,
              image: productImage
          };

          cartItems.push(cartItem);
          localStorage.setItem('cartItems', JSON.stringify(cartItems));
          alert('Ürün sepete eklendi!');
      });
  });
});
