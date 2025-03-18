document.addEventListener("DOMContentLoaded", function () {
    let image = document.getElementById("imagePreview");
    let imageInput = document.getElementById("imageInput");
    let cropper;

    imageInput.addEventListener("change", function (event) {
        let file = event.target.files[0];

        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                image.src = e.target.result;
                image.style.display = "block";

                if (cropper) {
                    cropper.destroy();
                }

                cropper = new Cropper(image, {
                    aspectRatio: 1, // Square Crop
                    viewMode: 2,
                    autoCropArea: 1
                });

                document.getElementById("cropImageBtn").style.display = "inline-block";
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById("cropImageBtn").addEventListener("click", function () {
        let canvas = cropper.getCroppedCanvas({
            width: 300,
            height: 300
        });

        canvas.toBlob(function (blob) {
            let reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function () {
                document.getElementById("croppedImageData").value = reader.result;
            };
        });

        alert("Image cropped! Click Save to upload.");
    });
});
