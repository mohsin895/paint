

const site_url = "http://localhost/brillux/";


$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $("#getPrice").change(function(){

    var size = $(this).val();

    var product_id = $(this).attr("product-id");
    //    alert(product_id);
    $.ajax({
      url:site_url +'get-product-price',
      data:{size:size,product_id:product_id},
      type:'post',
      success:function(resp){
        $(".getAttriPrice").html("Price:" +resp +"&nbsp;TK");
        $(".getAttriPrice").val(resp);
      },error:function(){
        alert("error");
      }
    });

  });

});