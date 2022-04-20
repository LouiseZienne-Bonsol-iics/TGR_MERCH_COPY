var iptSearch = document.getElementById('tracking-search')

// Grab Submit button from DOM
var btnGetWeather = document.getElementById('tracking-button');

// Add Event Listener
btnGetWeather.addEventListener('click', function() {
    //const name= "",contactNo= "",email= "",delivery= "",orderNo= "",orderDate= "",paymentstat= "",waybill= "",deliverystatus = "";
  if (iptSearch.value === "52BIRX") 
  {
    document.getElementById("customer-name").textContent = "John Johnson";
    document.getElementById("contact-number").textContent= "091234567890";
    document.getElementById("email-address").textContent="john.johnson4536@yahoo.com";
    document.getElementById("delivery-option").textContent = "JTS";
    document.getElementById("order-number").textContent="52BIRX";
    document.getElementById("order-date").textContent="04/12/2022";
    document.getElementById("payment").textContent="Completed";
    document.getElementById("waybill-no").textContent="210-984395";
    document.getElementById("delivery-status").textContent="Delivering";
  }
  if (iptSearch.value === "YCHYCQ")
  {
    document.getElementById("customer-name").textContent= "Steve Stevenson";
    document.getElementById("contact-number").textContent = "09198765432";
    document.getElementById("email-address").textContent = "steve.stevenson1985@yahoo.com";
    document.getElementById("delivery-option").textContent = "Lazada";
    document.getElementById("order-number").textContent="YCHYCQ";
    document.getElementById("order-date").textContent="04/15/2022";
    document.getElementById("payment").textContent="Completed";
    document.getElementById("waybill-no").textContent="219-150647";
    document.getElementById("delivery-status").textContent="Received";
  }
  else {
    console.log("City name isn't valid. Try again");
  }
});