document.addEventListener("DOMContentLoaded", function () {
    let formContacto = document.querySelector("#formContacto");
    formContacto.onsubmit = function (e) {
        e.preventDefault();
        let request = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        let ajaxUrl = "contactos.php";
        let formData = new FormData(formContacto);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                let objData = JSON.parse(request.responseText);
                if (objData.status) {
                    formContacto.reset();
                    alert(objData.data);
                } else {
                    alert(objData.data);
                }
            }
        };
    };
});
