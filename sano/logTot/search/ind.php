<html xmlns="http://w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocomplete search using PHP MySQLi ajax and jquery</title>
<script type="text/javascript" src="//code.jquery.com/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search_keyword").keyup(function()
{
     var search_keyword_value = $(this).val();
     var dataString = 'search_keyword=' + search_keyword_value;
     if(search_keyword_value!='')
     {
         $.ajax({
             type: "POST",
             url: "search.php",
             data: dataString,
             cache: false,
             success: function(html)
                { 
                   $("#result").html(html).show();
                 }
      
            });
     }
     return false;
});

$("#result").live("click",function(e){
      var $clicked = $(e.target);
      var $name = $clicked.find('.country_name').html();
      var decode = $("<div/>").html($name).text();
      $('#search_keyword_id').val(decode);
});

$(document).live("click", function(e) {
      var $clicked = $(e.target);
      if (! $clicked.hasClass("search_keyword")) {
           $("#result").fadeOut();
        }
});

$('#search_keyword_id').click(function(){
      $("#result").fadeIn();
});
});
</script>
</head>

<body>
      <div class='web'>
           <input type="search" class="search_keyword" id="search_keyword_id" placehoder="search" />
           <div id="result"></div>
       </div>
</body>
</html>
<style type="text/css">
       .web{
            font-family: tahoma;
            size: 12px;
            top: 10%;
            border: 1px solid #CDCDCD;
            border-radius: 10px;
            padding: 10px;
            width: 38%;
            margin: auto;
       }
       #search_keyword_id
        {
           width: 300px;
           border: solid 1px #CDCDCD;
           padding: 10px;
           font-size: 14px;
        }
        #result
        {
            position: absolute;
            width: 320px;
            display: none;
            margin-top: -1px;
            border-top: 0px;
            overflow: hidden;
            border: 1px #CDCDCD solid;
            background-color: white;
        }
        .show 
         {
              font-family: tahoma;
              padding: 10px;
              border-bottom: 1px #CDCDCD dashed;
              font-size: 15px;
         }
         .show:hover
         {
              background: #364956;
              color: #FFF;
              cursor: pointer;
         }

</style>
