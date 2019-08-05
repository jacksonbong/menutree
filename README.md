# menutree

You just need menutree.js and menutree.css in your html.And dont forget the jQuery.min.js! Actually, if you don't care about the css style, the menutree.js is enough for you. This menutree.css is used in a project of mine, so it may not suit for you, just change it! Hope you make it more beautiful :)

!!!Ps: I'm a beginner, so my code is not well, please forgive me if my code brings you more problems. :) I'm working hard now! And welcome to commuicate with me, it can make my better ! I will be very happy if you come to me!


Email: bongze9@gmail.com


##Start

###step1:

js and css<br/>
```
 <head>
  <link rel="stylesheet" type="text/css" href="menutree.css">
  <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="menutree.js"></script>
</head> 
  ```


###step2:

init
already create on Dom

    $('nav ul:first-child').menutree({ align: 'horizontal',layer: true , arrowright:"<span class='glyphicon glyphicon-chevron-right' style='float:right;'></span>"});
      //align two optional vertical / horizontal 
      //layer is for css 
      //arrowright is for icon on each layer
      //data object format fromm backend
      // target for first ul
  
    
    or create based on object
    
     $('nav ul:first-child').menutree({ align: 'horizontal',layer: true , arrowright:"<span class='glyphicon glyphicon-chevron-right' style='float:right;'></span>", data: <?php echo (json_encode($ul_array)); ?>,target: $('#ulmenulist')});



