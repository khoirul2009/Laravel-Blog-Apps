function close() {
    // const alert = document.querySelector("#alert");
    console.log("terklik");
}

function menu(e) {
    let list = document.getElementById("list");
    if (e.name === "menu") {
        e.name = "close";
        list.classList.remove("hidden");
    } else {
        e.name = "menu";
        list.classList.add("hidden");
    }
}
