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

    <form action="/ajout/article" method="post">
    {{csrf_field()}}
        <label for="name">titre
          <input type="text" name="title" id="title">
        </label>
        <label for="price" >texte
          <input type="text" name="text" id="text">
        </label>

        <!-- <label for="name">texte 
          <input type="number" name="text" id="price">
        </label> -->
        <input type="submit">
      </form>    
      <table class="ui celled table">
        <tr>
          <th>id</th>
          <th>title</th>
          <th>texte</th>
          
        </tr>
        <tr>
          @foreach($article as $value)
          <td>{{$value->id}}</td>
          <td>{{$value->title}}</td>
          <td>{{$value->text}}</td>
          <br>
          <td>
          
           <!--  <form action="/product/sell/{{$value->id}}" method="post">
              {{csrf_field()}}
              <button class="ui button">+</button>
            </form>
            <form action="/product/restock/{{$value->id}}" method="post">
              {{csrf_field()}}
              <button class="ui button">-</button>
            </form> -->
            
            <form action="/editArticle/{{$value->id}}"  method="get">
            {{csrf_field()}}
            <button class="red ui button ">edit</button>
            </form>

            <form action="/deleteArticle/{{$value->id}}" method="delete">
              
              <button class="orange ui button">supprimer</button>
            </form>
              

          </td>
        </tr>
        @endforeach

      </table>
    </div>
    <div class="four wide column"></div>
  </div>


