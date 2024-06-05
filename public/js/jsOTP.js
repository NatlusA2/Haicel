document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll('.otp-field .input');

    inputs.forEach((input, index) => {
        input.addEventListener('keydown', (e) => {
            if (e.key === "Backspace") {
                input.value = '';
                if (index !== 0) inputs[index - 1].focus();
            } else if (e.key.match(/[0-9]/)) {
                input.value = '';
                setTimeout(() => {
                    if (index !== inputs.length - 1) inputs[index + 1].focus();
                }, 10);
            }
        });

        input.addEventListener('input', () => {
            if (input.value.length === 1 && index !== inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });
    });
});

function submitOTP() {
    let otp = '';
    const inputs = document.querySelectorAll('.otp-field .input');

    inputs.forEach(input => {
        otp += input.value;
    });

    // Here, you can send the OTP to your server for verification
    console.log("Entered OTP is: " + otp);

    // If OTP is correct, you can redirect to the next page
    // window.location.href = "/packet";
}
