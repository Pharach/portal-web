import './bootstrap';

import { DotLottie } from '@lottiefiles/dotlottie-web';

document.addEventListener("DOMContentLoaded", function () {
    // ซ่อน Overlay Loading หลังจากหน้าเว็บโหลดเสร็จ
    setTimeout(() => {
        document.getElementById("loadingOverlay").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 2000); // โหลด 2 วินาที (เปลี่ยนได้ตามต้องการ)
});


document.addEventListener("DOMContentLoaded", () => {
    const languageToggle = document.getElementById("toggle-language");

    languageToggle.addEventListener("click", () => {
        const currentLang = languageToggle.innerText === "EN" ? "th" : "en";
        window.location.href = `/lang/${currentLang}`;
    });
});


const dotLottie = new DotLottie({
    autoplay: true,
    loop: true,
    canvas: document.querySelector('#dotlottie-canvas'),
    src: "<https://lottie.host/5ddf3366-fb98-41ed-91c1-c96f79ff3af2/AbunSXuoLp.lottie>", // replace with your .lottie or .json file URL
});