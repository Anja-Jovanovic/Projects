<style>
  footer {
    position: fixed;
    bottom: 0;
    width: 1690px;
  }

  span {
    color: white;
    font-weight: bold;
    text-decoration: underline;
  }
</style>



<form action="remove-item.php" method="post">
  <table class="table table-dark table-striped mt-2">
    <thead>
      <tr>
        <th scope="col"> </th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total price</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0;
      foreach ($items as $item) {; ?>
        <tr>
          <th scope="row">
            <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item['id']); ?>">
          </th>
          <td><?php echo htmlspecialchars($item['title']); ?></td>
          <td><?php echo htmlspecialchars($item['price']); ?></td>
          <td><?php echo 1; ?></td>
          <td><?php echo 1 * htmlspecialchars($item['price']); ?></td>
        <?php $total += $item['price'];
      } ?>
        </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-between">
    <button class="btn btn-primary" type="submit">Remove</button>
    <span>Total price: <?php echo $total ?> din.</span>

  </div>
</form>