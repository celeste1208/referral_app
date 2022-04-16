const body = `
    <div class="container dialog" id="dialog">
        <p class="text-title">{{$dialog_title_text}}</p>
        <p class="text">{{$dialog_text}}</p>
        <div class="input-area">
            <div class="text-label">リンクを共有する</div>
            <div class="flex">
                <input value="http://127.0.0.1:8000/referral/lp?code={{ $promotion_code }}" class="input-text input-text--flex promotion-code" id="promotion-code" type="text">
                <button class="button button-primary button-small" id="copy-code">コピー</button>
            </div>
        </div>
        <div class="flex">
            <a
                class="social-icon social-icon__facebook"
                href="https://www.facebook.com/share.php?u=http://127.0.0.1:8000/referral/lp?code={{ $promotion_code }}"
                target="_blank"
                rel="noopener"
            >
                <svg width="28" height="28" viewBox="0 0 100 100"><g transform="translate(-713 -334)"><path d="M86.353.824H14.5A14.075,14.075,0,0,0,.428,14.9v71.85A14.075,14.075,0,0,0,14.5,100.824H47.2v-36.5H34.841V50.086H47.2V39.6q0-8.916,4.931-13.844t13.375-4.938c5.638,0,9.288.219,10.956.631V34.124H68.953q-4.069,0-5.556,1.725a7.734,7.734,0,0,0-1.481,5.163v9.075H76L74.122,64.324H61.916v36.5H86.353a14.075,14.075,0,0,0,14.075-14.075V14.9A14.075,14.075,0,0,0,86.353.824Z" transform="translate(712.572 333.176)"/></g></svg>
            </a>
            <a
                class="social-icon social-icon__twitter"
                href="https://twitter.com/intent/tweet?text={{$referral_text}}%0aコード: {{$promotion_code}}%0aLPサイト:http://127.0.0.1:8000/referral/lp?code={{ $promotion_code }}%0a&url=http://127.0.0.1:8000/referral/top"
                target="_blank"
                rel="noopener"
            >
                <svg width="28" height="28" viewBox="0 0 100 100"><g transform="translate(-417 -334)"><path d="M120.1,73.642a41.478,41.478,0,0,1-11.782,3.242,20.588,20.588,0,0,0,9.027-11.358,40.767,40.767,0,0,1-13.032,4.98A20.51,20.51,0,0,0,68.818,84.534a20.086,20.086,0,0,0,.53,4.683,58.142,58.142,0,0,1-42.3-21.466,20.575,20.575,0,0,0,6.357,27.421,20.024,20.024,0,0,1-9.3-2.564v.254A20.534,20.534,0,0,0,40.57,112.993a20.652,20.652,0,0,1-5.4.72,19.355,19.355,0,0,1-3.857-.381,20.549,20.549,0,0,0,19.178,14.262A41.134,41.134,0,0,1,25,136.388a41.587,41.587,0,0,1-4.9-.3,57.47,57.47,0,0,0,31.426,9.282c37.762,0,58.4-31.3,58.4-58.445,0-.89-.021-1.78-.064-2.649A42.112,42.112,0,0,0,120.1,73.642Z" transform="translate(396.9 280)"/></g></svg>
            </a>
            <a
                class="social-icon social-icon__instagram"
                href="https://www.instagram.com/"
                target="_blank"
                rel="noopener"
            >
                <svg width="28" height="28" viewBox="0 0 100 100"><g transform="translate(-271 -334)"><g transform="translate(267.6 329.2)"><path d="M41.206,16.7A25.806,25.806,0,1,0,67.013,42.506,25.856,25.856,0,0,0,41.206,16.7Zm0,42.339A16.532,16.532,0,1,1,57.739,42.506,16.607,16.607,0,0,1,41.206,59.039Z" transform="translate(12.194 12.092)"/><circle cx="5.847" cy="5.847" r="5.847" transform="translate(74.368 22.34)"/><path d="M95.335,13.066C90.094,7.623,82.634,4.8,74.166,4.8H32.634C15.094,4.8,3.4,16.494,3.4,34.034V75.365c0,8.669,2.823,16.129,8.468,21.573,5.444,5.242,12.7,7.863,20.968,7.863H73.965c8.669,0,15.927-2.823,21.169-7.863,5.444-5.242,8.266-12.7,8.266-21.371V34.034C103.4,25.566,100.577,18.308,95.335,13.066Zm-.806,62.5c0,6.25-2.218,11.29-5.847,14.718s-8.669,5.242-14.718,5.242H32.835c-6.048,0-11.089-1.815-14.718-5.242-3.629-3.629-5.444-8.669-5.444-14.919V34.034c0-6.048,1.815-11.089,5.444-14.718,3.427-3.427,8.669-5.242,14.718-5.242H74.368c6.048,0,11.089,1.815,14.718,5.444a20.8,20.8,0,0,1,5.444,14.516V75.566Z" transform="translate(0 0)"/></g></g></svg>
            </a>
            <a
                class="social-icon social-icon__line"
                href="https://social-plugins.line.me/lineit/share?url=http://127.0.0.1:8000/referral/lp?code={{ $promotion_code }}"
                target="_blank"
                rel="noopener"
            >
                <svg width="28" height="28" viewBox="0 0 100 100"><g transform="translate(-564 -334)"><path d="M80.687,39.285a2.627,2.627,0,0,1,0,5.254H73.375v4.688h7.312a2.623,2.623,0,1,1,0,5.246H70.746a2.629,2.629,0,0,1-2.613-2.621V31.972a2.633,2.633,0,0,1,2.625-2.625H80.7a2.625,2.625,0,0,1-.012,5.25H73.375v4.688ZM64.625,51.851a2.622,2.622,0,0,1-1.8,2.483,2.692,2.692,0,0,1-.829.129,2.576,2.576,0,0,1-2.125-1.042L49.692,39.6v12.25a2.619,2.619,0,1,1-5.237,0V31.972a2.611,2.611,0,0,1,1.792-2.479,2.424,2.424,0,0,1,.808-.137,2.7,2.7,0,0,1,2.063,1.058L59.375,44.289V31.972a2.625,2.625,0,1,1,5.25,0Zm-23.921,0a2.621,2.621,0,1,1-5.242,0V31.972a2.621,2.621,0,1,1,5.242,0V51.851ZM30.429,54.472H20.487a2.64,2.64,0,0,1-2.625-2.621V31.972a2.625,2.625,0,1,1,5.25,0V49.226h7.317a2.623,2.623,0,0,1,0,5.246M100,41.164C100,18.785,77.562.572,50,.572S0,18.785,0,41.164C0,61.209,17.792,78.005,41.812,81.2c1.629.342,3.846,1.075,4.408,2.458a10.178,10.178,0,0,1,.158,4.5l-.683,4.25c-.187,1.254-1,4.942,4.371,2.688S78.883,78.1,89.383,66.03C96.567,58.159,100,50.1,100,41.164" transform="translate(564 335.428)"/></g></svg>
            </a>
        </div>
    </div>
`;

doc.body.innerHTML = body;

const wrapper = document.getElementById('ruhu-wrapper');
wrapper.style.setProperty('width', '500px');
wrapper.style.setProperty('height', '440px');

const codeInput = doc.getElementById('promotion-code');
const copyButton = doc.getElementById('copy-code');
copyButton.addEventListener('click', () => {
    codeInput.disabled = false;
    codeInput.select();
    doc.execCommand('copy');
    codeInput.disabled = true;
})
