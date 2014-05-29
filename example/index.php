<!DOCTYPE html>
<html>
<head>
  <title>Sample Page</title>
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script>
  $(function() {

    $.ajaxSetup({
      dataType : "json",
    });

    $.ajax({
      url: 'http://192.168.1.200:9000/example/ExampleMicroblog.routes.php/posts.json',
      type:"GET",
      success:function(data){
        //put logic to update ui here. usually this would be done with angular but for brevity it is done with pure jQuery
        console.log('data', data);
      }

    });
    $.ajax({
      url: 'http://192.168.1.200:9000/example/ExampleMicroblog.routes.php/posts.json',
      type:"POST",
      data:{
        tweet:'posting a tweet from ajax',
        date:'1:50a',
        user:'someusername'
      },
      success:function(data){
        //put logic to update ui here. usually this would be done with angular but for brevity it is done with pure jQuery
        console.log('data', data);
      }

    });
  });
  </script>
</head>
<body>
  see console for outputs
</body>
</html>

