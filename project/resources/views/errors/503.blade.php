<?php
?>
    <!DOCTYPE   html>
<html lang="en">
<head>
    <title>Project</title>
</head>
<body>
<div class="container">
<div class="content">
<div class="title">Be right back.</div>
    @if(count($errors)>0)
        <div class="alert alert-danger ">
            <strong>Bug</strong> <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
</div>
</div>
</body>
</html>
