function validateForm() {
    let firstname = document.getElementById('firstname').value;
    let lastname = document.getElementById('lastname').value;
    let age = document.getElementById('age').value;
    let address = document.getElementById('address').value;

    if (firstname === "" || lastname === "" || age === "" || address === "") {
        alert("All fields must be filled out");
        return false;
    }

    if (isNaN(age) || age <= 0) {
        alert("Please enter a valid age");
        return false;
    }

    return true;
}
