<!DOCTYPE html>
<html>
  <head>
    <title>HAHA wat a funny joke lmao</title>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

  <script>
        $(document).ready(function(){

            var comments;
            var promise = [];
            promise.push (
	            $.ajax({
		            url: "retrieveComments.php",
		            success: function(data){
			            comments = data;
		            },
		            datatype: "json"
	            })
            );
	            
            $.when.apply($, promise).then(function(){
	            $.each(comments, function(i, item) {
		            $("#comments").append("<div class=\"comment\">"+item.comment+"</div>");
	            });
            });

            var newComment;
            $("#addComment").click(function(){
               newComment = $("#newComment").val();
               $("#comments").append("<div class=\"comment\">"+newComment+"</div>");

                var dataString = "com="+newComment;
                $.ajax({
	                url: "insertNew.php",
	                type: "POST",
	                data: dataString,
	                success: function(data){
		                console.log('success');
	                }			
                });

            });

        });
  </script>
    <h1>POOPOOMAN.com</h1>
  </head>
    <body>
    <!-- your page content will go here -->
        <p>a couple of doppelgangers walk into a bar...</br></p>
        <p>...and they all look like POOPOO Man!</p>

       <!-- <p>ohooohhhh </br> </br> sstinky</br>  </br> </br>   </br> </br> pooooooooooooop</p> -->

        <div id="comments">

        </div>
    
        <p>Leave a comment:</p>
        <textarea id="newComment" rows="6" cols="50"></textarea></br>
        <button id="addComment">Submit comment</button>
    </body>
</html>
