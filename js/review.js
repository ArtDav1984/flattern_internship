var starLabel = $(".star-label");
var nameInput = $("#name");
var emailInput = $("#contact-email");
var messageInput = $("#message");
var errName = $("#errName");
var errEmail = $("#errEmail");
var errRate = $("#errRate");
var errMessage = $("#errMessage");
var nameChar = /^[A-Za-z-\s]+$/;
var emailChar = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
var checked = 0;

$(starLabel).click(function () {
   checked = 1;
   var activeStar = $(this).attr("data-target");

   if($(this).css("color", "#8b8b8b")) {
      for (var i = 0; i < activeStar; i++) {
         $(starLabel[i]).css("color", "gold");
      }
   }

   if($(this).css("color", "gold")){
      for (var j = $(starLabel).length; j >= activeStar; j --) {
         $(starLabel[j]).css("color", "#8b8b8b");
      }
   }
});

$("#reviewBtn").click(function (event) {
   event.preventDefault();
   var check = 0;

   if ($(nameInput).val() === '') {
       check = 1;
       $(errName).show();
       $(errName).html('This field is required');
   } else {
       $(errName).hide();
       if ($(nameInput).val().length < 2) {
           check = 1;
           $(errName).show();
           $(errName).html('Please enter at least 2 chars');
       } else {
           $(errName).hide();
           if (!nameChar.test($(nameInput).val())) {
               check = 1;
               $(errName).show();
               $(errName).html('This name has certain characters');
           } else {
               $(errName).hide();
           }
       }
   }

   if ($(emailInput).val() === '') {
       check = 1;
       $(errEmail).show();
       $(errEmail).html('This field is required');
   } else {
       $(errEmail).hide();
       if (!emailChar.test($(emailInput).val())) {
           check = 1;
           $(errEmail).show();
           $(errEmail).html('Please enter a valid email');
       } else {
           $(errEmail).hide();
       }
   }

   if (checked === 0) {
       check = 1;
       $(errRate).show();
       $(errRate).html('This field is required');
   } else {
       $(errRate).hide();
   }

   if ($(messageInput).val() === '') {
       check = 1;
       $(errMessage).show();
       $(errMessage).html('This field is required');
   } else {
       $(errMessage).hide();
   }

   if(check === 0) {
      $.ajax({
         url: 'php/insert_data.php',
         type: 'POST',
         dataType: 'JSON',
         data: $("#reviewForm").serialize(),
         success:function (response) {
            if (response['success']) {
                var success = $(".success");
                $(".review-block").hide();
                $(success).show();
                $(success).html(response['success']);
                setTimeout(refresh, 6000)
            }

            if (response['error']) {
                var error = $(".error");
                $(error).show();
                $(error).html(response['error']);
            }
         }
      });
   }
});

function refresh() {
   window.location.href = "contact.php";
}
