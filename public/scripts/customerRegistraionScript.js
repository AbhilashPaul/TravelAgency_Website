// displays notes when the input field is on focus
  function displayNote(arg1, arg2){
    // highlights the selected input field
        document.getElementById(arg1).style.background = '#ffffa1';
    // displays the notes 
        document.getElementById(arg2).style.visibility = 'visible'; 
  }

// hides the notes when the input field is not on focus
  function hideNote(arg1, arg2){
    //removes highlighting
        document.getElementById(arg1).style.background = '';
    // hides the notes 
        document.getElementById(arg2).style.visibility = 'hidden'; 
  }

// Create event handler to validate inputs on onblur events
//add the onblur eventlistener
  $("#registrationform").on("blur", "input", function(e) {
                                                            //validate the inputs
                                                            validateFieldInput(e.currentTarget.id);
                                                          });

//function to validate registration form before submission
  function validateRegistrationForm(){
    let messageList= ["firstname", "lastname", "email", "phonenumber", "postalcode", "address", "city", "province"];
    return validateFieldInput(messageList[0]) && validateFieldInput(messageList[1]) && validateFieldInput(messageList[2]) && validateFieldInput(messageList[3]) && validateFieldInput(messageList[4]);
  }

//function to validate agent addition form before submission
function validateAgentForm(){
  let messageList= ["firstname", "lastname", "email", "phonenumber", "postalcode", "address", "city", "province"];
  return validateFieldInput(messageList[0]) && validateFieldInput(messageList[1]) && validateFieldInput(messageList[2]) && validateFieldInput(messageList[3]) && validateFieldInput(messageList[9] && validateFieldInput(messageList[10]));
}

function validateFieldInput(id){
  let messageList= ["firstname", "lastname", "email", "phonenumber", "postalcode", "address", "city", "province"];
  let fieldId=id;
  let fieldValue = document.getElementById(fieldId).value;
  let validationMessages = document.getElementsByClassName("formvalidationmessage");
  if (fieldId !== "postalcode"){
    if (fieldValue ==""){
      //Show the first name required message
      validationMessages[messageList.indexOf(fieldId)].style.visibility='visible';
      return false;
    } else {
      switch(fieldId){
        case messageList[0]: //firstname
        case messageList[1]: //lastname
          //Hide the message
          validationMessages[messageList.indexOf(fieldId)].style.visibility='hidden';
          return true; 
          break;
        case messageList[2]:
          {
            //regular expresion for email id
            let emailRegex = RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/); 
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
      }
    }
  }
  if (fieldId == "postalcode" && fieldValue !==""){
   console.log(fieldId,fieldValue);
    //regular expresion for canadian postal code
    let postalCodeRegex = RegExp(/^[A-Z]\d[A-Z] ?\d[A-Z]\d$/);
    if(!postalCodeRegex.test(fieldValue)){
      //Show the message
      validationMessages[messageList.indexOf(fieldId)].style.visibility='visible'; 
      return false;
    } else {
      //Hide the message
      validationMessages[messageList.indexOf(fieldId)].style.visibility= 'hidden'; 
      return true; 
    }  
  }  
}