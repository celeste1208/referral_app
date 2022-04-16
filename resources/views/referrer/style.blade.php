`<style>
    @import url(http://fonts.googleapis.com/earlyaccess/notosansjp.css);

    body {
        font-family: sans-serif;
        font-size: 90%;
        padding: 0;
        margin: 0;
        user-select: none;
        background-color: transparent; */
    }

    body * {
        box-sizing: border-box;
    }

    button {
        border: none;
    }

    a {
        text-decoration: none;
    }

    .input-text {
        width: 100%;
        padding: 16px;
        border: 1px solid #D3D3D3;
        border-radius: 4px;
        outline: none;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        resize: none;
    }

    .input-text:focus {
      box-shadow: rgb(79 91 255 / 30%) 0px 0px 0px 3px, rgb(79 91 255 / 30%) 0px 0px 0px 1px inset;

    }

    .input-text--flex {
      width: 85%;
    }

    .container {
        padding: 16px;
        width: 100%;
        height: 100%;
    }

    .dialog {
        padding: 26px;
        width: 100%;
        height: 100%;
    }

    .text {
        font-size: 14px;
        margin-bottom: 16px;
    }

    .text-large {
        font-size: 16px;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 500;
        text-align: center;
        line-height: 24px;
    }

    .text-title {
        font-size: 16px;
        font-family: 'Noto Sans JP', sans-serif;
        font-weight: 500;
        text-align: center;
        margin-bottom: 16px;
    }

    .text-small {
        font-size: 12px;
        font-family: 'Noto Sans JP', sans-serif;
        text-align: center;
        margin-bottom: 24px;
    }

    .text-label {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .input-area {
      margin-bottom: 16px;
    }

    .button-area {
      margin-bottom: 24px;
    }

    .checkbox-line {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 24px;
    }

    .flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flex *:nth-child(n + 2) {
        margin-left: 8px;
    }

    .flex-column {
        flex-direction: column;
    }

    .pointer {
        cursor: pointer;
    }

    .button {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 172px;
        height: 46px;
        padding: 8px;
        border-radius: 8px;
        color: #fff;
        cursor: pointer;
    }

    .button-small {
        width: 74px;
        padding: 16px;
        min-width: 46px;
        border-radius: 4px;
    }

    .button-primary {
        background: #2C538D;
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 8%) 0px 2px 6px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
    }

    .button:hover, .button:focus {
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 15%) 0px 4px 16px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
    }

    .button--disabled {
        color: #fff;
        background: #a0a0a0;
        cursor: auto;
    }

    .social-icon {
        transition: opacity .2s;
    }

    .social-icon *{
        margin-left: 8px;
        transition: opacity .2s;
    }

    .social-icon__facebook {
      fill: #1877F2;
    }

    .social-icon__twitter {
      fill: #1D9BF0;

    }

    .social-icon__instagram {
      fill: #000;
    }

    .social-icon__line {
      fill: #06C755;
    }

    .social-icon:hover * {
      opacity: 0.8;
      transition: opacity .2s;

    }
</style>`
