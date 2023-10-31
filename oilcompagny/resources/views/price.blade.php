<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AcierIndustry</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

            html {
                box-sizing: border-box;
            }
            *,
            *::after,
            *::before {
                box-sizing: inherit;
            }
            .mb-1 {
                margin-bottom: 0.75rem!important;
            }
            @media screen and (min-width: 48rem) {
                .mb-1 {
                    margin-bottom: 1.5rem!important;
                }
            }
            .mb-2 {
                margin-bottom: 1.5rem!important;
            }
            @media screen and (min-width: 48rem) {
                .mb-2 {
                    margin-bottom: 3rem!important;
                }
            }
            .turquoise {
                color: #02ccba!important;
            }
            .white {
                color: #fff!important;
            }
            .text-center {
                text-align: center!important;
            }
            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }
            html {
                font-family: sans-serif;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            body {
                margin: 0;
            }
            footer,
            header,
            nav,
            section {
                display: block;
            }
            a {
                background-color: transparent;
                -webkit-text-decoration-skip: objects;
            }
            a:active,
            a:hover {
                outline-width: 0;
            }
            img {
                border-style: none;
            }
            svg:not(:root) {
                overflow: hidden;
            }
            input {
                font: inherit;
                margin: 0;
            }
            input {
                overflow: visible;
            }
            [type="checkbox"] {
                box-sizing: border-box;
                padding: 0;
            }
            ::-webkit-input-placeholder {
                color: inherit;
                opacity: 0.54;
            }
            #contain-all {
                width: 100%;
                overflow: hidden;
                background: #fff;
                backface-visibility: hidden;
                -webkit-transform-style: preserve-3d;
            }
            .contain {
                max-width: 73.75rem;
                margin-left: auto;
                margin-right: auto;
                padding-top: 3rem;
                padding-bottom: 3rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .contain::after {
                clear: both;
                content: "";
                display: table;
            }
            @media screen and (min-width: 48rem) {
                .contain {
                    padding-top: 6rem;
                    padding-bottom: 6rem;
                }
            }
            @media screen and (min-width: 73.75rem) {
                .contain {
                    padding-left: 0;
                    padding-right: 0;
                }
            }
            .contain--small {
                padding-top: 3rem;
                padding-bottom: 3rem;
                margin: 0 auto;
            }
            @media screen and (min-width: 48rem) {
                .contain--small {
                    padding-top: 4.5rem;
                    padding-bottom: 4.5rem;
                }
            }
            body {
                color: #525c65;
                font-size: 16px;
                font-family: "Open Sans", sans-serif;
                line-height: 1.5rem;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            p {
                margin-top: 0;
                margin-bottom: 1.5rem;
                font-size: 0.875rem;
                line-height: 1.5rem;
                color: #525c65;
                font-weight: 400;
            }
            @media screen and (min-width: 48rem) {
                p {
                    margin-bottom: 1.5rem;
                }
            }
            @media screen and (min-width: 48rem) {
                p {
                    font-size: 1rem;
                    line-height: 1.75rem;
                }
            }
            p.lead {
                margin-top: 0;
                margin-bottom: 1.5rem;
                font-size: 1rem;
                line-height: 1.75rem;
            }
            @media screen and (min-width: 48rem) {
                p.lead {
                    margin-bottom: 3rem;
                }
            }
            @media screen and (min-width: 48rem) {
                p.lead {
                    font-size: 1.125rem;
                    line-height: 2rem;
                }
            }
            p a {
                border-bottom: 1px solid #91daee;
                cursor: pointer;
            }
            a {
                border-bottom: none;
                text-decoration: none;
                color: #525c65;
                transition: color 0.3s ease;
            }
            a:active,
            a:focus,
            a:hover {
                color: #24292d;
            }
            a.white {
                color: #fff;
            }
            a.white:hover {
                color: #cccccc;
            }
            .text-only {
                font-size: 0.8125rem;
                line-height: 1.5rem;
                width: auto;
                border-bottom: none;
                color: #02b3e4;
                display: inline-block;
                text-decoration: none;
                letter-spacing: 0.0625rem;
                text-transform: uppercase;
                font-weight: 600;
                transition: color 0.3s ease, background 0.3s ease;
            }
            @media screen and (min-width: 48rem) {
                .text-only {
                    font-size: 0.8125rem;
                    line-height: 1.5rem;
                }
            }
            .text-only:hover {
                text-decoration: none;
                color: #028bb1;
            }
            h2,
            h3,
            .h6 {
                margin-top: 0;
                margin-bottom: 1.5rem;
                color: #2e3d49;
                -webkit-font-smoothing: antialiased;
            }
            @media screen and (min-width: 48rem) {
                h2,
                h3,
                .h6 {
                    margin-bottom: 1.5rem;
                }
            }
            h2 {
                font-size: 1.75rem;
                line-height: 2.25rem;
                font-weight: 300;
            }
            @media screen and (min-width: 48rem) {
                h2 {
                    font-size: 2rem;
                    line-height: 2.25rem;
                }
            }
            h3 {
                font-size: 1.5rem;
                line-height: 2.25rem;
                font-weight: 300;
            }
            @media screen and (min-width: 48rem) {
                h3 {
                    font-size: 1.75rem;
                    line-height: 2.25rem;
                }
            }
            .h6 {
                font-size: 0.8125rem;
                line-height: 1.5rem;
                letter-spacing: 0.125rem;
                text-transform: uppercase;
                font-weight: 600;
                color: #7d97ad;
            }
            @media screen and (min-width: 48rem) {
                .h6 {
                    font-size: 0.8125rem;
                    line-height: 1.5rem;
                }
            }
            label {
                margin-top: 0;
                margin-bottom: 0.75rem;
                display: block;
            }
            @media screen and (min-width: 48rem) {
                label {
                    margin-bottom: 1.5rem;
                }
            }
            ul {
                padding: 0;
                list-style-type: none;
                margin-top: 0;
                margin-bottom: 0.75rem;
            }
            @media screen and (min-width: 48rem) {
                ul {
                    margin-bottom: 1.5rem;
                }
            }
            ul:last-child {
                margin-bottom: 0;
            }
            img,
            svg {
                margin: 0;
                max-width: 100%;
                height: auto;
            }
            :target:before {
                content: "";
                display: inline-block;
                height: 130px;
                margin: -130px 0 0;
            }
            .header {
                max-width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
            .header::after {
                clear: both;
                content: "";
                display: table;
            }
            .header.header--clone {
                width: 100%;
            }
            .header.header--clone .header__navbar {
                height: 4.5rem;
            }
            .header__navbar {
                max-width: 73.75rem;
                margin-left: auto;
                margin-right: auto;
                height: 4.5rem;
                padding: 0 1.5em;
            }
            .header__navbar::after {
                clear: both;
                content: "";
                display: table;
            }
            @media screen and (min-width: 48rem) {
                .header__navbar {
                    height: 6rem;
                }
            }
            @media screen and (min-width: 73.75rem) {
                .header__navbar {
                    padding: 0;
                }
            }
            .header__sidenav {
                background-color: #2e3d49;
            }
            .header__sidenav--logo {
                height: 4.5rem;
                display: block;
                background-color: #1C262F;
            }
            .header__sidenav--logo::after {
                clear: both;
                content: "";
                display: table;
            }
            .header__sidenav--logo .logo-link {
                display: block;
                width: 100%;
                height: 100%;
            }
            .header__sidenav--logo .logo-link .logo-wordmark {
                position: relative;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
                padding-left: 1.5em;
                width: 11.0625rem;
                height: 1.9375rem;
            }
            .header__sidenav--logo .logo-link #wordmark {
                fill: #fff;
            }
            .header__sidenav--navigation {
                display: block;
            }
            .header__sidenav--navigation::after {
                clear: both;
                content: "";
                display: table;
            }
            .header__sidenav--navigation li {
                height: 4.5rem;
            }
            .header__sidenav--navigation a {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
                color: #fff;
                display: block;
                padding-left: 1.5em;
            }
            @media screen and (min-width: 48rem) {
                .header__sidenav--navigation a {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                }
            }
            .header__sidenav--navigation a:hover {
                color: #cccccc;
            }
            .header__sidenav--navigation .guest,
            .header__sidenav--navigation .student {
                display: none;
            }
            .header__sidenav--navigation .guest a,
            .header__sidenav--navigation .student a {
                color: #02b3e4;
            }
            .header__sidenav--navigation .guest a:hover,
            .header__sidenav--navigation .student a:hover {
                color: #01647f;
            }
            .footer {
                background-image: linear-gradient(to bottom right, #F7F7F7, #EAFBFF);
            }
            .footer__logo {
                height: 3.75rem;
            }
            .page-leaderboard .logo-wordmark #wordmark {
                fill: #fff;
            }
            .banner {
                font-size: 0.8125rem;
                line-height: 1.5rem;
                width: 100%;
                color: #fff;
                display: none;
                position: relative;
                text-align: center;
                padding: 0.75rem 1.5rem;
                background-color: #7d97ad;
            }
            @media screen and (min-width: 48rem) {
                .banner {
                    font-size: 0.875rem;
                    line-height: 1.5rem;
                }
            }
            @media screen and (min-width: 48rem) {
                .banner {
                    padding: 0.625rem 1.5rem;
                }
            }
            .banner.featured {
                display: none;
                background-color: #fff;
            }
            .banner.featured p {
                font-size: 0.8125rem;
                line-height: 1.5rem;
                margin: 0;
                color: #02b3e4;
            }
            @media screen and (min-width: 48rem) {
                .banner.featured p {
                    font-size: 1rem;
                    line-height: 1.75rem;
                }
            }
            .banner.featured p a {
                color: #02b3e4;
                border-bottom: none;
            }
            @media screen and (min-width: 30rem) {
                .banner.featured p {
                    display: inline;
                }
            }
            .banner.featured p .underline {
                border-bottom: 1px solid #02b3e4;
            }
            .banner--close {
                position: absolute;
                top: 1em;
                right: 1em;
                width: 0.75rem;
                height: 0.75rem;
                cursor: pointer;
                opacity: 0.7;
                display: block;
                line-height: 0;
                background-size: cover;
                transition: opacity 0.3s ease;
                background: url(https://d125fmws0bore1.cloudfront.net/assets/svgs/icon_close_white-80b9a0dff7e94851c87e9476c187050c85cd56da3720a7974a8627913ee91bff.svg) 0 0 no-repeat;
            }
            .banner--close:hover {
                opacity: 1;
            }
            .banner--close.dark {
                background-image: url(https://d125fmws0bore1.cloudfront.net/assets/svgs/icon_close_dark-c7c6a31cb37c841e14b44a8c1a7b5e81447b9442d94fdea8bcf66cfea18d1a13.svg);
            }
            @media screen and (min-width: 30rem) {
                .banner--close {
                    position: absolute;
                    top: 50%;
                    -webkit-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);
                    width: 0.875rem;
                    height: 0.875rem;
                }
            }
            .button,
            .button--primary {
                display: block;
                cursor: pointer;
                appearance: none;
                user-select: none;
                text-align: center;
                white-space: nowrap;
                vertical-align: top;
                text-decoration: none;
                vertical-align: middle;
                height: 3rem;
                padding: 0 0.5rem;
                text-transform: uppercase;
                font-size: 16px;
                font-weight: 600;
                font-size: 0.8125rem;
                font-family: "Open Sans", sans-serif;
                line-height: 2.625rem;
                -webkit-font-smoothing: antialiased;
                border-radius: 0.25rem;
                letter-spacing: 0.125rem;
                transition: all 0.3s ease;
            }
            .button--primary {
                box-shadow: 8px 10px 20px 0px rgba(46, 61, 73, 0.15);
            }
            .button--primary:hover {
                box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
            }
            .button--primary {
                width: 13.75rem;
                color: #fff;
                background-color: #02b3e4;
                border: 0.125rem solid transparent;
            }
            .button--primary:focus,
            .button--primary:hover {
                outline: none;
                color: white;
                border-color: transparent;
                background-color: #029fcb;
            }
            .hero {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }
            .hero--inverse {
                margin-top: -6rem;
            }
            .header--clone {
                top: 0;
                left: 0;
                position: fixed;
                z-index: 7000;
                backface-visibility: hidden;
                transform: translate3d(0, -100%, 0);
                -webkit-transform-style: preserve-3d;
                transition: all 0.3s ease;
            }
            .slideout-menu {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: none;
                overflow-y: auto;
                z-index: 6000;
                width: 16.25rem;
                -webkit-overflow-scrolling: touch;
            }
            .slideout-panel {
                position: relative;
                z-index: 7000;
            }
            .remodal,
            [data-remodal-id] {
                display: none;
            }
            .remodal-is-initialized {
                display: inline-block;
            }
            .remodal-overlay {
                position: fixed;
                top: -99em;
                left: -99em;
                right: -99em;
                bottom: -99em;
                display: none;
                z-index: 9000;
                backface-visibility: hidden;
            }
            .remodal-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: none;
                overflow: auto;
                text-align: center;
                backface-visibility: hidden;
                z-index: 10000;
                -webkit-overflow-scrolling: touch;
            }
            .remodal-wrapper::after {
                height: 100%;
                content: "";
                display: inline-block;
                vertical-align: middle;
            }
            .remodal {
                padding-top: 3rem;
                padding-bottom: 3rem;
                width: 100%;
                outline: none;
                position: relative;
                background: #fff;
                text-align: left;
                text-size-adjust: 100%;
                vertical-align: middle;
                max-width: 36.25rem;
                padding-left: 2.25rem;
                padding-right: 2.25rem;
                box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
                transform: translate3d(0, 0, 0);
                border-radius: 0.375rem;
            }
            @media screen and (min-width: 48rem) {
                .remodal {
                    padding-top: 4.5rem;
                    padding-bottom: 4.5rem;
                }
            }
            @media screen and (min-width: 48rem) {
                .remodal {
                    padding-left: 3rem;
                    padding-right: 3rem;
                }
            }
            .remodal label {
                display: none;
            }
            .remodal-close {
                top: 0;
                right: 0;
                opacity: 0.5;
                outline: none;
                display: block;
                width: 3rem;
                height: 3rem;
                cursor: pointer;
                position: absolute;
                transition: opacity 0.3s ease;
                background: url(https://d125fmws0bore1.cloudfront.net/assets/svgs/icon_close_dark-c7c6a31cb37c841e14b44a8c1a7b5e81447b9442d94fdea8bcf66cfea18d1a13.svg) no-repeat center;
            }
            .remodal-close:hover {
                opacity: 0.7;
            }
            .remodal-overlay {
                background: rgba(46, 61, 73, 0.95);
            }
            .page-leaderboard {
                background-color: #fafbfc;
            }
            .page-leaderboard .hero {
                background-image: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/hero-leaderboard-b861e1752ed28ae950fcfccd51008fe7f4d158a08c68e909201f46e6086992ad.jpg);
            }
            .page-leaderboard .leaderboard-progress {
                clear: both;
            }
            .page-leaderboard .leaderboard-progress .contain {
                padding: 3em 1.5em 2em 1.5em;
            }
            @media (min-width: 70em) {
                .page-leaderboard .leaderboard-progress .contain {
                    padding: 6em 0 4.5em 0;
                }
            }
            .page-leaderboard .leaderboard-progress p {
                max-width: 48.5em;
                margin: 0 auto;
            }
            .page-leaderboard .ranking {
                clear: both;
            }
            .page-leaderboard .ranking .contain {
                padding: 0 1.5em;
            }
            .page-leaderboard .ranking .ranking-table {
                max-width: 66em;
                margin: 0 auto;
            }
            .page-leaderboard .ranking .ranking-table-body {
                box-shadow: 0 0 0.75em 0 rgba(46, 60, 73, 0.12);
                border-radius: 0.375rem;
                border: solid 0.063em #dbe2e8;
                max-height: 24.625em;
                overflow: scroll;
                -webkit-overflow-scrolling: touch;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-body {
                    max-height: 31.125em;
                }
            }
            .page-leaderboard .ranking .ranking-table-header-row {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding-top: 1.125em;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-header-row {
                    padding-top: 1.875em;
                }
            }
            .page-leaderboard .ranking .ranking-table-header-data {
                text-align: center;
                align-self: center;
            }
            .page-leaderboard .ranking .ranking-table-header-data:first-child {
                width: 20%;
            }
            @media (min-width: 48em) {
                .page-leaderboard .ranking .ranking-table-header-data:first-child {
                    width: 15%;
                }
            }
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                padding-left: 9%;
                text-align: left;
                width: 50%;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                    padding-left: 6.3%;
                }
            }
            @media (min-width: 48em) {
                .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                    padding-left: 9%;
                    width: 55%;
                }
            }
            @media (min-width: 70em) {
                .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                    padding-left: 4%;
                }
            }
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(3) {
                width: 30%;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-header-data:nth-child(3) {
                    width: 25%;
                }
            }
            .page-leaderboard .ranking .ranking-table-row {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding-top: .875em;
                padding-bottom: .875em;
                background-color: #fff;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-row {
                    padding-top: 1.125em;
                    padding-bottom: 1.125em;
                }
            }
            .page-leaderboard .ranking .ranking-table-row:nth-child(even) {
                background-color: #fafbfc;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-1,
            .page-leaderboard .ranking .ranking-table-row-leader-2,
            .page-leaderboard .ranking .ranking-table-row-leader-3 {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding-top: .875em;
                padding-bottom: .875em;
                background-color: #fff;
                box-shadow: 0 0 0.75em 0 rgba(46, 60, 73, 0.12);
                border-radius: 0.375rem;
                margin-bottom: 1.25em;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-row-leader-1,
                .page-leaderboard .ranking .ranking-table-row-leader-2,
                .page-leaderboard .ranking .ranking-table-row-leader-3 {
                    padding-top: 1.125em;
                    padding-bottom: 1.125em;
                }
            }
            .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1,
            .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2,
            .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 {
                display: flex;
                justify-content: center;
                width: 20%;
            }
            @media (min-width: 48em) {
                .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1,
                .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2,
                .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 {
                    width: 15%;
                }
            }
            .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold,
            .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver,
            .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
                margin-top: -1.313em;
                height: 2.875em;
                width: 2.875em;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold,
                .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver,
                .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
                    margin-top: -1.563em;
                    height: 3.875em;
                    width: 3.875em;
                }
            }
            .page-leaderboard .ranking .ranking-table-row-leader-1 {
                border: solid 0.125em #ecc81a;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold {
                background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-gold-c49052bfa07f36621f16dbe77f7fc36cbafd72ff088ea970256ff998be05687b.svg) no-repeat;
                background-size: contain;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-2 {
                border: solid 0.125em #dbe2e8;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver {
                background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-silver-d099c5dd916c167c3ba4716c8968a819f317daaef1901c8e8bae6c6932852faa.svg) no-repeat;
                background-size: contain;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-3 {
                border: solid 0.125em #dfdfd1;
            }
            .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
                background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-bronze-d0f15d413800257442c8d4b2d5239cfe28c9fd9594f863ab1fad5258f8d1d5eb.svg) no-repeat;
                background-size: contain;
            }
            .page-leaderboard .ranking .ranking-table-data {
                align-self: center;
                color: #525c65;
                font-size: 1em;
            }
            .page-leaderboard .ranking .ranking-table-data:first-child {
                text-align: center;
                width: 20%;
                color: #525c65;
                font-weight: 600;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-data:first-child {
                    font-size: 1.25em;
                }
            }
            @media (min-width: 48em) {
                .page-leaderboard .ranking .ranking-table-data:first-child {
                    width: 15%;
                }
            }
            .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                color: #2e3d49;
                width: 55%;
                font-size: .875em;
                padding-left: 9%;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                    font-size: 1em;
                }
            }
            @media (min-width: 48em) {
                .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                    font-size: 1em;
                    width: 55%;
                }
            }
            @media (min-width: 70em) {
                .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                    font-size: 1em;
                    padding-left: 4%;
                }
            }
            .page-leaderboard .ranking .ranking-table-data:nth-child(3) {
                font-size: .875em;
                text-align: center;
                width: 25%;
                padding-right: 4%;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-data:nth-child(3) {
                    padding-right: 0%;
                    font-size: 1em;
                }
            }
            .page-leaderboard .ranking .ranking-table-data:nth-child(3) .complete {
                margin: -1.25em auto;
                transform: translateY(18%);
                background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/leaderboard-complete-316433dd02f79185962dbaa82ad025c4722722e8ad276abe2aa00463a145691e.svg) no-repeat;
                background-size: contain;
                width: 3em;
                height: 3em;
            }
            @media (min-width: 33em) {
                .page-leaderboard .ranking .ranking-table-data:nth-child(3) .complete {
                    width: 3.5em;
                    height: 3.5em;
                }
            }
            /*! CSS Used from: Embedded */

            iframe#_hjRemoteVarsFrame {
                display: none!important;
                width: 1px!important;
                height: 1px!important;
                opacity: 0!important;
                pointer-events: none!important;
            }
            /*! CSS Used from: Embedded */

            .icon-chat-bubble-call-to-action-cls-1 {
                fill: #182430;
            }
            .icon-chat-bubble-call-to-action-cls-2 {
                font-size: 14px;
                fill: #fff;
                font-family: "Open Sans", sans-serif;
            }
            .icon-chat-bubble-call-to-action-cls-3,
            .icon-chat-bubble-call-to-action-cls-4 {
                fill: none;
                stroke: #fff;
                stroke-miterlimit: 10;
                stroke-width: 2px;
            }
            .icon-chat-bubble-call-to-action-cls-3 {
                stroke-linecap: round;
            }
            /*! CSS Used from: https://s3.amazonaws.com/rupert-public-files/udacity/tars.css */

            app {
                height: 100%;
            }
            #rupertChatWrapper {
                height: 100%;
                margin: 0px;
                padding: 0px;
                font: normal normal 100% "Helvetica Neue", Helvetica, sans-serif;
                font-size: 14px;
                background-color: #fff;
                overflow: hidden;
            }
            #rupertChatWrapper *::-webkit-input-placeholder {
                color: #c3cdd4;
            }
            #rupertChatWrapper *:-moz-placeholder {
                color: #c3cdd4;
            }
            #rupertChatWrapper *::-moz-placeholder {
                color: #c3cdd4;
            }
            #rupertChatWrapper *:-ms-input-placeholder {
                color: #c3cdd4;
            }
            #rupertChatWrapper div#chatview {
                height: 100%;
                position: relative;
                display: flex;
                flex-direction: column;
                margin: 0 auto;
                overflow: hidden!important;
            }
            /*! CSS Used from: Embedded */

            #chat {
                position: fixed;
                right: 24px;
                bottom: 24px;
                z-index: 7000;
                cursor: pointer;
            }
            #chat > div {
                min-height: 450px;
                height: 40vh;
                width: 330px;
                border: 1px solid #c3cdd4;
            }
            #chat > #icon-chat-bubble-call-to-action {
                float: right;
                height: 60px;
                overflow: visible;
            }
            #chat > div > a {
                position: absolute;
                z-index: 101;
                right: 10px;
                top: 10px;
                line-height: 12px;
                background-color: #bcc9d4;
                height: 22px;
                width: 22px;
                text-align: center;
                border-radius: 50%;
            }
            #chat > div > a svg {
                fill: white;
                box-sizing: content-box;
                position: relative;
                top: 4px;
                height: 10px;
            }
            #icon-chat-bubble-call-to-action {
                animation: bounceInUp;
                animation-duration: 1s;
                animation-iteration-count: 1;
            }
            .icon-chat-bubble-call-to-action-close-background {
                transform: translateX(204px) translateY(30px);
                fill: rgba(255, 255, 255, 0.1);
            }
            .icon-chat-bubble-call-to-action-cls-1:hover,
            .icon-chat-bubble-call-to-action-cls-2:hover,
            .icon-chat-bubble-call-to-action-cls-2 tspan:hover,
            .icon-chat-bubble-call-to-action-cls-3:hover,
            .icon-chat-bubble-call-to-action-cls-4:hover,
            .icon-chat-bubble-call-to-action-close:hover,
            .icon-chat-bubble-call-to-action-close-background:hover {
                cursor: pointer;
            }
            .icon-chat-bubble-call-to-action-close {
                transform-origin: 50% 50%;
                transform: translateX(200px) translateY(26px);
                fill: rgba(255, 255, 255, 0.5);
            }
            .icon-chat-bubble-call-to-action-close-background:hover ~ .icon-chat-bubble-call-to-action-close,
            .icon-chat-bubble-call-to-action-close:hover {
                transform-origin: 50% 50%;
                transform: translateX(200px) translateY(26px) scale(1.5, 1.5);
                fill: white;
            }
            /*! CSS Used keyframes */

            @-webkit-keyframes bounceInUp {
                0%, 60%, 75%, 90%, 100% {
                    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                }
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 3000px, 0);
                    transform: translate3d(0, 3000px, 0);
                }
                60% {
                    opacity: 1;
                    -webkit-transform: translate3d(0, -20px, 0);
                    transform: translate3d(0, -20px, 0);
                }
                75% {
                    -webkit-transform: translate3d(0, 10px, 0);
                    transform: translate3d(0, 10px, 0);
                }
                90% {
                    -webkit-transform: translate3d(0, -5px, 0);
                    transform: translate3d(0, -5px, 0);
                }
                100% {
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }
            @keyframes bounceInUp {
                0%, 60%, 75%, 90%, 100% {
                    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                }
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 3000px, 0);
                    -ms-transform: translate3d(0, 3000px, 0);
                    transform: translate3d(0, 3000px, 0);
                }
                60% {
                    opacity: 1;
                    -webkit-transform: translate3d(0, -20px, 0);
                    -ms-transform: translate3d(0, -20px, 0);
                    transform: translate3d(0, -20px, 0);
                }
                75% {
                    -webkit-transform: translate3d(0, 10px, 0);
                    -ms-transform: translate3d(0, 10px, 0);
                    transform: translate3d(0, 10px, 0);
                }
                90% {
                    -webkit-transform: translate3d(0, -5px, 0);
                    -ms-transform: translate3d(0, -5px, 0);
                    transform: translate3d(0, -5px, 0);
                }
                100% {
                    -webkit-transform: translate3d(0, 0, 0);
                    -ms-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }
            @keyframes bounceInUp {
                from, 60%, 75%, 90%, to {
                    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                }
                from {
                    opacity: 0;
                    transform: translate3d(0, 3000px, 0);
                }
                60% {
                    opacity: 1;
                    transform: translate3d(0, -5px, 0);
                }
                75% {
                    transform: translate3d(0, 3px, 0);
                }
                90% {
                    transform: translate3d(0, -2px, 0);
                }
                to {
                    transform: translate3d(0, 0, 0);
                }
            }
            /*! CSS Used fontfaces */

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: local("Open Sans Light"), local("OpenSans-Light"), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTaRDOzjiPcYnFooOUGCOsRk.woff) format("woff");
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSqRDOzjiPcYnFooOUGCOsRk.woff) format("woff");
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 300;
                src: local("Open Sans Light Italic"), local("OpenSansLight-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxvR_54zmj3SbGZQh3vCOwvY.woff) format("woff");
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 400;
                src: local("Open Sans Italic"), local("OpenSans-Italic"), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBrrIa-7acMAeDBVuclsi6Gc.woff) format("woff");
            }

            .boxs {
                height: 55vh;
                width: 10vw;
                padding-top: 1rem;
            }

        </style>
    </head>
    <body class="antialiased">
{{--        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">--}}
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white" style="padding: 3rem 0;">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <a href="{{ url('/') }}" style="margin-right: 1rem;" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Classement</a>
                    <a href="{{ url('/price') }}" style="margin-right: 1rem;" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nos prix</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

{{--                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif--}}
                    @endauth
                </div>
            @endif



                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg boxs">
                            <p class="text-center" style="font-size: 1.75rem;">Nos prix de rachats :</p>
                            <p class="info">Charbon : {{ $items->where('name', '=', 'Charbon')->first()->price }}</p>
                            <p class="info">Fer : {{ $items->where('name', '=', 'Fer')->first()->price }}</p>
                            <p class="info">Carte de fidelité : Prochainement</p>
                        </div>
                    </div>
                </div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg boxs">
                            <p class="text-center" style="font-size: 1.75rem;">Nos prix de vente :</p>
                            <p class="info">Plaque d'acier en petite quantité : {{ $items->where('name', '=', 'Acier')->where('type', '=', 'Interimaire')->first()->price }}/unité</p>
                            <p class="info">Plaque d'acier en grosse quantité : {{ $items->where('name', '=', 'Acier')->where('type', '=', 'Grossiste')->first()->price }}/unité</p>
                        </div>
                    </div>
                </div>
        </div>


    </body>
</html>
