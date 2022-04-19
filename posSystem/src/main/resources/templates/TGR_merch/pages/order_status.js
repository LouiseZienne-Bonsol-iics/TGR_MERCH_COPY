var iptSearch = document.getElementById('tracking-search')

// Grab Submit button from DOM
var btnGetWeather = document.getElementById('tracking-button');

// Add Event Listener
btnGetWeather.addEventListener('click', function() {
    const name= "",contactNo= "",email= "",delivery= "",orderNo= "",orderDate= "",paymentstat= "",waybill= "",deliverystatus = "";
  if (iptSearch.value === "52BIRX") 
  {
    name = document.getElementById("customer-name");
    name.innerHTML = "John Johnson";
    contactNo = document.getElementById("contact-number");
    contactNo.innerHTML = "091234567890";
    email = document.getElementById("email-address");
    email.innerHTML = "john.johnson4536@yahoo.com";
    delivery = document.getElementById("delivery-option");
    delivery.innerHTML = "JTS";
    orderNo = document.getElementById("order-number");
    orderNo.innerHTML("52BIRX");
    orderDate = document.getElementById("order-date");
    orderDate.innerHTML("04/12/2022");
    paymentstat = document.getElementById("payment");
    paymentstat.innerHTML("Completed");
    waybill = document.getElementById("waybill-no");
    waybill.innerHTML("210-984395");
    deliverystatus = document.getElementById("delivery-status");
    deliverystatus.innerHTML("Delivering");
  }
  if (iptSearch.value === "YCHYCQ")
  {
    name = document.getElementById("customer-name");
    name.innerHTML = "Steve Stevenson";
    contactNo = document.getElementById("contact-number");
    contactNo.innerHTML = "09198765432";
    email = document.getElementById("email-address");
    email.innerHTML = "steve.stevenson1985@yahoo.com";
    delivery = document.getElementById("delivery-option");
    delivery.innerHTML = "Lazada";
    orderNo = document.getElementById("order-number");
    orderNo.innerHTML("YCHYCQ");
    orderDate = document.getElementById("order-date");
    orderDate.innerHTML("04/15/2022");
    paymentstat = document.getElementById("payment");
    paymentstat.innerHTML("Completed");
    waybill = document.getElementById("waybill-no");
    waybill.innerHTML("219-150647");
    deliverystatus = document.getElementById("delivery-status");
    deliverystatus.innerHTML("Received");
  }
  else {
    console.log("City name isn't valid. Try again");
  }
});