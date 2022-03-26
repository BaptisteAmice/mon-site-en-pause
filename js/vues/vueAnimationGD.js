class VueAnimationGD {

  constructor() {
  }


  /**
   * afficher, méthode utilisée pour générer l'affichage d'une animation allant de gauche à droite
   * @param {Animation} animation - animations à afficher
   */
  afficher(animation)
  {

    let divElement=document.getElementById("animationBallon");
    let figureElement = document.createElement("figure");
    
    divElement.appendChild(figureElement);

    figureElement.style.position = "relative";
    figureElement.style.top=divElement.style.top;
    console.log( figureElement.style.top);
  figureElement.style.left = -500+'px';

    var x = -500;                  //  set your counter to 1
    var imgId=0;

    function myLoop() {         //  create a loop function
        setTimeout(function() { //  call a 1s setTimeout when the loop is called
        figureElement.style.left = x+'px';
          
        figureElement.innerHTML="<img src='"+animation.folder+animation.images[imgId]+"'alt='animation ballon' height='64' width='64' >";
        if (imgId==0)
        {
          imgId=1;
        }
        else
        {
          imgId=0;
        }        
        x=x+1;           
        if (x < window.screen.width) {      //  if the counter < 10, call the loop function
        myLoop();                           //  ..  again which will trigger another 
        }                                 //  ..  setTimeout()
      }, 5)
    }
    myLoop();                   //  start the loop


  

    

    
  }


}