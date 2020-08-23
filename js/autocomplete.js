$('document').ready(function(){
    $('#search').keyup(function(){
      var query = $(this).val();
      //alert(query);
      if(query != ''){
        $.ajax({
          url: "autocomplete.php",
          method: "POST",
          data: {query:query},
          success: function(data){

            $('#postList').fadeIn();
            $('#postList').html(data);

          }
        });
      }
      else{
        $('#postList').fadeOut();
        $('#postList').html("");
      }
    });
    $(document).on('click', 'li', function(){

      $('#search').val($(this).text());
      $('#postList').fadeOut();
    });
  });