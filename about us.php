<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #0F3;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #00F;
  color: #FFF;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>
</head>
<body class="body">
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php
include('header.php')
?>
</div></div>
<div class="row">
<div class="col-sm-12">
<h2>About_Us</h2>
<p>Quiz World is the leading Quiz game for more than a decade. Each quiz is unique and comprises of a different set of Objective-Type Multiple-Choice General Knowledge questions on Current Affairs, Indian History, Freedom Struggle, Indian Geography, Indian Mythology, Art & Culture, Bollywood and Films, Sports, Politics, Science & Technology and much more.</p>
</div></div>
<div class="row">
<div class="col-sm-12">
<button class="collapsible">Our Vision</button>
<div class="content">
  <p>Quiz World is the leading Quiz game for more than a decade. Each quiz is unique and comprises of a different set of Objective-Type Multiple-Choice General Knowledge questions on Current Affairs, Indian History, Freedom Struggle, Indian Geography, Indian Mythology, Art & Culture, Bollywood and Films, Sports, Politics, Science & Technology and much more.</p>

  <p>Apart from the popular India Quizzes, Indian Mythology Quiz, Indian Film Quiz, Indian History Quiz, and the Indian Cricket Quiz, quiz enthusiasts can also try several specialized quizzes such as Gandhi Quiz, Yoga Quiz, Champaran Satyagraha Quiz, State Quizzes, and the Know India Photo Quiz.</p>

  <p>All quizzes are timed and ranked and the quiz takers would get instant results. Top rankers in each quiz category would be listed on the website.</p>
</div>
<button class="collapsible">Our Mission</button>
<div class="content">
  <p>Our mission is to provide Fun and Knowledge through Quiz.</p>
</div>
</div></div>
<button class="collapsible">Devlopement & Copyrights </button>
<div class="content">
  <p>All The Devlopement Work Is Done By MR. PARAS PATIDAR & MR. SUNIL KALA Under The Guideness Of Professor Balkrishna Sharma(Computer Appication Department.All Rights Of modification and Uploding is Only By &copy;Quiz_world.</p>
</div>
</div></div>
<?php
include('footer.php')
?>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
