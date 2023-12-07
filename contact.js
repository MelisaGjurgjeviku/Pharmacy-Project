function validation() {
    var Name = document.getElementById('Name').value;
    var Email = document.getElementById('Email').value;
    var Phone = document.getElementById('Phone').value;
    var Subject= document.getElementById('Subject').value;

    if (Name=== '' || Email === '' || Phone === '' || Subject === '') {
        alert('Please fill in all the required fields.');
        return false;
    }
    
    return true;
}