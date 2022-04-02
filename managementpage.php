<?php
include('navbar.php');
?>
<html>
<head>

	<meta charset="utf-8">
	<title>Staff ratings</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	
	<!-- Main Style Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/btnstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>
</head>

<body style="background: #4E8EBF;">
<!--Table-->

<table class="table table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
      <th>Name</th>
      <th>Number of subjects taught</th>
      <th>Percentage of target achieved</th>
      <th>Multiplying Factors</th>
      <th>Weight Achieved</th>
      <th>Star rating</th>
      
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>fbfgbfgb</td>
      <td>5</td>
      
      <td>95%</td>
      <td>testtest8</td>
      <td>6</td>
      <td><?php 
      #use loop star times 
      #put star code here while fetching number of stars from backend.
      ?> <div class="rate">
      <input type="radio" id="star5" name="rate" value="5" />
      <label for="star5" title="text">5 stars</label>
      <input type="radio" id="star4" name="rate" value="4" />
      <label for="star4" title="text">4 stars</label>
      <input type="radio" id="star3" name="rate" value="3" />
      <label for="star3" title="text">3 stars</label>
      <input type="radio" id="star2" name="rate" value="2" />
      <label for="star2" title="text">2 stars</label>
      <input type="radio" id="star1" name="rate" value="1" />
      <label for="star1" title="text">1 star</label>
    </div></td>
    </tr>
   <!-- HTML !-->
   <br>
   <br>
<button class="button-30" role="button">Staff Performance</button><br><br><br><br>


  </tbody>
  <!--Table body-->


</table>
<!--Table-->
</body>
</html>