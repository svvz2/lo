function validate() {
    var username = document.getElementById("text").value;
    var password = document.getElementById("password").value;
    alert(username);

      $.ajax({
        type: 'POST',
        url: 'login.php',
        data: {user: username , pass: password},
        success: function(){console.log('Got Device Information');},
        mimeType: 'json'
      });

  
    };

  