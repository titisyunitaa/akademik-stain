const dropdowns = document.querySelectorAll(".navbar .dropdown");
dropdowns.forEach((dropdown) => {
	dropdown.addEventListener("mouseover", function () {
		const menu = this.querySelector(".dropdown-menu");
		const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(menu);
		bsDropdown.show();
	});
	dropdown.addEventListener("mouseleave", function () {
		const menu = this.querySelector(".dropdown-menu");
		const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(menu);
		bsDropdown.hide();
	});
});
