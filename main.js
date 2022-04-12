$(document).on("click", "#submit", function(e){
        e.preventDefault();
          var first_name = $('#first_name').val();
          var last_name = $('#last_name').val();
          var phone_number = $('#phone_number').val();
          var submit = $('#submit').val();

          $.ajax({
              url: "insert.php",
              type: "post",
              data: {
                first_name : first_name,
                last_name: last_name,
                phone_number: phone_number,
                submit : submit
              },
              success : function(data){
                fetchall();
                $("#result").html(data);
              }
          });

          $('#form')[0].reset();

      });

      // Fetch details

      function fetchall(){
        $.ajax({
          url:'fetch.php',
          type: 'post',
          success: function(data){
             $("#fetch").html(data);
          }
        });
      }
      fetchall();

       $(document).on("click", "#del", function(e){
        e.preventDefault();

        if (window.confirm('are you sure you want to delete')) {
              var del_id = $(this).attr('value');
            $.ajax({
              url : 'del.php',
              type: 'post',
              data :{
                del_id : del_id
              },
              success: function(data){
                fetchall();
                $('#show').html(data);
              }
            });
          }else{
            return false;
          }
      });

       $(document).on("click", "#read", function(e){
        e.preventDefault();

        
              var read_id = $(this).attr('value');
              
            $.ajax({
              url : 'read.php',
              type: 'post',
              data :{
                read_id : read_id
              },
              success: function(data){
                
                $('#read_data').html(data);
              }
            });
          
      });


       $(document).on("click", "#edit", function(e){
        e.preventDefault();

        
              var edit_id = $(this).attr('value');
              
            $.ajax({
              url : 'edit.php',
              type: 'post',
              data :{
                edit_id : edit_id
              },
              success: function(data){
                
                $('#edit_data').html(data);
              }
            });
          
      });



       $(document).on("click", "#update", function(e){
        e.preventDefault();
          var edit_first_name = $('#edit_first_name').val();
          var edit_last_name = $('#edit_last_name').val();
          var edit_phone_number = $('#edit_phone_number').val();
          var update = $('#update').val();
          var edit_id = $('#edit_id').val();

          $.ajax({
              url: "update1.php",
              type: "post",
              data: {
                edit_first_name : edit_first_name,
                edit_last_name: edit_last_name,
                edit_phone_number: edit_phone_number,
                edit_id : edit_id,
                update : update
              },
              success : function(data){
                fetchall();
                $("#show").html(data);
              }
          });

          // $('#form')[0].reset();

      });