// sample data object from database
let data = [
  {
    sku: "152112",
    "item-name": "Dog Food Fast Growth",
    "item-price": "1700.00",
    "in-stock": true,
    "img-url": "../images/shop/5.jpg",
    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    tags: ["dog food", "nutrition"],
  },
  {
    sku: "155365",
    "item-name": "Cat Food Fast Growth",
    "item-price": "1250.00",
    "in-stock": false,
    "img-url": "../images/shop/6.jpg",
    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    tags: ["cat food", "supplement"],
  },
];

let lastOrders = [
  {
    sku: "795558",
    "item-name": "Dog Food Fast Growth",
    "item-price": "1700.00",
    qty: 2,
    status: "processing",
  },
  {
    sku: "800569",
    "item-name": "Dog Shampoo Mini Pack",
    "item-price": "530.00",
    qty: 3,
    status: "completed",
  },
  {
    sku: "45879",
    "item-name": "Cat Food Pedigree",
    "item-price": "700.00",
    qty: 1,
    status: "processing",
  },
  {
    sku: "955685",
    "item-name": "Pet Anti-flea shampoo",
    "item-price": "2300.00",
    qty: 2,
    status: "completed",
  },
];

// tabs for admin panel
// tabName = the id of the tab button referring to
function openTab(evt, tabName) {
  var i, tabContent, tabButtons;

  tabContent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  tabButtons = document.getElementsByClassName("tab-btn");
  for (i = 0; i < tabButtons.length; i++) {
    tabButtons[i].className = tabButtons[i].className.replace(" active", "");
  }

  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
}

// display item summary
let summaryOrderCount = 5; //get this value from the database

function renderOrderList(a) {
  let orderContainer = document.getElementById("order-container");

  for (i = 0; i < a; i++) {
    let statusClass, status;
    if (lastOrders[i].status == "completed") {
      statusClass = "status-complete";
      status = "Completed";
    } else if (lastOrders[i].status == "processing") {
      statusClass = "status-processing";
      status = "Processing";
    }

    orderContainer.innerHTML +=
      '<div class="order-item">' +
      "\n" +
      '<i class="fa-solid fa-circle-check"></i>' +
      "\n" +
      '<p> <span id="item-qty">' +
      lastOrders[i].qty +
      '</span> x <span id="item-name">' +
      lastOrders[i]["item-name"] +
      "</span> <span>" +
      lastOrders[i]["item-price"] +
      '</span> <span class="' +
      statusClass +
      '" id="status">' +
      status +
      "</span></p>" +
      "\n" +
      "</div>";
  }
}

function setStatus(b) {
  document.getElementById();
  if (data[a].status == "completed") {
    this.classList.add("status-complete");
  } else if (data[a].status == "processing") {
    this.classList.add("status-incomplete");
  }
}

renderOrderList(lastOrders.length);
