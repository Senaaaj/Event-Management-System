//Changes the submit button to edit button

   /* document.getElementById("submit").addEventListener("click",function(){
        document.getElementById("submit").innerHTML = "Edit";
    })*/

        document.getElementById("submit").addEventListener("click", function() {
            let form = document.getElementById("listForm");
            let allFilled = true;

            for (let i = 0; i < form.elements.length; i++) {
                if (form.elements[i].hasAttribute("required") && !form.elements[i].value) {
                    allFilled = false;
                    break;
                }
            }

            if (allFilled) {
                document.getElementById("submit").innerHTML = "Edit";
            } else {
                alert("Please fill all required fields.");
            }
        });
        
   