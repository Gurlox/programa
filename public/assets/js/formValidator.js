(function() {
    class FormValidator {
        constructor() {
            if (FormValidator.instance) {
                return FormValidator.instance = this;
            }
            this.errors = [];
            FormValidator.instance = this;
        }

        validate(form) {
            this.errors = [];
            let fillAllFieldsError = false;
            for (let element of form.elements) {
                if (element.type === 'submit') {
                    continue;
                }
                if (
                    ((element.type === 'checkbox' && !element.checked) || element.value === '')
                    && !fillAllFieldsError
                ) {
                    this.errors.push('Wypełnij wszystkie pola');
                    fillAllFieldsError = true;
                }
                if (element.id === 'age' && !(element.value >= 18 && element.value <= 99)) {
                    this.errors.push('Wiek musi być w zakresie 18 do 99 lat');
                }
            }
            this.renderErrors();

            if (this.errors.length === 0) {
                alert('Poprawny formularz');
            }
        }

        renderErrors() {
            let formErrors = document.getElementById("formErrors");
            formErrors.innerHTML = '';

            for (let error of this.errors) {
                let element = document.createElement('li');
                element.innerHTML = error;
                formErrors.appendChild(element);
            }
        }
    }

    let formValidator = new FormValidator();
    document.getElementById("form").addEventListener("submit", function(event) {
        event.preventDefault();
        formValidator.validate(this);
    }, false);
})();
