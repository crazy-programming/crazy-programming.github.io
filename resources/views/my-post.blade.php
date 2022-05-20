<!DOCTYPE html>
<html>
<head>
	<title>Laravel infinite scroll pagination</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  	<style type="text/css">
  		.ajax-load{
  			background: rgb(225, 225, 225);
		    padding: 10px 0px;
		    width: 100%;
  		}
          body{
              background-color:white;
          }

  	</style>
</head>
<body>


<div class="container card m-5">
	<h2 class="card-header text-center">Laravel infinite scroll lazy loading posts</h2>
	<br/>
	<div class="card-body " id="post-data">
		@include('data')
	</div>
    <div class="card-footer ajax-load text-center mb-3" style="display:none">
        <p><img src="{{asset('images/load.webp')}}" alt="loading image" width="30" height="30">  Loading More post</p>
    </div>
    
</div>




<script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
	});


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == ""){
                    $('.ajax-load').html("No more records found");
                    return ;
	            }
                
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
                
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>


</body>
</html>