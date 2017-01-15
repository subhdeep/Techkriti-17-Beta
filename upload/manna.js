$(document).ready(function(){

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
console.log("fuck");


            }

            reader.readAsDataURL(input.files[0]);
        }
    }


$("#upload").change(function () {
        readURL(this);
    });

});
