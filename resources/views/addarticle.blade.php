<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
<form class="ui mini form" action="/stocks/addProduit/newForm" method="post">
{{csrf_field()}}
  <div class="two fields">
    <div class="field">
      <label  for="name">Produit</label>
      <input placeholder="First Name"  type="text" id="name" name="name">
    </div>
    <div class="field">
      <label for="price">Price</label>
      <input placeholder="Last Name" type="text" id="price" name="price">
    </div>
  </div>
  <div class="field">
      <label for="gestionStock">Stock</label>
      <input placeholder="First Name" type="text" id="gestionStock" name="gestionStock">
    </div>
    <div class="field">
      <label for="description">description</label>
      <input placeholder="First Name" type="text" id="description" name="description">
    </div>
  <input type="submit" class="ui submit button" value="Submit">
</div>
</form>
<button class="ui green button"><a href="../stocks">Home</a></button>

</body>
</html>