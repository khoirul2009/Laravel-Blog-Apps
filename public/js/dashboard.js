const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", function () {
    fetch("/dashboard/posts/checkSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

function previewImg() {
    const image = document.querySelector("#file-upload");
    const imgPreview = document.querySelector(".img-preview");
    const logoImg = document.querySelector("#logo-img");

    imgPreview.style.display = "block";

    const blob = URL.createObjectURL(image.files[0]);
    imgPreview.src = blob;
    logoImg.classList.add("hidden");
}
