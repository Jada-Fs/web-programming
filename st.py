def fetchData(callback) {
    setTimeout(() => {
        console.log("Data fetched");
        callback("Here is your data");
    }, 2000)
}

fetchData((data) => {
    console.log(data);
})
