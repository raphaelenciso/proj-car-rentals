// Get the modal element and buttons
let modal = document.getElementById("myModal");
let modalContent = document.getElementById("modal-content");
let closeModalBtn = document.getElementById("closeModalBtn");

// Open the modal
// openModalBtn.onclick = function () {
//   modal.style.display = "block";
// };

// Close the modal
closeModalBtn.onclick = function () {
	modal.style.display = "none";
};

// Close the modal if the user clicks outside of it
window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
};

function handleFormSubmit(e) {
	e.preventDefault();
	modal.style.display = "flex";
}

function showModal({
	id,
	brand,
	model,
	year,
	price,
	transmission,
	fuel,
	machine,
	seats,
	body,
}) {
	modal.style.display = "flex";

	let cdn = document.getElementById("car-detail-name");
	let cdb = document.getElementById("car-detail-brand");
	let cdm = document.getElementById("car-detail-model");
	let cdy = document.getElementById("car-detail-year");
	let cdp = document.getElementById("car-detail-price");
	let cdi = document.getElementById("car-detail-img");
	let cdt = document.getElementById("car-detail-transmission");
	let cdf = document.getElementById("car-detail-fuel");
	let cdma = document.getElementById("car-detail-machine");
	let cds = document.getElementById("car-detail-seats");
	let cdo = document.getElementById("car-detail-body");
	let cdbi = document.getElementById("booking-id");

	cdn.textContent = brand + " " + model;
	cdb.textContent = brand;
	cdm.textContent = model;
	cdy.textContent = year;
	cdp.textContent = price;
	cdi.src =
		window.location.origin +
		// "https://carrentals.raphaelenciso.com/assets/images/cars/" +
		"/assets/images/cars/" +
		brand.toLowerCase() +
		"-" +
		model.toLowerCase() +
		".png";
	cdt.textContent = transmission;
	cdf.textContent = fuel;
	cdma.textContent = machine;
	cds.textContent = seats;
	cdo.textContent = body;
	cdbi.href = window.location.origin + "/booking/" + id;
}
