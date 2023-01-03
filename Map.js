function slideshow(){
    
let image = document.getElementById("image");
let images = ['../pictures/image1.jpg','../pictures/image2.jpg','../pictures/image3.jpg','../pictures/image4.jpg','../pictures/image5.jpg','../pictures/image6.jpg','../pictures/image7.jpg','../pictures/image8.jpg','../pictures/image9.jpg','../pictures/image10.jpg','../pictures/image11.jpg']
setInterval(function(){
let random = Math.floor(Math.random() * 11);
image.src = images[random]; 
},800);

}

if  (document.readyState !== "loading") {
    slideshow();
  } else {
    document.addEventListener("DOMContentLoaded", function () {
      slideshow();
    });
}



function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }



function blogs(){
    var blog = document.getElementById("content-blogs");
    var blogs = ['../pictures/blog1.jpg','../pictures/blog2.jpg','../pictures/blog3.jpg','../pictures/blog4.jpg','../pictures/blog5.jpg']
    setInterval(function(){
        let randomblog = Math.floor(Math.random()*5);
        blog.src = blogs[randomblog];
    },800);
}
if  (document.readyState !== "loading") {
    blogs();
  } else {
    document.addEventListener("DOMContentLoaded", function () {
      blogs();
    });
}