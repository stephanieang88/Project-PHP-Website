    <footer class="mt-5">
      <div class="admin_footer container-fluid">
         <h5>&copy; <?php echo date('Y'); ?> M+ Montessori</h5>
      </div>
    </footer>
</body>
</html>

<?php
   // Log out of database whenever web page ends
   db_disconnect($db);
?>
