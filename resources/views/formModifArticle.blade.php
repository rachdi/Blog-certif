
<!DOCTYPE html>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Table</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
<body>
  <div class="ui grid">
    <div class="four wide column"></div>
    <div class="eight wide column">  

    <form action="/modification/{{$articles->id}}" method="post">
    {{csrf_field()}}
        <label for="name">title
          <input type="text" name="title"  value="{{$articles->title}}">
        </label>

        <label for="stock">text
          <input type="text" name="text" id="text" value="{{$articles->text}}">
        </label>
        <input type="submit">
      </form>   