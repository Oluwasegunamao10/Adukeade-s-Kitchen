// script for adding to cart and calculating total items and displaying the total on the order page

const menuBtns = document.querySelectorAll(".menu-btn");
const foodItems = document.querySelectorAll(".food-item");

let activeBtn = "featured";

showFoodMenu(activeBtn);

menuBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    resetActiveBtn();
    showFoodMenu(btn.id);
    btn.classList.add("active-btn");
  });
});

function resetActiveBtn() {
  menuBtns.forEach((btn) => {
    btn.classList.remove("active-btn");
  });
}

function showFoodMenu(newMenuBtn) {
  activeBtn = newMenuBtn;
  foodItems.forEach((item) => {
    if (item.classList.contains(activeBtn)) {
      item.style.display = "grid";
    } else {
      item.style.display = "none";
    }
  });
}

// cart code
const cart = [];
let total = 0;

function addToCart(name, price) {
  const item = { name, price };
  cart.push(item);
  total += price;

  updateCart();
  updateCheckoutButton();
}

function removeFromCart(index) {
  total -= cart[index].price;
  cart.splice(index, 1);

  updateCart();
  updateCheckoutButton();
}

function addToCart(name, price) {
  const item = { name, price };
  cart.push(item);
  total += price;

  updateCart();
  updateCheckoutButton();
}

// Modify the updateCart function to display both name and price
function updateCart() {
  const cartItemsElement = document.getElementById("cart-items");

  // Clear previous items
  cartItemsElement.innerHTML = "";

  // Display each item in the cart with a delete button
  cart.forEach((item, index) => {
    const listItem = document.createElement("li");
    listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`; // Display name and price

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.addEventListener("click", () => {
      removeFromCart(index);
    });

    listItem.appendChild(deleteButton);
    cartItemsElement.appendChild(listItem);
  });

  // Update the total
  document.getElementById("cart-total").textContent = total.toFixed(2);
}


function updateCheckoutButton() {
  const itemNames = cart.map((item) => item.name); // Extract names from items in cart
  const checkoutButton = document.getElementById("checkOutBtnHolda");

  if (checkoutButton) {
    checkoutButton.innerHTML = `<a href='order.php?orderVal=${total}&itemNames=${itemNames.join(
      ","
    )}'>
      <button type='button' class='menu-btn1'>Checkout</button>
       </a>`;
  }
}

// Add event listeners for "Add to Cart" buttons
document
  .querySelectorAll(".food-item button.menu-btn1")
  .forEach((button, index) => {
    button.addEventListener("click", () => {
      const foodName = document.querySelectorAll(".food-item h2.food-name")[
        index
      ].textContent;
      const foodPrice = parseFloat(
        document
          .querySelectorAll(".food-item h3.food-price")
          [index].textContent.slice(1)
      );

      addToCart(foodName, foodPrice);
    });
  });

// script to make the food image display on full screen when clicked on
document.addEventListener("DOMContentLoaded", function () {
  var images = document.querySelectorAll(".food-img img");

  images.forEach(function (image, index) {
    image.addEventListener("click", function () {
      openModal(index);
    });
  });

  function openModal(index) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    modalImg.src = images[index].src;
    modal.style.display = "block";
  }

  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
      closeModal();
    }
  };

  // Close modal when the close button in the modal is clicked
  var closeButton = document.querySelector(".close");
  if (closeButton) {
    closeButton.addEventListener("click", closeModal);
  }
});
