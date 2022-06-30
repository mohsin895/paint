
const site_url = "http://localhost/brillux/";

$('body').on('change', '#employeeStatus', function () {
 

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: site_url + "admin/employee/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });


$('body').on('change', '#orderNitificationStatus', function () {
 

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: site_url + "orderNotification/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$('body').on('change', '#GiftcardStatus', function () {

var id = $(this).attr('data-id');
if (this.checked) {
  var status = '1';
} else {
  status = '0';
}
$('.loader__').show();
$.ajax({
  url: "giftcard/update-status/" + id + '/' + status,
  method: 'get',
  success: function (result) {
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('Status Update Successfully ');
    $('.loader__').hide();
  }
});

});

$('body').on('change', '#blogcategoryStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "blogcategory/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$('body').on('change', '#CategoryStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "category/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

//price update
$('body').on('change', '.buying_price', function () {

  var id = $(this).attr('data-id');
    var p = $(this).val();
  
  $('.loader__').show();
  $.ajax({
    url: "product/updateBuyingPrice/" + id + '/' + p,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  $('body').on('change', '.price', function () {

    var id = $(this).attr('data-id');
      var p = $(this).val();
    
    $('.loader__').show();
    $.ajax({
      url: "product/updateSellingPrice/" + id + '/' + p,
      method: 'get',
      success: function (result) {
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('Status Update Successfully ');
        $('.loader__').hide();
      }
    });
    
    });

    $('body').on('change', '.quantity', function () {

      var id = $(this).attr('data-id');
      var p = $(this).val();
      
      
      $('.loader__').show();
      $.ajax({
        url: "product/updateQuantity/" + id + '/' + p,
        method: 'get',
        success: function (result) {
         
          alertify.set('notifier', 'position', 'top-right');
          alertify.success('quantity Update Successfully ');
          $('.loader__').hide();
        }
      });


      
      });

      $('body').on('change', '.quantitylow', function () {

        var id = $(this).attr('data-id');
        var p = $(this).val();
        
        
        $('.loader__').show();
        $.ajax({
          url: "low/updateQuantity/" + id + '/' + p,
          method: 'get',
          success: function (result) {
           
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('quantity Update Successfully ');
            $('.loader__').hide();
          }
        });
  
  
        
        });

        $('body').on('change', '.quantityout', function () {

          var id = $(this).attr('data-id');
          var p = $(this).val();
          
          
          $('.loader__').show();
          $.ajax({
            url: "out/updateQuantity/" + id + '/' + p,
            method: 'get',
            success: function (result) {
             
              alertify.set('notifier', 'position', 'top-right');
              alertify.success('quantity Update Successfully ');
              $('.loader__').hide();
            }
          });
    
    
          
          });
  //price update end

  $(function () {
    var limitInput = function () {
        var value = parseInt(this.value, 10);
        var max = parseInt(this.max, 10);
        var min = parseInt(this.min, 10);

        if (value > max) {
            this.value = max;
        } else if (value < min) {
            this.value = min
        }
    };
    $("#numberBox").change(limitInput);
});

$(function () {
  var limitInputprice = function () {
      var value = parseInt(this.value, 10);
      var max = parseInt(this.max, 10);
      var min = parseInt(this.min, 10);

      if (value > max) {
          this.value = max;
      } else if (value < min) {
          this.value = min
      }
  };
  $("#priceBox").change(limitInputprice);
});

$('body').on('change', '#QuestionStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "Userquestion/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

$(document).on("click", ".confirmDelete", function () {
    var record = $(this).attr("record");
    var recordid = $(this).attr("recordid");
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        window.location.href = site_url + "admin/delete-" + record + "/" + recordid;

      }
    });

  });


  $(document).ready(function () {
    $("#current_pwd").click(function () {
      var current_pwd = $("#current_pwd").val();
      $.ajax({
        type: 'get',
        url: site_url + 'admin/check-pwd',
        data: { current_pwd: current_pwd },
        success: function (resp) {
          if (resp == 'false') {
            $("#chkPwd").html("<font color='red'>Current password is incorrect</font>");
          } else if (resp == "true") {
            $("#chkPwd").html("<font color='green'>Current password is correct</font>");
          }
        }
  
      });
    });
  });





