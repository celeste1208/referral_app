const body = `
    <div class="container dialog" id="dialog">
        <div class="text text-center text-bold text-large">いつもご利用いただきありがとうございます！</div>
        <div class="text">このサービスをより多くの人に届けたく、あなたの大切な友人にご紹介いただけると嬉しいです。
            あなたが紹介した方が3ヶ月以内に本サービスで支払いを行うと、感謝の気持ちのアマゾンギフトカードをプレゼントします。
        </div>
        <div class="text text-bold">あなたのメールアドレスを入力して紹介する</div>
        <input id="dialog-input" type="email" placeholder="test@example.com" autocomplete="off" required maxlength="64">
        <div class="flex">
            <button class="button--disabled button-primary" id="submit-email">紹介する</div>
        </div>
    </div>
`;

const wrapper = document.getElementById('ruhu-wrapper');
wrapper.style.setProperty('width', '400px');
wrapper.style.setProperty('height', '320px');

doc.body.innerHTML = body;

const input = doc.getElementById('dialog-input');
const submitButton = doc.getElementById('submit-email');
input.addEventListener('input', () => {
    if (/.+@.+\..+/.test(input.value)) {
        submitButton.classList.add('button');
        submitButton.classList.remove('button--disabled');
    } else {
        submitButton.classList.add('button--disabled');
        submitButton.classList.remove('button');
    }
})
submitButton.addEventListener('click', () => {
    if (!submitButton.classList.contains('button--disabled')) {
        const xhr = new XMLHttpRequest();
        const url = 'http://127.0.0.1:8000/api/dialog';
        const data = new FormData();
        data.append('email', input.value);
        xhr.onload = (e) => {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                eval(xhr.response);
            } else {
                console.log(e);
            }
        }
        xhr.open('POST', url, true);
        xhr.send(data);
    }
})
