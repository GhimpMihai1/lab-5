function toggle() {
    // get the id
    var myContent = document.getElementById('main');

    // get the current value of the content display property
    var displaySetting = myContent.style.display;

    // also get the content button, so we can change what it says
    var sideButton = document.getElementById('sideButton');

    // now toggle the content and the button text, depending on current state
    if (displaySetting == 'block') {
      // ccontnet is not visible. hide it
      myContent.style.display = 'none';
      // change button text
      sideButton.innerHTML = 'Arata povestea';
    }
    else {
      // conent is vissble. hide it
      myContent.style.display = 'block';
      // change button text
      sideButton.innerHTML = 'Ascudnde povestea';
    }
  }
  function display(element){
    document.getElementById('image').innerHTML = element.alt;
  }
  function revert(){
    document.getElementById('image').innerHTML = "Personajul principal al povestii.";
  }
 const navToggle=document.querySelector(".nav-toggle");
 const links=document.querySelector(".links");

 navToggle.addEventListener('click', function()){
   if(links.classList.contains('show-links')){
     links.classList.remove('show-links')
   }
   else{
     links.classList.add('show-links');
   }
 });