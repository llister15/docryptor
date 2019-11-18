// Shorthand for $( document ).ready()
$(function() {
    console.log( "ready!" );
    if ( $('#drop-zone').length ) {
      var dropZone = document.getElementById('drop-zone');
          var uploadForm = document.getElementById('js-upload-form');

          var startUpload = function(files) {
              console.log(files)
          }

          uploadForm.addEventListener('submit', function(e) {
              var uploadFiles = document.getElementById('js-upload-files').files;
              e.preventDefault()

              startUpload(uploadFiles)
          })

          dropZone.ondrop = function(e) {
              e.preventDefault();
              this.className = 'upload-drop-zone';

              startUpload(e.dataTransfer.files)
          }

          dropZone.ondragover = function() {
              this.className = 'upload-drop-zone drop';
              return false;
          }

          dropZone.ondragleave = function() {
              this.className = 'upload-drop-zone';
              return false;
          }
    }
    if ($('.404-page').length ) {

     function randomNum() {
        "use strict";
        return Math.floor(Math.random() * 9)+1;
    }
    var loop1,loop2,loop3,time=30, i=0, number, selector3 = document.querySelector('.thirdDigit'), selector2 = document.querySelector('.secondDigit'),
    selector1 = document.querySelector('.firstDigit');
    loop3 = setInterval(function() {
      "use strict";
      if(i > 40) {
        clearInterval(loop3);
        selector3.textContent = 4;
      } else {
            selector3.textContent = randomNum();
            i++;
        }
    }, time);
        loop2 = setInterval(function() {
          "use strict";
          if(i > 80) {
            clearInterval(loop2);
            selector2.textContent = 0;
        } else {
            selector2.textContent = randomNum();
            i++;
        }
    }, time);
        loop1 = setInterval(function() {
          "use strict";
          if(i > 100) {
            clearInterval(loop1);
            selector1.textContent = 4;
        } else {
            selector1.textContent = randomNum();
            i++;
        }
    }, time);
  }
}); 