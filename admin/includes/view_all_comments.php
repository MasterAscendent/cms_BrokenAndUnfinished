<table class="table table-border table-hover">

  <thead>
    <th>Id</th>
    <th>Author</th>
    <th>Comments</th>
    <th>Email</th>
    <th>Status</th>
    <th>In Response to</th>
    <th>Date</th>
    <th>Approve</th>
    <th>Unapprove</th>
    <th>Delete</th>
  </thead>

  <tbody>


    <?php

    $query = "SELECT * FROM comments";
    $select_comments = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_comments)) {
      $comments_id = $row['comments_id'];
      $comments_post_id = $row['comments_post_id'];
      $comments_author = $row['comments_author'];
      $comment_content = $row['comment_content'];
      $comment_email = $row['comment_email'];
      $comment_status = $row['comment_status'];
      $comment_date = $row['comment_date'];

      echo "<tr>";

      echo "<td>$comment_id</td>";
      echo "<td>$comment_author</td>";
      echo "<td>$comment_content</td>";

      // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
      // $select_categories_id = mysqli_query($connection, $query);
      //
      // while($row = mysqli_fetch_assoc($select_categories_id)) {
      //   $cat_id = $row['cat_id'];
      //   $cat_title = $row['cat_title'];
      //
      // echo "<td>{$cat_title}</td>";
      //
      //   }


      echo "<td>$comment_email</td>";
      echo "<td>$comment_status</td>";
      echo "<td>$comment_date</td>";
      echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Approve</a></td>";
      echo "<td><a href='posts.php?delete={$post_id}'>Unapprove</a></td>";
      echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
      echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
      echo "</tr>";



    }

     ?>

  </tbody>

</table>
<?php
if(isset($_GET['delete'])) {

  $the_post_id = $_GET['delete'];

  $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
  $delete_query = mysqli_query($connection, $query);

}

 ?>
