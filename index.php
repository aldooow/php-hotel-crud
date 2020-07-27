<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/partials/header.php' ?>

    <main>
      <?php if (isset($_GET['uproom'])) { ?>
        <p>Room <?php echo $_GET['uproom'];?> updated with success!!!</p>
      <?php  } ?>

      <!-- List rooms -->
      <table class="rooms-list">
        <thead>
          <tr>
            <th>ID</th>
            <th>N ROOM</th>
            <th>FLOOR</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($rooms as $room) { ?>
          <!-- room -->
          <tr>
            <td><?php echo $room['id']; ?></td>
            <td><?php echo $room['room_number']; ?></td>
            <td><?php echo $room['floor']; ?></td>
            <td>
              <a href="<?php echo $base_path ?>show/show.php?id=<?php echo $room['id']; ?>"><i class="fas fa-eye"></i></a>
              <a href="<?php echo $base_path ?>update/edit.php?id=<?php echo $room['id']; ?>"><i class="fas fa-edit"></i></a>
              <form action="<?php echo $base_path ?>delete/delete.php" method="post">
                <input type="hidden" name="form_id" value="<?php echo $room['id']; ?>">
                <input type="submit" value="DELETE">
              </form>

            </td>
          </tr>
          <!-- END room -->
          <?php  } ?>

        </tbody>
      </table>
      <!-- END List rooms -->


    </main>

  </body>
</html>
