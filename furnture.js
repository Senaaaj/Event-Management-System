function validData(event) {
   
    event.preventDefault();
    var email = document.getElementById("mail").value.trim();
    var location = document.getElementById("place").value.trim(); 

    
    if (email.indexOf("@") === -1) {
        alert("Please enter a valid email address.");
        return; 
    }

    if (location.length < 3) {
        alert("Location must be at least 3 characters long.");
        return; 
    }

    document.querySelector("form").submit();
}

function gopage(link){
	console.log(link.value);
	
	location.href=link.value;
}