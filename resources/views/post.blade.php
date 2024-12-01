<x-app>
    <main class="flex w-full justify-center">
        <div class="flex flex-col justify-center mt-4">
            <h2>Novo post</h2>

            <form
                action="{{ route('posts.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="flex flex-col"
            >
                @csrf

                <p class="mt-4">Imagem</p>
                <label class="picture mt-1" for="picture__input">
                    <span class="picture__image">Escolha uma imagem</span>
                </label>
                <input
                    type="file"
                    name="image"
                    id="picture__input"
                    accept="image/*"
                >

                <label class="mt-4">
                    Descrição
                </label>
                <textarea
                    class="border mt-1 rounded-md"
                    name="description"
                    rows="4"
                ></textarea>

                <button type="submit" class="mt-4">
                    Postar
                </button>
            </form>
        </div>
    </main>
</x-app>
<style>
 #picture__input {
  display: none;
}

button {
    background-color: #26a9f5;
    color: #FFFFFF;
    border-radius: 8px;
    padding: 8px 16px;
}

textarea {
    border: 1px solid #aaa;
    border-radius: 8px;
}

.picture {
  width: 400px;
  aspect-ratio: 16/9;
  background: #FEFEFE;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #aaa;
  border: 2px dashed currentcolor;
  cursor: pointer;
  font-family: sans-serif;
  transition: color 300ms ease-in-out, background 300ms ease-in-out;
  outline: none;
  overflow: hidden;
}

.picture:hover {
  color: #777;
  background: #ccc;
}

.picture:active {
  border-color: turquoise;
  color: turquoise;
  background: #eee;
}

.picture:focus {
  color: #777;
  background: #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.picture__img {
  max-width: 100%;
}

</style>

<script>
const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Escolha uma imagem";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", function (e) {
            const readerTarget = e.target;

            const img = document.createElement("img");
            img.src = readerTarget.result;
            img.classList.add("picture__img");

            pictureImage.innerHTML = "";
            pictureImage.appendChild(img);
        });

        reader.readAsDataURL(file);
    } else {
        pictureImage.innerHTML = pictureImageTxt;
    }
});
</script>