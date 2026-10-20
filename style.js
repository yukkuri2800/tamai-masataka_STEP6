document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("footerColorBtn");
    const footer = document.querySelector("footer");

    const colors = ["blue", "red", "yellow", "gray"];
    let index = 0;

if (btn && footer) {
    btn.addEventListener("click", () => {
        footer.style.backgroundColor = colors[index];
        index = (index + 1) % colors.length;
    });
}
const form = document.getElementById("contactForm");
if(!form){
    return;
}
form.addEventListener("submit", function(e){
    const name = document.getElementById("name").value.trim();
    const companyName = document.getElementById("companyName").value.trim();
    const email = document.getElementById("email").value.trim();
    const age = document.getElementById("age").value.trim();
    const message = document.getElementById("message").value.trim();
if(!name || !companyName || !email || !age || !message){
    alert("必須項目が入力されていません。入力内容をもう一度ご確認ください");
    e.preventDefault();
    return;
}

const confirmMessage =
    "下記の内容を本当に送信しますか？\n\n" +
    "お名前: " + name + "\n" +
    "会社名: " + companyName + "\n" +
    "メールアドレス: " + email + "\n" +
    "年齢: " + age + "\n" +
    "お問い合わせ内容: " + message;

if(!confirm(confirmMessage)){
    e.preventDefault();
    return;
}
});
});
