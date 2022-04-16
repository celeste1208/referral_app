const body = `
    <div class="container dialog" id="dialog">
        <p class="text-title">{{$dialog_title_text}}</p>
        <p class="text">{{$dialog_text}}</p>

        <div class="input-area">
            <div class="text-label">あなたのメールアドレス</div>
            <input value="hoge@co.jp" class="input-text" id="dialog-input" type="email" placeholder="test@example.com" autocomplete="off" required maxlength="64">
        </div>

        <label class="checkbox-line" for="terms_policy">
          <input type="checkbox" id="terms_policy"><a href="http://127.0.0.1:8000/privacyPolicy" target="_blank" rel="noopener">プライバシーポリシー</a>と<a href="http://127.0.0.1:8000/terms" target="_blank" rel="noopener">利用規約</a>に同意する
        </label>

        <div class="button-area flex">
            <button class="button button-primary" id="submit-email">紹介リンクを発行する
          </div>
        <p class="text-small"><a href="https://relic.co.jp/" target="_blank" rel="noopener">RUFUを利用中</a></p>

    </div>
`;

const wrapper = document.getElementById('ruhu-wrapper');
wrapper.style.setProperty('width', '500px');
wrapper.style.setProperty('height', '440px');

doc.body.innerHTML = body;

const input = doc.getElementById('dialog-input');
const terms_policy = doc.getElementById('terms_policy');
const submitButton = doc.getElementById('submit-email');

let valid_input = false;
let valid_checkbox = false;
let valid_form = false;

var form_validation = function() {
  if(valid_input && valid_checkbox) {
    valid_form = true;
  } else {
    valid_form = false;
  }

  if(valid_form) {
    submitButton.classList.remove('button--disabled');
  } else {
    submitButton.classList.add('button--disabled');
  }
}

input.addEventListener('input', () => {
    if (/.+@.+\..+/.test(input.value)) {
      valid_input = true;
    } else {
      valid_input = false;
    }
    form_validation();
})

terms_policy.addEventListener('input', () => {
    if (terms_policy.checked) {
        valid_checkbox = true;
    } else {
      valid_checkbox = false;
    }
    form_validation();
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
