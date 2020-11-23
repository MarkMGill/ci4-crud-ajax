<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $data) {  ?>
      <tr id="<?php echo $data['id']; ?>">
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a data-id="<?php echo $data['id']; ?>" class="btn btn-primary btnUpdate">Update</a></td>
        <td><a data-id="<?php echo $data['id']; ?>" class="btn btn-danger btnDelete">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>