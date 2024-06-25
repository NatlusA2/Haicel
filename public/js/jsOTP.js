
    const inputs = document.querySelectorAll('.otp-field input');
    
    inputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            if (this.value.length === this.maxLength) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            }
        });

        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value) {
                if (index > 0) {
                    inputs[index - 1].focus();
                }
            }
        });
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const otp = Array.from(inputs).map(input => input.value).join('');
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'Code_Verif';
        hiddenInput.value = otp;
        this.appendChild(hiddenInput);
        this.submit();
    });
