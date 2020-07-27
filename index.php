<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/partials/header.php' ?>

    <main>

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
              <a href="<?php echo $base_path ?>show/show.php?id=<?php echo $room['id']; ?>">VIEW</a>
              <a href="<?php echo $base_path ?>update/edit.php?id=<?php echo $room['id']; ?>">EDIT</a>
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
