//Create the table and image element on loading the window and add event listeners
  //$(document).ready(function() {createContainer(); createTable(); createImage(); addListeners();});

//Function to create table container
  function createContainer() {
    //create table element
      let container = document.createElement("div");
    //set it's id
      container.setAttribute('id','travelimages-container');
    //append it to the container
      document.body.appendChild(container);
  }

//Function to create table
  function createTable() {
    //create array of descriptions
      discriptionArray = new Array();
      discriptionArray[0] ="African Wildlife Safari";
      discriptionArray[1] ="Bali, land of the gods!";
      discriptionArray[2] ="The Incredible Island of Santorini, Greece.";
      discriptionArray[3] ="Bora Bora: Paradise on earth!";
      discriptionArray[4] ="Surfing Vacations!";
    //create table element
      let table = document.createElement("table");
    //set it's id
      table.setAttribute('id','imagedescriptions');
    // add class"table" to the created table
      table.className = "table-borderless";
    //create and append the tablebody
      let tblB = document.createElement("tbody");
      table.appendChild(tblB);  
    //loop through the image array and create rows and cells
      for (let i=0; i<(discriptionArray.length); i++)
      { 
        let tr = document.createElement("tr");
        tblB.appendChild(tr);
        let td = document.createElement("td");
        td.setAttribute("scope", "row");
        tr.appendChild(td);
        division=document.createElement("div");
        td.appendChild(division);
      }

    //appends the table to the container
      travelimagescontainer=document.getElementById("travelimages-container");
      travelimagescontainer.appendChild(table);

    //popoulates the cells with image descriptions  
      for (let i=0; i<(discriptionArray.length); i++)
      { 
        cellList=document.getElementsByTagName("td");
        cellList[(i)].innerHTML = discriptionArray[i];
      }
  };

function createImage() {
  //create an image element
    let image = document.createElement("img");
  //set it's id
    image.setAttribute('id','travelimage');
    image.className = "img-fluid"; 
  //set source to a default image 
    image.src="../images/beach.jpg";
  //appends the image to the container
    travelimagescontainer=document.getElementById("travelimages-container");
    travelimagescontainer.appendChild(image);
};

//Add event listeners
  function addListeners(){
    //create script element
      let script = document.createElement("script");
    //add the mouseover eventlistener
      script.innerHTML= $("#imagedescriptions").on("mouseover", "tr", function(e) {
                                                                                    displayImage(($(e.currentTarget).index()));
                                                                                  });
    //add the mouseclick eventlistener
    $("#travelimage").on("click", function(e) {
                                                //prevent the default behaviour
                                                  e.preventDefault();
                                                //open the associated link in a new window and close it after 3 seconds
                                                  let newWindow = window.open(e.currentTarget.parentElement, "_blank", "width=500,height=500");
                                                  setTimeout(function(){ newWindow.close() }, 3000);
                                              });
  }

//function to display the image on mouse over
  function displayImage(index){
    // create array of images
      imageArray = new Array();
      imageArray[0] = new Image();
      imageArray[0].src = "../images/safari.jpg";
      imageArray[1] = new Image();
      imageArray[1].src = "../images/bali.jpg";
      imageArray[2] = new Image();
      imageArray[2].src = "../images/santorini.jpg";
      imageArray[3] = new Image();
      imageArray[3].src = "../images/borabora.jpg";
      imageArray[4] = new Image();
      imageArray[4].src = "../images/surfing.jpg";
    //create array of websites
      websitesArray = new Array();
      websitesArray[0] ="https://www.discoverafrica.com/";
      websitesArray[1] ="http://www.bali-indonesia.com";
      websitesArray[2] ="https://www.santorini.gr/";
      websitesArray[3] ="https://www.tahiti.com/island/bora-bora";
      websitesArray[4] ="https://surfing-waves.com/";
    //get the row index of the description
      let i=index;
    //create an 'a' tag for link reference
      let link = document.createElement('a');
    // set href attribute to the url corresponding to the index of the row 
      link.href = websitesArray[i];
    //set the source to the image corresponding to the index of the row 
      travelimage.src=imageArray[i].src;
    //wrap the link around the image
      $("#travelimage").wrap(link);
  };