<?php
include("all/nav.html");
?>
!
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head>

<style>
    

    .carousel {
        background: white;
       
        
    }

    .carousel-cell {
        width: 28%;
        height: 200px;
        margin-right: 10px;
        background: #8C8;
        border-radius: 5px;
        counter-increment: carousel-cell;
       
    }

    .carousel-cell.is-selected {
        background: black;
        
    }

    /* cell number */
    .carousel-cell:before {
        display: block;
        text-align: center;
        content: counter(carousel-cell);
        line-height: 200px;
        font-size: 80px;
        color: white;
           }
           
.carousel img{
    height: 400px;
    width: 660px;
    border-style: dashed;
    background-color: green;
    
}               

</style>


<body>
<script>

$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});
</script>

    <div class="fal">
        <div class="carousel" data-flickity='{ "groupCells": true }'>
           <img src="cards\www.vivektutorials.com (1).png" alt="">
           <img src="cards\www.vivektutorials.com (2).png" alt="">
           <img src="cards\www.vivektutorials.com (3).png" alt="">
           <img src="cards\www.vivektutorials.com (4).png" alt="">
           <img src="cards\www.vivektutorials.com(5).png" alt="">
           <img src="cards\www.vivektutorials.com.jpg" alt="load">
           
    
            
        </div>


    </div>
  
</body>

</html>

<?php
include("all/footer.html");
?>
