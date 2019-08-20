
// displays notes when the input field is on focus
function displayNote(arg1, arg2){
    document.getElementById(arg1).style.background = '#ffffa1'; // highlights the selected input field
    document.getElementById(arg2).style.visibility = 'visible'; // displays the notes
}

// hides the notes when the input field is not on focus
function hideNote(arg1, arg2){
    document.getElementById(arg1).style.background = ''; //removes highlighting
    document.getElementById(arg2).style.visibility = 'hidden'; // hides the notes
}