<?php
                          $sql3 = "SELECT * FROM `news` ORDER BY `news`.`photos` ASC";
                          $result3 = $db->query($sql3);
                          if (mysqli_num_rows($result3)) {
                              while ($row3 = $result3->fetch_assoc()) {
                                  ?>
                                <div class="aploader">
                                <img src="upload/<?php echo $row3['user profile'] ?>" width="200px">
                                <p><?php echo $row3['username'] ?></p>
                            </div>
                            <div id="photo-container">
                            <p><?php echo $row3['Content'] ?></p>
                               <!-- Video -->
                               <img id="photo" src="uploaded_photos/<?php echo $row3['photos'] ?>">
                            </div>
                            <?php
                              }
                          } ?>