
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

// confirm before resetting the form
function confirmReset(){
  return confirm("Would you like to reset the registration form?");
}

// Create event handler to validate inputs on onblur events
//add the onblur eventlistener
$("#addagentform").on("blur", "input", function(e) {
  //validate the inputs
  validateFieldInput(e.currentTarget.id);
});

$("#addagentform").on("blur", "select", function(e) {
  //validate the inputs
  validateFieldInput(e.currentTarget.id);
});

//function to validate agent addition form before submission
function validateAgentForm(){
  let messageList= ["firstname", "lastname", "email", "phonenumber", "position", "agencyid", "username", "password"];
  return validateFieldInput(messageList[0]) && validateFieldInput(messageList[1]) && validateFieldInput(messageList[2]) && validateFieldInput(messageList[3]) && validateFieldInput(messageList[4] && validateFieldInput(messageList[5]));
}

function validateFieldInput(id){
  let messageList= ["firstname", "lastname", "email", "phonenumber", "position", "agencyid", "username", "password"];
  let fieldId=id;
  let fieldValue = document.getElementById(fieldId).value;
  let validationMessages = document.getElementsByClassName("formvalidationmessage");
 
  if (fieldValue ==""){
    //Show the first name required message
    validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
    return false;
  } else {
    switch(fieldId){
      case messageList[0]: //firstname
      {
        //regular expresion for email id
        let nameRegex = RegExp(/^[a-zA-Z]+$/); 
        if(!nameRegex.test(fieldValue)){
          //Change message to invalid email message if the email id entered does not match the regular expression                            
          validationMessages[messageList.indexOf(fieldId)].childNodes[1].innerHTML="Please enter a valid Email ID!";
          //Show the message
          validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
          return false;
        } else{
          //Hide message if the email id entered matches the regular expression   
          validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
          return true;
        }
        break;
      }
      case messageList[1]: //lastname
      case messageList[4]: //agent position
      case messageList[5]: //agency id
      case messageList[7]: //password
        //Hide the message
        validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
        return true; 
        break;
      case messageList[2]:
        {
          //regular expresion for email id
          let emailRegex = RegExp(/^[a-zA-Z]+$/); 
          if(!emailRegex.test(fieldValue)){
            //Change message to invalid email message if the email id entered does not match the regular expression                            
            validationMessages[messageList.indexOf(fieldId)].childNodes[1].innerHTML="Please enter a valid Email ID!";
            //Show the message
            validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
            return false;
          } else{
            //Hide message if the email id entered matches the regular expression   
            validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
            return true;
          }
          break;
        }
      case messageList[3]:
      { 
        //regular expresion for phone number (eg:4034025684)
        let phoneNumberRegex = RegExp(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
        if(!phoneNumberRegex.test(fieldValue)){
          //Change message to invalid email message if the email id entered does not match the regular expression                            
          validationMessages[messageList.indexOf(fieldId)].childNodes[1].innerHTML="Please enter a valid Phone Number!";
          //Show the message
          validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
          return false; 
        } else{
          //Hide message if the email id entered matches the regular expression   
          validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
          return true; 
        }
        break;
      }
      case messageList[6]:
      {
        //regular expresion for phone number (eg:4034025684)
        let usernameRegex = RegExp(^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$);
        if(!usernameRegex.test(fieldValue)){
          //Change message to invalid email message if the email id entered does not match the regular expression                            
          validationMessages[messageList.indexOf(fieldId)].childNodes[1].innerHTML="Please enter a valid username!";
          //Show the message
          validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
          return false; 
        } else{
          //Hide message if the email id entered matches the regular expression   
          validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
          return true; 
        }
        break;
      }
    }
  }
} 
