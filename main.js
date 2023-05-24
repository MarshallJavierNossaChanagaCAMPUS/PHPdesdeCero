let formRegistro = document.querySelector("#myFormRegistro");
let formLogin = document.querySelector("#myFormLogin");

let headers = new Headers({"Content-Type": "application/json"});
let config = {
    headers: headers
};

let urlDatabase = "http://localhost:3000/users";
let urlBackend = "/home/spukM01-070/Documents/Marshall/PHPdesdeCero/entidad/user.php";

formRegistro.addEventListener("submit", async (e) => {
    e.preventDefault();
    config.method = "POST";
    let data = Object.fromEntries(new FormData(e.target));
    config.body = JSON.stringify(data);
    console.log(data);
    let res = await (await fetch(urlDatabase, config)).json();
    console.log(res);
    formRegistro.reset()
});

formLogin.addEventListener("submit", (e) => {
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    console.log(data);
    formLogin.reset()
})