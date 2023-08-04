document.querySelector(".shorten").addEventListener('click', function () {
    let url = document.getElementById('url-input').value
    function generateRandomString(length = 8) {
        const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        let randomString = '';

        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            randomString += characters.charAt(randomIndex);
        }

        return randomString;
    }

    fetch('/shorten', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken, // Include CSRF token for web routes
        },
        body: JSON.stringify({
            original_url: url,
            short_code: generateRandomString(),
        }),
    })
        .then(response => response.json())
        .then(data => {
            toastr.success("Short url gemaakt!!", "Gelukt!");
            console.log(data);
            document.getElementById('shortened').value = "http://localhost:8000/" + data.data.short_code
        })
        .catch(error => {
            toastr.error("Er is iets fout gegaan.", "Fout!");
            console.log(error);
        });
})