class MesAnimations
  {

    /**
     * initialisation les composants à utiliser pour l'application
     */
    constructor()
    {
        this.vueAnimationGD = new VueAnimationGD();

    }

    /**
     * index, méthode utilisée pour initialiser l'application
     */
    index() 
    {
        this.afficherAnimations();
    }

    /**
     * afficherAnimations, méthode utilisée pour afficher à l'écran les animations
     */
    afficherAnimations()
    {

            
      const imagesTest = ["sprite_ballon1.png","sprite_ballon2.png"];
      const animationTest = new Animation("img/animations/",imagesTest);
      // animation GD
      this.afficherGD(animationTest);

    }

    /**
     * afficherGD, méthode utilisée pour afficher à l'écran l'animation gd'
     * @param {Animation} animation - animation à afficher
     */
    afficherGD(animation) {
        this.vueAnimationGD.afficher(animation);
    }   
  }




function cliqueAnimations()
{
  let c = new MesAnimations();
    c.index();
}
