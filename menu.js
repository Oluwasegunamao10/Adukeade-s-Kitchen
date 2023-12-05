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

function updateCart() {
  const cartItemsElement = document.getElementById("cart-items");

  // Clear previous items
  cartItemsElement.innerHTML = "";

  // Display each item in the cart with a delete button
  cart.forEach((item, index) => {
    const listItem = document.createElement("li");
    listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;

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
  document.getElementById("checkOutBtnHolda").innerHTML =
    "<a href='order.php?orderVal=" +
    total +
    "'><button type='button' class='menu-btn1' id=''>Checkout</button></a>";
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
