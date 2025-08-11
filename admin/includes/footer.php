

  <script src="assest/js/dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
        
<!-- Alertify js -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>   
   
   <script>

      <?php if(isset($_SESSION['message'])) {?>

     alertify.set('notifier','position', 'top-center');
     alertify.success( "<?= $_SESSION['message'] ; ?> ");

     <?php 
      unset($_SESSION['message']);
      } 
      ?>
   </script>
   
</body>
</html>

