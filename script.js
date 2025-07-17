//Function to validate the form
function validateForm() {
    var fname = document.getElementsByName("fname")[0].value;
    var lname = document.getElementsByName("lname")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var msg = document.getElementsByName("msg")[0].value;

    // Basic validation
    if (fname === "" || lname === "" || email === "" || phone === "") {
        alert("Please fill in all required fields.");
        return false; // Prevent form submission if validation fails
    }
     // If validation passes, allow form submission
     return true;

}

//Alert for update button
function showAlert(){
    alert("Updated successfully !");
}

