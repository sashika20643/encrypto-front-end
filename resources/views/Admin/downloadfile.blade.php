<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    download will start soon.....
    <form  name="myForm" id="myForm" action="http://sashika20643.pythonanywhere.com/downloadfile" method="POST">
        <input type="text" name="filename" value="{{$filename}}" style="display: none">
    </form>

    <script>
        window.onload=function(){

          document.forms["myForm"].submit();
        }
    </script>
</body>
</html>
