let app = {

    slidertime: null,
    index: 0,

    init: function() {

        newImgElement = document.createElement("img");

        app.slidertime = setInterval(app.displayNextImg,2000)

    },

    array: [
        "../public/assets/html.png",
        "../public/assets/css.png",
        "../public/assets/php.png",
        "../public/assets/symfony.png",
        "../public/assets/js.svg",
        "../public/assets/wordpress.png",
        "../public/assets/git.png",
        "../public/assets/aws.png",
        "../public/assets/API.png",
        "../public/assets/bootstrap.png",
    
    ],
        


    slider: document.querySelector(".img-slider"),
        
        
        
    displayElement: function(){

        
        
        
        const element = app.array[app.index];
        
        // app.newImgElement = document.createElement("img")
    
        newImgElement.src= element
    
        app.slider.appendChild(newImgElement)




    },    

    displayNextImg: function() {

        app.displayElement(app.array[app.index]);

        app.index += 1;

        if(app.index === app.array.length) {
            app.index= 0
            
        }



    }
    



}

app.init()
   
