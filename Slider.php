<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>slider</title>
<style>
.slider{
	margin-top:10px;
	/*width:1100px; 
	height:320px;*/
	overflow:hidden; 
	position:relative;
	}
.slider img{
	position:absolute;
	 animation:slider 16s infinite;
     opacity:0;
	  width: 100%;
	  height:auto;
}
@keyframes slider{25%{opacity:1;} 40%{opacity:0;}}
.slider img:nth-child(4){animation-delay:4s;}
.slider img:nth-child(3){animation-delay:8s;}
.slider img:nth-child(2){animation-delay:12s;}
.slider img:nth-child(1){animation-delay:16s;}
</style>
</head>
<div class="slider">
  <img src="Slider/S1.png" alt="Slide 4" />
  <img src="Slider/S2.png" alt="Slide 3" />

  <img src="Slider/S3.png" alt="Slide 2" />

  <img src="Slider/S4.png"	 alt="Slide 1" />
</div>
