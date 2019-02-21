function dropdown() {
  var getElement = document.getElementsByClassName('dropdown');
  if(getElement.style.visibility == "hidden") {
      getElement.style.visibility = "visible";
      getElement.style.height = "auto";
  }
  else {
      getElement.style.visibility = "hidden";
      getElement.style.height = "0";
  }
}
function getDatabase($name) {}
