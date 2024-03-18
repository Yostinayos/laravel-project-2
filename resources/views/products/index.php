<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Products table</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product</th>
        <th>Category</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product){
            echo " <tr>
            <td>$product->name</td>
            <td>{$product->Category->name}</td>
            <td>{$product->price} </td>
          </tr>";
        }?>
     
     
    </tbody>
  </table>
</div>

</body>
</html>