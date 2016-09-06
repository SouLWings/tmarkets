<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery-3.1.0.min.js" type="text/javascript"> </script>
<script src="js/bootstrap.min.js" type="text/javascript"> </script>
<script src="https://use.fontawesome.com/85b96044da.js"></script>

<style>



.hovereffect {
  width: 100%;
  /*height: 100%;*/
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #42b078;
}

.hovereffect .overlay {
  width: 100%;
  /*height: 100%;*/
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);

}




</style>
</head>


<body>

    

<div class="container">
<div class="row"> 

  <div class=" col-xs-3 ">
    <div class="hovereffect">
      <img class="img-responsive" src="pm.png" alt="Perfect_Money">
      
       <div class="overlay">
                <h2>Effect 12</h2>
          <p> 
             <a href="#">LINK HERE</a>
          </p> 
            </div>
      </div>

           
  </div>


  <div class="col-xs-3 ">
    <div class="hovereffect">
    <img class="img-responsive" src="Bitcoin.png" alt="Bitcoin">

            <div class="overlay">
                <h2>Effect 12</h2>
          <p> 
             <a href="#">LINK HERE</a>
          </p> 
            </div>
    </div>
  </div>

  <div class="col-xs-3">
    <div class="hovereffect">
    <img class="img-responsive" src="Skrill.png" alt="Skrill">

            <div class="overlay">
                <h2>Effect 12</h2>
          <p> 
             <a href="#">LINK HERE</a>
          </p> 
            </div>
    </div>
  </div>
  
  <div class="col-xs-3">
    <div class="hovereffect">
     <img class="img-responsive" src="Neteller.jpg" alt="Neteller">

            <div class="overlay">
                <h2>Effect 12</h2>
          <p> 
             <a href="#">LINK HERE</a>
          </p> 
            </div>
    </div>
  </div>

</div> <!--row collapse-->

</div> <!--container collapse-->



<!--form-->
<div class="container">

</div>


 </body>
 </html>