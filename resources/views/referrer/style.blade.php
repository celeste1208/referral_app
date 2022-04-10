`<style>
    body {
        font-family: sans-serif;
        font-size: 90%;
        padding: 0;
        margin: 0;
        user-select: none;
    }
    button {
        border: none;
    }
    input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #808080;
        border-radius: 8px;
        outline: none;
        margin-bottom: 12px;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
    }
    input:focus {
        box-shadow: rgb(79 91 255 / 30%) 0px 0px 0px 3px, rgb(79 91 255 / 30%) 0px 0px 0px 1px inset;
    }
    
    .container {
        background: #fff;
        border: 1px solid #505050;
        padding: 16px;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }
    .text {
        overflow-wrap: break-word;
        white-space: pre-line;
        word-break: break-word;
        padding-bottom: 12px;
    }
    .text-bold {
        font-weight: bold;
    }
    .text-large {
        font-size: 120%;
    }
    .text-center {
        text-align: center;
    }
    .flex {
        display: flex;
        justify-content: center;
        align-items: center;
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
        min-width: 80px;
        padding: 8px;
        border-radius: 8px;
        color: #fff;
        background: #4f5bff;
        box-shadow: rgb(0 0 0 / 5%) 0px 0px 2px 1px, rgb(0 0 0 / 8%) 0px 2px 6px, rgb(255 255 255 / 12%) 0px 0px 2px inset;
        cursor: pointer;
        transition-timing-function: cubic-bezier(0.3, 0, 0, 1);
        transition-duration: 150ms;
        outline: none;
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
</style>`
