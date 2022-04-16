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
    /* input, textarea {
        width: 100%;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid #808080;
        border-radius: 8px;
        outline: none;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        resize: none;
    } */

    .input-text {
        width: 100%;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid #808080;
        border-radius: 8px;
        outline: none;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        resize: none;

    }
    /* input:focus {
        box-shadow: rgb(79 91 255 / 30%) 0px 0px 0px 3px, rgb(79 91 255 / 30%) 0px 0px 0px 1px inset;
    } */
    .input-text:focus {
      box-shadow: rgb(79 91 255 / 30%) 0px 0px 0px 3px, rgb(79 91 255 / 30%) 0px 0px 0px 1px inset;

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
        /* overflow-wrap: break-word;
        white-space: pre-line;
        word-break: break-word; */
        font-size: 14px;
        margin-bottom: 16px;


    }
    /* .text-bold {
        font-weight: bold;
    } */
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
        margin-bottom: 8px;
    }

    .input-text {
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
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        outline: none;
    }
    .button.button-small {
        width: 40px;
        min-width: 40px;
    }
    .button.button-primary {
      /* 2C538D */
        background: #2C538D;
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 8%) 0px 2px 6px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
    }
    .button.button-secondary {
        background: #909090;
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 8%) 0px 2px 6px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
    }
    .button:hover, .button:focus {
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 15%) 0px 4px 16px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
    }
    .button--disabled {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 80px;
        padding: 8px;
        border-radius: 8px;
        color: #fff;
        background: #a0a0a0;
        cursor: auto;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        outline: none;
    }
    .social-icon * {
        fill: #808080;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
    }
    .social-icon:hover * {
        fill: #303030;
    }
</style>`
