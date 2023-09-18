<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="processes/orders.php" method="post">
            <label>Enter name</label>
            <input type="text" name="user_name" class="form-control" require>
            <label>Enter delivery address</label>
            <input type="text" name="address" class="form-control" require>
            <button type="button" name="order" class="btn btn-success mt-5">Confirm Order</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>