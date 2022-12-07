window.addEventListener('load', () => {

	const form = document.querySelector('.needs-validation');

	const info = document.querySelector('.info')

	const emailPhoneInput = form.querySelector('.emailPhone')
	const emailInput = form.querySelector('.email')
	const phoneInput = form.querySelector('.phone')

	const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	const phoneFormat = /^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/;



	if (emailPhoneInput) {
		emailPhoneInput.addEventListener('input', (input) => {
			const inputArr = [...input.target.value]
			const indexDog = inputArr.indexOf('@')
			if (indexDog > 0) {
				const domainIncludeDot = inputArr.filter(item)
				console.log(domainIncludeDot)
			}


			if (input.target.value.match(emailFormat) || input.target.value.match(phoneFormat)) {
				emailPhoneInput.setCustomValidity("");
			} else {
				emailPhoneInput.setCustomValidity("invalid");
			}
		})
	}

	if (emailInput) {
		emailInput.addEventListener('input', (input) => {
			if (input.target.value.match(emailFormat)) {
				emailInput.setCustomValidity("");
			} else {
				emailInput.setCustomValidity("invalid");
			}
		})
	}

	if (phoneInput) {
		phoneInput.addEventListener('input', (input) => {
			if (input.target.value.match(phoneFormat)) {
				phoneInput.setCustomValidity("");
			} else {
				phoneInput.setCustomValidity("invalid");
			}
		})
	}

	if (form) {
		form.addEventListener('submit', (event) => {
			if (!form.checkValidity()) {

				event.preventDefault();
				event.stopPropagation();

				form.classList.add('was-validated');
			}
		})
	}

})