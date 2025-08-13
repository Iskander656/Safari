// const page = document.getElementById('page');
// const title = document.getElementById('title');
// const btn = document.getElementById('toggleTheme');

// btn.addEventListener('click', function(){
//   page.classList.toggle('bg-light');
//   page.classList.toggle('bg-dark');

//   page.classList.toggle('text-dark');
//   page.classList.toggle('text-light');

//   title.textContent =
//   page.classList.contains('bg-dark') ? "Dark theme on" : "Light theme on"

//   btn.classList.toggle('btn-outline-dark');
//   btn.classList.toggle('btn-outline-light');
// });

// const btn = document.getElementById("toggleBtn");
// const card = document.getElementById("card");

// btn.addEventListener("click", function () {
//   card.classList.toggle("d-none");

//   if (card.classList.contains("d-none")) {
//     btn.textContent = "Show Card";
//   } else {
//     btn.textContent = "Hide Card";
//   }
// });

// const quotes = [
// "🚀 Сделай сегодня то, что другие не хотят — и завтра будешь жить так, как другие не могут.",
// "🔥 Успех — это привычка делать то, чего не хочется.",
// "🎯 Большая цель разбивается на маленькие победы.",
// "💡 Программирование — это искусство думать точно.",
// "🧠 Учиться — значит побеждать себя снова и снова.",
// "💪 Трудные вещи делают сильными. Слабые сдаются.",
// "🌍 Мир принадлежит тем, кто не боится начать сначала.",
// ];

// const btn = document.getElementById('getQuote');
// const quote = document.getElementById('quote');

// btn.addEventListener('click', function() {
//   const randomIndex = Math.floor(Math.random() * quotes.length);
//   quote.textContent = quotes[randomIndex];
// });

// const message = "Hello, World!"
// const typeDiv = document.getElementById('typed');

// let index = 0;

// function typeNextLetter() {
//   if (index < message.length) {
//     typeDiv.textContent += message[index];
//     index++;
//   } else {
//     clearInterval(typingInterval);
//   }
// }

// const typingInterval = setInterval(typeNextLetter, 100);

// const openBtn = document.getElementById('openModal');
// const closeBtn = document.getElementById('closeModal');
// const overlay = document.getElementById('overlay');

// openBtn.addEventListener('click', function() {
//   overlay.classList.add('active');
// });

// closeBtn.addEventListener('click', function() {
//   overlay.classList.remove('active');
// });

// overlay.addEventListener('click', function(e) {
//   if(e.target === overlay){
//     overlay.classList.remove('active');
//   }
// });

// const toggleBtn = document.getElementById("toggleTheme");
// const body = document.body;

// const savedTheme = localStorage.getItem("theme");
// if (savedTheme) {
//   body.classList.remove("light", "dark");
//   body.classList.add(savedTheme);

//   // Bootstrap background and text colors
//   if (savedTheme === "light") {
//     body.classList.remove("bg-dark", "text-light");
//     body.classList.add("bg-light", "text-dark");
//   } else {
//     body.classList.remove("bg-light", "text-dark");
//     body.classList.add("bg-dark", "text-light");
//   }
// }

// toggleBtn.addEventListener("click", function () {
//   body.classList.toggle("dark");
//   body.classList.toggle("light");

//   const currentTheme = body.classList.contains("dark") ? "dark" : "light";
//   localStorage.setItem("theme", currentTheme);

//   // Bootstrap background and text colors
//   if (currentTheme === "light") {
//     body.classList.remove("bg-dark", "text-light");
//     body.classList.add("bg-light", "text-dark");
//   } else {
//     body.classList.remove("bg-light", "text-dark");
//     body.classList.add("bg-dark", "text-light");
//   }
// });

// const productsContainer = document.getElementById("productContainer");
// const addBtn = document.getElementById("addProducts");

// const products = [
//   {
//     name: "iPhone 15 Pro",
//     price: "$999",
//     img: "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch-blue-titanium_AV1_GEO_TR?wid=512&hei=512&fmt=jpeg&qlt=90&.v=1693706367565",
//   },
//   {
//     name: "AirPods Max",
//     price: "$549",
//     img: "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/airpods-max-select-silver-202011?wid=512&hei=512&fmt=jpeg&qlt=90&.v=1604022365000",
//   },
//   {
//     name: "MacBook Pro",
//     price: "$1999",
//     img: "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp16-spacegray-select-202110_GEO_TR?wid=512&hei=512&fmt=jpeg&qlt=90&.v=1633657386000",
//   },
// ];
// let index = 0;

// addBtn.addEventListener("click", function () {
//   if (index >= products.length) {
//     alert("All Products were added");
//     return;
//   }

//   const product = products[index];
//   const col = document.createElement("div");
//   col.className = "col-md-4";

//   col.innerHTML = `
//     <div class="card h-100 shadow-lg">
//       <img src="${product.img}" class="card-img-top" alt="${product.name}">
//       <div class="card-body">
//         <h5 class="card-title">${product.name}</h5>
//         <p class="card-text fw-bold text-success">${product.price}</p>
//         <button class="btn btn-outline-danger remove-btn">Delete</button>
//       </div>
//     </div>
//   `;

//   productsContainer.appendChild(col);
//   index++;

//   col.querySelector(".remove-btn").addEventListener("click", function () {
//     col.remove();
//   });
// });

// const taskInput = document.getElementById("taskInput");
// const addTaskBtn = document.getElementById("addTask");
// const taskList = document.getElementById("taskList");

// let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

// function renderTasks() {
//   taskList.innerHTML = "";
//   tasks.forEach((task, index) => {
//     const li = document.createElement("li");
//     li.className =
//       "list-group-item d-flex justify-content-between align-items-center";
//     if (task.done) li.classList.add("done");

//     li.innerHTML = `
//           <span class="task-text">${task.text}</span>
//       <div>
//         <button class="btn btn-sm btn-success me-2 complete-btn">✓</button>
//         <button class="btn btn-sm btn-danger delete-btn">✕</button>
//       </div>
//     `;

//     li.querySelector('.complete-btn').addEventListener('click', function(){
//       tasks[index].done = !tasks[index].done;
//       saveTasks();
//       renderTasks();
//     })

//     li.querySelector('.delete-btn').addEventListener('click', function(){
//       tasks.splice(index, 1);
//       saveTasks();
//       renderTasks();
//     });

//     taskList.appendChild(li);
//   });
// }

// function saveTasks() {
//   localStorage.setItem('tasks', JSON.stringify(tasks));
// }

// addTaskBtn.addEventListener('click', function() {
//   const text = taskInput.value.trim();
//   if (text) {
//     tasks.push({ text, done: false});
//     taskInput.value = '';
//     saveTasks();
//     renderTasks();
//   }
// });

// taskInput.addEventListener('keydown', function(e) {
//   if (e.key === 'Enter') addTaskBtn.click();
// });

// renderTasks();

const taskInput = document.getElementById("taskInput");
const addTaskBtn = document.getElementById("addTask");
const taskList = document.getElementById("taskList");
const addProductBtn = document.getElementById("addProduct");
const productContainer = document.getElementById("productContainer");
const toggleThemeBtn = document.getElementById("toggleTheme");
const typedText = document.getElementById("typed");

// Local Storage
let tasks = JSON.parse(localStorage.getItem("tasks")) || [];
let products = JSON.parse(localStorage.getItem("products")) || [];
let theme = localStorage.getItem("theme") || "dark";

// Typing Effect
const message = "Hello, World!";
let charIndex = 0;
typedText.textContent = "";

let typingInterval;

function PrintNextLetter() {
  if (charIndex < message.length) {
    typedText.textContent += message[charIndex];
    charIndex++;
  } else {
    clearInterval(typingInterval);
  }
}

typingInterval = setInterval(PrintNextLetter, 120);

// ToDo List
function saveTasks() {
  localStorage.setItem("tasks", JSON.stringify(tasks));
}

function renderTasks() {
  taskList.innerHTML = "";
  tasks.forEach((task, index) => {
    const li = document.createElement("li");
    li.className =
      "list-group-item d-flex justify-content-between align-items-center";
    if (task.done) li.classList.add("text-decoration-line-through");

    li.innerHTML = `
      <span>${task.text}</span>
      <div>
        <button class="btn btn-sm btn-success me-2 complete-btn">✓</button>
        <button class="btn btn-sm btn-danger delete-btn">✕</button>
      </div>
    `;

    li.querySelector(".complete-btn").addEventListener("click", function () {
      tasks[index].done = !tasks[index].done;
      saveTasks();
      renderTasks();
    });

    li.querySelector(".delete-btn").addEventListener("click", function () {
      tasks.splice(index, 1);
      saveTasks();
      renderTasks();
    });

    taskList.appendChild(li);
  });
}

addTaskBtn.addEventListener("click", function () {
  const text = taskInput.value.trim();
  if (text) {
    tasks.push({ text, done: false });
    taskInput.value = "";
    saveTasks();
    renderTasks();
  }
});

taskInput.addEventListener("keydown", function (e) {
  if (e.key === "Enter") addTaskBtn.click();
});

// Products
function saveProducts() {
  localStorage.setItem("products", JSON.stringify(products));
}

function renderProducts() {
  productContainer.innerHTML = "";
  products.forEach((product, index) => {
    const col = document.createElement("div");
    col.className = "col-md-4 mb-4";
    col.innerHTML = `
      <div class="card h-100 shadow">
        <img src="${product.img}" class="card-img-top" alt="${product.name}">
        <div class="card-body">
          <h5 class="card-title">${product.name}</h5>
          <p class="card-text fw-bold text-success">${product.price}</p>
          <button class="btn btn-outline-danger remove-product">Delete</button>
        </div>
      </div>
    `;

    col.querySelector(".remove-product").addEventListener("click", function () {
      products.splice(index, 1);
      saveProducts();
      renderProducts();
    });

    productContainer.appendChild(col);
  });
}

addProductBtn.addEventListener("click", function () {
  const newProduct = {
    name: "iPhone 15 Pro",
    price: "$999",
    img: "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch-blue-titanium_AV1_GEO_TR?wid=512&hei=512&fmt=jpeg&qlt=90&.v=1693706367565",
  };
  products.push(newProduct);
  saveProducts();
  renderProducts();
});

// Theme Switcher
function applyTheme(theme) {
  document.body.classList.remove("light", "dark");
  document.body.classList.add(theme);
}

toggleThemeBtn.addEventListener("click", function () {
  theme = theme === "dark" ? "light" : "dark";
  applyTheme(theme);
  localStorage.setItem("theme", theme);
});

// Init
applyTheme(theme);
renderTasks();
renderProducts();

let btn = document.getElementById("CountDown");

btn.addEventListener("click", function () {
  btn.textContent--;
  if (btn.textContent <= 15) {
    btn.classList.remove("btn-success");
    btn.classList.add("btn-primary");
  }
  if (btn.textContent <= 10) {
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-warning");
  }
  if (btn.textContent <= 5) {
    btn.classList.remove("btn-warning");
    btn.classList.add("btn-danger");
  }
  if (btn.textContent <= 3) {
    btn.classList.remove("btn-danger");
    btn.classList.add("btn-danger");
  }
  if (btn.textContent <= 0) {
    btn.remove();
  }
});


let Btn = document.getElementById('CountDown');
Btn.addEventListener('click', function(){
  textContent--;
  if (Btn.textContent <= 15) {
    Btn.classList.remove('btn-primary');
    Btn.classList.add('btn-dark');
  }
  if (Btn.textContent <= 10) {
    Btn.classList.remove('btn-dark');
    Btn.classList.add('btn-warning');
  }
  if (Btn.textContent <= 5) {
    Btn.classList.remove('btn-warning');
    Btn.classList.add('btn-danger');
  }
});

