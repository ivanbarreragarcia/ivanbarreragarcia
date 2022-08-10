const $QRCodeContainer = document.getElementById("container__qrcode")
const $form = document.getElementById("container__form")

const QR = new QRCode($QRCodeContainer)

$form.addEventListener("submit", (e)=>{
    e.preventDefault();
    console.dir(QR);
    if($form.url.checkValidity() && $form.url.value) {
        QR.makeCode($form.url.value);
    }
})


