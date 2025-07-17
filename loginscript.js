        // Select the 'Sign Up' and 'Sign In' buttons from the DOM
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        // Add an event listener to the 'Sign Up' button
        // When clicked, it adds the "right-panel-active" class to the main container, causing the animation
        signUpButton.addEventListener('click',() => {
        main.classList.add("right-panel-active");
        });

        // Add an event listener to the 'Sign In' button
        // When clicked, it removes the "right-panel-active" class from the main container, reversing the animation
        signInButton.addEventListener('click',() => {
        main.classList.remove("right-panel-active");
        });
        // Add an event listener to the form's submit event
        document.querySelector('form').addEventListener('submit', function(event) {
            // Get the values of the password and confirm password fields
                var password = document.querySelector('input[name="paswd"]').value;
                var confirmPassword = document.querySelector('input[name="confirm_password"]').value;
            
                // If passwords do not match, prevent form submission and show an alert
                if (password !== confirmPassword) {
                    event.preventDefault();  // Prevent form submission
                    alert("Passwords do not match. Please try again.");
                }
            });