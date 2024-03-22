document.getElementById("productForm").addEventListener("submit", async function (event) {
    event.preventDefault();

    let formData = new FormData(this);

    try {
        let response = await fetch(`${URL_PATH}/product/addProduct`, {
            method: "POST",
            body: formData,
        });

        let responseText = await response.text();
        console.log(responseText);
    } catch (error) {
        console.error("Error:", error);
    }
});
