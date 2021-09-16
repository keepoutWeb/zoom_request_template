let loc = document.location;

(async () => {
    function curl (data = [], url = loc) {
        fetch (url, data)
        .then ((response) => {
            return response;
        })
    }

    let data = await curl ();
    console.log(data)
})();