class Animation
{

    /**
     * @param {*} folder - dossier contenant les images
     * @param {*} images - liste des imaegs de l'animation
     */
  constructor(folder,images)
  {
      this.folder=folder;
      this.images=images;
  }

  logImages() {
        console.log("Images : "+this.images);
    }
  logFolder() {
        console.log("Folder : "+this.folder);
    }

 
}

