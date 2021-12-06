$(document).ready(function() {
    $('#data-table').DataTable();
});
$('.btnDelete').click(function(ev) {
    ev.preventDefault();
    var _href = $(this).attr('href');
    $('form#formDelete').attr('action', _href);
    if (confirm('Do you want delete?')) {
        $('form#formDelete').submit();
    }
});
// Image Preview
const thumbnail = document.getElementById("image");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

thumbnail.addEventListener("change",function(){
    const file = this.files[0];

    const reader = new FileReader();
    previewDefaultText.style.display = "none";
    previewImage.style.display = "block";
    reader.addEventListener("load",function(){
        previewImage.setAttribute("src",this.result);
    });
    reader.readAsDataURL(file);
});