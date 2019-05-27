function dropdown() {
  var getElement = document.getElementById('dropdown');
  if(getElement.style.visibility == "hidden") {
      getElement.style.visibility = "visible";
      getElement.style.height = "auto";
  }
  else {
      getElement.style.visibility = "hidden";
      getElement.style.height = "0";
  }
}


function openmodal() {
   var modal = document.getElementById("myModal");
   var btn = document.getElementById("myBtn");

   if (modal.style.display = "none") {
      modal.style.display = "block";
   }
}

function closemodal() {
   var modal = document.getElementById("myModal");
   var span = document.getElementsByClassName("close")[0];

   if (modal.style.display = "block") {
      modal.style.display = "none";
   }
}

function addStyle(id) {
   var getId = "snippet-"+id;

   if (getId.style.display == "block") {
      getId.style.display = "none";
      alert(getId);
   }
}
