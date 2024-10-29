function showContent(element, action){
    document.getElementById(element).style.visibility = "visible"
    document.getElementById('actionInput').value = action === 'edit' ? 'edit' : 'add';
}