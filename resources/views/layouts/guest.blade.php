<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cadastro</title>

        <!-- Fonts -->
        <link rel="shortcut icon" type="imagex/png" href="img/icon.png">


        <!-- Scripts -->
    <style>*,:before,:after {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    :before,:after {
        --tw-content: ""
    }

    html,:host {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4;
        font-family: Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";
        font-feature-settings: normal;
        font-variation-settings: normal;
        -webkit-tap-highlight-color: transparent
    }

    body {
        margin: 0;
        line-height: inherit
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    h1,h2,h3,h4,h5,h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    b,strong {
        font-weight: bolder
    }

    code,kbd,samp,pre {
        font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub,sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse
    }

    button,input,optgroup,select,textarea {
        font-family: inherit;
        font-feature-settings: inherit;
        font-variation-settings: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0
    }

    button,select {
        text-transform: none
    }

    button,[type=button],[type=reset],[type=submit] {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none
    }

    :-moz-focusring {
        outline: auto
    }

    :-moz-ui-invalid {
        box-shadow: none
    }

    progress {
        vertical-align: baseline
    }

    ::-webkit-inner-spin-button,::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    summary {
        display: list-item
    }

    blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre {
        margin: 0
    }

    fieldset {
        margin: 0;
        padding: 0
    }

    legend {
        padding: 0
    }

    ol,ul,menu {
        list-style: none;
        margin: 0;
        padding: 0
    }

    dialog {
        padding: 0
    }

    textarea {
        resize: vertical
    }

    input::-moz-placeholder,textarea::-moz-placeholder {
        opacity: 1;
        color: #9ca3af
    }

    input::placeholder,textarea::placeholder {
        opacity: 1;
        color: #9ca3af
    }

    button,[role=button] {
        cursor: pointer
    }

    :disabled {
        cursor: default
    }

    img,svg,video,canvas,audio,iframe,embed,object {
        display: block;
        vertical-align: middle
    }

    img,video {
        max-width: 100%;
        height: auto
    }

    [hidden] {
        display: none
    }

    [type=text],input:where(:not([type])),[type=email],[type=url],[type=password],[type=number],[type=date],[type=datetime-local],[type=month],[type=search],[type=tel],[type=time],[type=week],[multiple],textarea,select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        border-radius: 0;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.5rem;
        --tw-shadow: 0 0 #0000
    }

    [type=text]:focus,input:where(:not([type])):focus,[type=email]:focus,[type=url]:focus,[type=password]:focus,[type=number]:focus,[type=date]:focus,[type=datetime-local]:focus,[type=month]:focus,[type=search]:focus,[type=tel]:focus,[type=time]:focus,[type=week]:focus,[multiple]:focus,textarea:focus,select:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty, );
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #f88400;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);
        border-color: #ff9900
    }

    input::-moz-placeholder,textarea::-moz-placeholder {
        color: #6b7280;
        opacity: 1
    }

    ::-webkit-datetime-edit-fields-wrapper {
        padding: 0
    }

    ::-webkit-date-and-time-value {
        min-height: 1.5em;
        text-align: inherit
    }

    ::-webkit-datetime-edit {
        display: inline-flex
    }

    ::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field {
        padding-top: 0;
        padding-bottom: 0
    }

    [multiple],[size]:where(select:not([size="1"])) {
        background-image: initial;
        background-position: initial;
        background-repeat: unset;
        background-size: initial;
        padding-right: .75rem;
        -webkit-print-color-adjust: unset;
        print-color-adjust: unset
    }

    [type=checkbox],[type=radio] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 0;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        flex-shrink: 0;
        height: 1rem;
        width: 1rem;
        color: #ff5100;
        background-color: #fff;
        border-color: #6b7280;
        border-width: 1px;
        --tw-shadow: 0 0 #0000
    }

    [type=checkbox] {
        border-radius: 0
    }

    [type=radio] {
        border-radius: 100%
    }

    [type=checkbox]:focus,[type=radio]:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-inset: var(--tw-empty, );
        --tw-ring-offset-width: 2px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #eb6e25;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)
    }

    [type=checkbox]:checked,[type=radio]:checked {
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat
    }

    @media (forced-colors: active) {
        [type=checkbox]:checked {
            -webkit-appearance: auto;
            -moz-appearance: auto;
            appearance: auto
        }
    }

    @media (forced-colors: active) {
        [type=radio]:checked {
            -webkit-appearance: auto;
            -moz-appearance: auto;
            appearance: auto
        }
    }

    [type=checkbox]:checked:hover,[type=checkbox]:checked:focus,[type=radio]:checked:hover,[type=radio]:checked:focus {
        border-color: transparent;
        background-color: currentColor
    }


    @media (forced-colors: active) {
        [type=checkbox]:indeterminate {
            -webkit-appearance: auto;
            -moz-appearance: auto;
            appearance: auto
        }
    }

    [type=checkbox]:indeterminate:hover,[type=checkbox]:indeterminate:focus {
        border-color: transparent;
        background-color: currentColor
    }

    [type=file] {
        background: unset;
        border-color: inherit;
        border-width: 0;
        border-radius: 0;
        padding: 0;
        font-size: unset;
        line-height: inherit
    }

    [type=file]:focus {
        outline: 1px solid ButtonText;
        outline: 1px auto -webkit-focus-ring-color
    }


    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0,0,0,0);
        white-space: nowrap;
        border-width: 0
    }

    .fixed {
        position: fixed
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .inset-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .-bottom-16 {
        bottom: -4rem
    }

    .-left-16 {
        left: -4rem
    }

    .-left-20 {
        left: -5rem
    }

    .end-0 {
        inset-inline-end: 0px
    }

    .start-0 {
        inset-inline-start: 0px
    }

    .top-0 {
        top: 0
    }

    .z-0 {
        z-index: 0
    }

    .z-50 {
        z-index: 50
    }

    .\!row-span-1 {
        grid-row: span 1 / span 1!important
    }

    .-mx-3 {
        margin-left: -.75rem;
        margin-right: -.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .-me-2 {
        margin-inline-end:-.5rem}

    .-ml-px {
        margin-left: -1px
    }

    .mb-4 {
        margin-bottom: 1rem
    }

    .mb-6 {
        margin-bottom: 1.5rem
    }

    .ml-3 {
        margin-left: .75rem
    }

    .ms-1 {
        margin-inline-start:.25rem}

    .ms-2 {
        margin-inline-start:.5rem}

    .ms-3 {
        margin-inline-start:.75rem}

    .ms-4 {
        margin-inline-start:1rem}

    .mt-1 {
        margin-top: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mt-3 {
        margin-top: .75rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .block {
        display: block
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .table {
        display: table
    }

    .grid {
        display: grid
    }

    .\!hidden {
        display: none!important
    }

    .hidden {
        display: none
    }

    .aspect-video {
        aspect-ratio: 16 / 9
    }

    .size-12 {
        width: 3rem;
        height: 3rem
    }

    .size-5 {
        width: 1.25rem;
        height: 1.25rem
    }

    .size-6 {
        width: 1.5rem;
        height: 1.5rem
    }

    .h-12 {
        height: 3rem
    }

    .h-16 {
        height: 4rem
    }

    .h-20 {
        height: 5rem
    }

    .h-4 {
        height: 1rem
    }

    .h-40 {
        height: 10rem
    }

    .h-5 {
        height: 1.25rem
    }

    .h-6 {
        height: 1.5rem
    }

    .h-9 {
        height: 2.25rem
    }

    .h-full {
        height: 100%
    }

    .min-h-screen {
        min-height: 100vh
    }

    .w-20 {
        width: 5rem
    }

    .w-3\/4 {
        width: 75%
    }

    .w-4 {
        width: 1rem
    }

    .w-48 {
        width: 12rem
    }

    .w-5 {
        width: 1.25rem
    }

    .w-6 {
        width: 1.5rem
    }

    .w-\[calc\(100\%\+8rem\)\] {
        width: calc(100% + 8rem)
    }

    .w-auto {
        width: auto
    }

    .w-full {
        width: 100%
    }

    .max-w-2xl {
        max-width: 42rem
    }

    .max-w-7xl {
        max-width: 80rem
    }

    .max-w-\[877px\] {
        max-width: 877px
    }

    .max-w-xl {
        max-width: 36rem
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .shrink-0 {
        flex-shrink: 0
    }

    .\!flex-row {
        flex-direction: row!important
    }

    .flex-col {
        flex-direction: column
    }

    .items-start {
        align-items: flex-start
    }

    .items-center {
        align-items: center
    }

    .items-stretch {
        align-items: stretch
    }
    .justify-end {
        justify-content: flex-end
    }
    .justify-center {
        justify-content: center
    }

    .justify-between {
        justify-content: space-between
    }

    .justify-items-center {
        justify-items: center
    }
    .rounded {
        border-radius: .25rem
    }

    .rounded-\[10px\] {
        border-radius: 10px
    }

    .rounded-full {
        border-radius: 9999px
    }

    .rounded-lg {
        border-radius: .5rem
    }

    .rounded-md {
        border-radius: .375rem
    }

    .rounded-sm {
        border-radius: .125rem
    }

    .rounded-l-md {
        border-top-left-radius: .375rem;
        border-bottom-left-radius: .375rem
    }

    .rounded-r-md {
        border-top-right-radius: .375rem;
        border-bottom-right-radius: .375rem
    }

    .border {
        border-width: 1px
    }

    .border-b {
        border-bottom-width: 1px
    }

    .border-b-2 {
        border-bottom-width: 2px
    }

    .border-l-4 {
        border-left-width: 4px
    }



    .p-2 {
        padding: .5rem
    }

    .p-4 {
        padding: 1rem
    }

    .p-6 {
        padding: 1.5rem
    }

    .px-1 {
        padding-left: .25rem;
        padding-right: .25rem
    }

    .px-2 {
        padding-left: .5rem;
        padding-right: .5rem
    }

    .px-3 {
        padding-left: .75rem;
        padding-right: .75rem
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .py-1 {
        padding-top: .25rem;
        padding-bottom: .25rem
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem
    }

    .py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem
    }

    .pb-1 {
        padding-bottom: .25rem
    }

    .pb-3 {
        padding-bottom: .75rem
    }

    .pe-4 {
        padding-inline-end:1rem}

    .ps-3 {
        padding-inline-start:.75rem}

    .pt-1 {
        padding-top: .25rem
    }

    .pt-2 {
        padding-top: .5rem
    }

    .pt-3 {
        padding-top: .75rem
    }

    .pt-4 {
        padding-top: 1rem
    }

    .pt-6 {
        padding-top: 1.5rem
    }

    .text-center {
        text-align: center
    }

    .text-start {
        text-align: start
    }

    .font-sans {
        font-family: Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"
    }
    @media (min-width: 640px) {
        .sm\:-my-px {
            margin-top:-1px;
            margin-bottom: -1px
        }

        .sm\:mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .sm\:ms-10 {
            margin-inline-start:2.5rem}

        .sm\:ms-6 {
            margin-inline-start:1.5rem}

        .sm\:flex {
            display: flex
        }

        .sm\:hidden {
            display: none
        }

        .sm\:size-16 {
            width: 4rem;
            height: 4rem
        }

        .sm\:size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .sm\:w-full {
            width: 100%
        }

        .sm\:max-w-2xl {
            max-width: 42rem
        }

        .sm\:max-w-lg {
            max-width: 32rem
        }

        .sm\:max-w-md {
            max-width: 28rem
        }

        .sm\:max-w-sm {
            max-width: 24rem
        }

        .sm\:max-w-xl {
            max-width: 36rem
        }

        .sm\:flex-1 {
            flex: 1 1 0%
        }

        .sm\:translate-y-0 {
            --tw-translate-y: 0px;
            transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .sm\:scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .sm\:scale-95 {
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-center {
            justify-content: center
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:p-8 {
            padding: 2rem
        }

        .sm\:px-0 {
            padding-left: 0;
            padding-right: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:pt-5 {
            padding-top: 1.25rem
        }
    }

    @media (min-width: 768px) {
        .md\:row-span-3 {
            grid-row:span 3 / span 3
        }
    }

    @media (min-width: 1024px) {
        .lg\:col-start-2 {
            grid-column-start:2
        }

        .lg\:h-16 {
            height: 4rem
        }

        .lg\:max-w-7xl {
            max-width: 80rem
        }

        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2,minmax(0,1fr))
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3,minmax(0,1fr))
        }

        .lg\:flex-col {
            flex-direction: column
        }

        .lg\:items-end {
            align-items: flex-end
        }

        .lg\:justify-center {
            justify-content: center
        }

        .lg\:gap-8 {
            gap: 2rem
        }

        .lg\:p-10 {
            padding: 2.5rem
        }

        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .lg\:pb-10 {
            padding-bottom: 2.5rem
        }

        .lg\:pt-0 {
            padding-top: 0
        }

        .lg\:text-\[\#FF2D20\] {
            --tw-text-opacity: 1;
            color: rgb(255 45 32 / var(--tw-text-opacity))
        }
    }

    .ltr\:origin-top-left:where([dir=ltr],[dir=ltr] *) {
        transform-origin: top left
    }

    .ltr\:origin-top-right:where([dir=ltr],[dir=ltr] *) {
        transform-origin: top right
    }

    .rtl\:origin-top-left:where([dir=rtl],[dir=rtl] *) {
        transform-origin: top left
    }

    .rtl\:origin-top-right:where([dir=rtl],[dir=rtl] *) {
        transform-origin: top right
    }

    .rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *) {
        flex-direction: row-reverse
    }




    @media (prefers-color-scheme: dark) {
        .dark\:block {
            display:block
        }

        .dark\:hidden {
            display: none
        }
        .dark\:border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity))
        }
        .dark\:bg-gray-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity))
        }
        .dark\:bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgba(201, 131, 1, 0.945);
        }

        .dark\:bg-gray-900 {
            --tw-bg-opacity: 1;
            background-color: black;
        }

        .dark\:text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .dark\:text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }
        .dark\:text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .dark\:text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity))
        }
    }
    </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">


            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
